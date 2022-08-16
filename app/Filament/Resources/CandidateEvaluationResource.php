<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateEvaluationResource\Pages;
use App\Filament\Resources\CandidateEvaluationResource\RelationManagers;
use App\Models\CandidateEvaluation;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateEvaluationResource extends Resource
{
    protected static ?string $model = CandidateEvaluation::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id'),
                TextInput::make('user.name'),
                TextInput::make('course.course_name'),
//                Forms\Components\Textarea::make('candidate_evaluation_input'),
                TextInput::make('candidate_evaluation_score')
                    ->maxLength(65535),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->searchable(),
                Tables\Columns\TextColumn::make('user.candidate.mobile'),
                Tables\Columns\TextColumn::make('course.course_name'),
                Tables\Columns\TextColumn::make('candidate_evaluation_score')->label('Score'),
                Tables\Columns\TextColumn::make('course.course_mode')->searchable(),
                Tables\Columns\TextColumn::make('course.campus')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->sortable()
                    ->dateTime('h:i A d-M-Y'),
            ])->defaultSort('created_at','desc')
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCandidateEvaluations::route('/'),
            'create' => Pages\CreateCandidateEvaluation::route('/create'),
            'edit' => Pages\EditCandidateEvaluation::route('/{record}/edit'),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()->withoutGlobalScopes()->select('candidate_evaluation_score','user_id','candidate_course_id');
    }

    public static function canCreate(): bool
    {
        return false; // TODO: Change the autogenerated stub
    }
    public static function canEdit(Model $record): bool
    {
        return false; // TODO: Change the autogenerated stub
    }

}
