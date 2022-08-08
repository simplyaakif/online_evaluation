<?php

namespace App\Filament\Resources\SessionDurationResource\Pages;

use App\Filament\Resources\SessionDurationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSessionDuration extends EditRecord
{
    protected static string $resource = SessionDurationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
