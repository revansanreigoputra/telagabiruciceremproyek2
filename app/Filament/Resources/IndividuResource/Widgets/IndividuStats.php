<?php

namespace App\Filament\Resources\IndividuResource\Widgets;

use App\Models\Individu;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class IndividuStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Booking Baru', Individu::query()->where('status', 'baru')->count()),
            Stat::make('Booking di Proses', Individu::query()->where('status', 'proses')->count()),
            Stat::make('Booking Berhasil', Individu::query()->where('status', 'sukses')->count()),
            Stat::make('Booking Batal', Individu::query()->where('status', 'batal')->count()),
        ];
    }
}
