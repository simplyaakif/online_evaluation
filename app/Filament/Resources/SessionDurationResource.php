<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SessionDurationResource\Pages;
use App\Filament\Resources\SessionDurationResource\RelationManagers;
use App\Models\SessionDuration;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SessionDurationResource extends Resource
{
    protected static ?string $model = SessionDuration::class;

    protected static ?string $navigationIcon = 'heroicon-o-dots-horizontal';

    protected static ?string $navigationGroup = 'Academic';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('session_duration')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('session_duration'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSessionDurations::route('/'),
            'create' => Pages\CreateSessionDuration::route('/create'),
            'edit' => Pages\EditSessionDuration::route('/{record}/edit'),
        ];
    }
}
