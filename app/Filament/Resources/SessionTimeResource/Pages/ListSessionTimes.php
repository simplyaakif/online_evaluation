<?php

namespace App\Filament\Resources\SessionTimeResource\Pages;

use App\Filament\Resources\SessionTimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSessionTimes extends ListRecords
{
    protected static string $resource = SessionTimeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
