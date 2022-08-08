<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\CourseResource\Pages;
    use App\Filament\Resources\CourseResource\RelationManagers;
    use App\Models\Course;
    use App\Models\SessionDuration;
    use Filament\Forms;
    use Filament\Forms\Components\MultiSelect;
    use Filament\Forms\Components\Repeater;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\Textarea;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Components\Toggle;
    use Filament\Resources\Form;
    use Filament\Resources\Resource;
    use Filament\Resources\Table;
    use Filament\Tables;
    use Filament\Tables\Columns\BooleanColumn;
    use Filament\Tables\Columns\TextColumn;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\SoftDeletingScope;

    class CourseResource extends Resource {

        protected static ?string $model = Course::class;

        protected static ?string $navigationIcon = 'heroicon-o-book-open';

        protected static ?string $navigationGroup = 'Academic';

        public static function form(Form $form): Form
        {
            return $form->schema([
                                     TextInput::make('title')->maxLength(255)->columnSpan(12),

                                     MultiSelect::make('session_time')->relationship('sessionTime', 'time')->columnSpan(6),
                                     MultiSelect::make('start_date')->relationship('sessionStartDate', 'start_date')->columnSpan(6),
//                                     Repeater::make('Session')
//                                         ->relationship('sessionDurations')
//                                         ->schema([
//
//       Select::make('session_duration_id')->label('Session Duration')
//           ->options(SessionDuration::all()->pluck('session_duration','id'))
//           ->required()
//           ->columnSpan(6),
//       TextInput::make('price')->columnSpan(6)->required()
//                                                                       ])->minItems(1)->columns(12)->columnSpan(12),
                                     Toggle::make('is_weekly'),
                                 ])->columns(12);
        }

        public static function table(Table $table): Table
        {
            return $table->columns([
                                       TextColumn::make('title'),
                                       //                BooleanColumn::make('is_weekly'),
                                       TextColumn::make('sessionTime.time'),
                                       TextColumn::make('sessionDuration.session_duration'),
                                       TextColumn::make('sessionStartDate.start_date'),
                                       TextColumn::make('created_at')->dateTime(),
                                   ])->filters([//
                                               ])->actions([
                                                               Tables\Actions\EditAction::make(),
                                                           ])->bulkActions([
                                                                               Tables\Actions\DeleteBulkAction::make(),
                                                                           ]);
        }

        public static function getRelations(): array
        {
            return [
                RelationManagers\SessionDurationsRelationManager::class
            ];
        }

        public static function getPages(): array
        {
            return [
                'index'  => Pages\ListCourses::route('/'),
                'create' => Pages\CreateCourse::route('/create'),
                'edit'   => Pages\EditCourse::route('/{record}/edit'),
            ];
        }


    }
