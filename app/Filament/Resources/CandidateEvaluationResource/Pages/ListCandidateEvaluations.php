<?php

namespace App\Filament\Resources\CandidateEvaluationResource\Pages;

use App\Filament\Resources\CandidateEvaluationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCandidateEvaluations extends ListRecords
{
    protected static string $resource = CandidateEvaluationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
