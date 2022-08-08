<?php

namespace App\Filament\Resources\SessionStartDateResource\Pages;

use App\Filament\Resources\SessionStartDateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSessionStartDates extends ListRecords
{
    protected static string $resource = SessionStartDateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
