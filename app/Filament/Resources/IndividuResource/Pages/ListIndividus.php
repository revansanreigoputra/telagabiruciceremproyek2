<?php

namespace App\Filament\Resources\IndividuResource\Pages;

use App\Filament\Resources\IndividuResource;
use App\Filament\Resources\IndividuResource\Widgets\IndividuStats;
use App\Models\Individu;
use Filament\Actions;
// use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListIndividus extends ListRecords
{
    protected static string $resource = IndividuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array{
        return [
           IndividuStats::class
        ];
    }

    public function getTabs(): array {
        return [
            null => Tab::make('Semua'),
            'baru' => Tab::make()->query(fn ($query) => $query->where('status', 'baru')),
            'proses' => Tab::make()->query(fn ($query) => $query->where('status', 'proses')),
            'sukses' => Tab::make()->query(fn ($query) => $query->where('status', 'sukses')),
            'batal' => Tab::make()->query(fn ($query) => $query->where('status', 'batal')),
        ];
    }

}
