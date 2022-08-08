<?php

namespace App\Filament\Resources\CandidateEvaluationResource\Pages;

use App\Filament\Resources\CandidateEvaluationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCandidateEvaluation extends EditRecord
{
    protected static string $resource = CandidateEvaluationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
