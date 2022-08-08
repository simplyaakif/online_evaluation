<?php

namespace App\Filament\Resources\SessionStartDateResource\Pages;

use App\Filament\Resources\SessionStartDateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSessionStartDate extends EditRecord
{
    protected static string $resource = SessionStartDateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
