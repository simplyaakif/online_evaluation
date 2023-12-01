<?php

namespace App\Filament\Resources\CourseResource\RelationManagers;

use App\Models\SessionDuration;
use DB;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasRelationshipTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SessionDurationsRelationManager extends RelationManager
{
    protected static string $relationship = 'sessionDurations';

    protected static ?string $recordTitleAttribute = 'session_duration';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                         Select::make('session_duration_id')->label('Session Duration')
                           ->options(SessionDuration::all()->pluck('session_duration','id'))
                           ->required(),
                TextInput::make('price')
                    ->required()
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('session_duration'),
                TextColumn::make('price'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->using(function (HasRelationshipTable $livewire, array $data): Model {
//                        dd($livewire->ownerRecord->id,$data);
                        DB::table('course_session_duration')->insert([
                                                       'session_duration_id' => $data['session_duration_id'],
                                                       'course_id' => $livewire->ownerRecord->id,
                                                       'price'=>$data['price']
                                                   ]);
                        return $livewire->getRelationship()->latest()->first();
                        //                        return $livewire->session()->create($data);
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->using(function (Model $record, array $data): Model {
//                        dd($record,$data);
                        DB::table('course_session_duration')
                            ->where('course_id', $record->course_id)
                            ->where('session_duration_id', $record->session_duration_id)
                            ->update([
                                'price' => $data['price'],
                                'session_duration_id' => $data['session_duration_id'],
                                     ]);
                        return $record;
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
