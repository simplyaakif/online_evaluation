<?php

namespace App\Filament\Resources\CandidateEvaluationResource\Pages;

use App\Filament\Resources\CandidateEvaluationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Filters\Layout;

class ListCandidateEvaluations extends ListRecords
{
    protected static string $resource = CandidateEvaluationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getTableFiltersLayout(): ?string
    {
        return Layout::AboveContent;
    }
}
