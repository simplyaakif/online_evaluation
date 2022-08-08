<?php

namespace App\Filament\Resources\SessionTimeResource\Pages;

use App\Filament\Resources\SessionTimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSessionTime extends EditRecord
{
    protected static string $resource = SessionTimeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
