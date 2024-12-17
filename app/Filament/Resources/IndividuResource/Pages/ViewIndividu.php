<?php

namespace App\Filament\Resources\IndividuResource\Pages;

use App\Filament\Resources\IndividuResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIndividu extends ViewRecord
{
    protected static string $resource = IndividuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
