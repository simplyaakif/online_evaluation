<?php

namespace App\Filament\Resources\CourseResource\RelationManagers;

use App\Models\SessionDuration;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
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
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
