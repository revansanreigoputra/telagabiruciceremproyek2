<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\IndividuResource;
use App\Models\Individu;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(IndividuResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                 ->label('Booking ID')
                 ->searchable(),

                 TextColumn::make('user.name')
                 ->searchable(),

                 TextColumn::make('total')
                 ->money("IDR"),

                 TextColumn::make('status')
                  ->label('Status Order')
                  ->badge()
                  ->color(fn (string $state):string => match($state){
                    'baru' => 'info',
                    'proses' => 'warning',
                    'sukses' => 'success',
                    'batal' => 'danger'
                  })
                  ->icon(fn (string $state):string => match($state){
                    'baru' => 'heroicon-m-sparkles',
                    'proses' => 'heroicon-m-arrow-path',
                    'sukses' => 'heroicon-m-check-badge',
                    'batal' => 'heroicon-m-x-circle'
                  })
                  ->sortable(),

                 TextColumn::make('metode_pembayaran')
                 ->sortable()
                 ->searchable(),

                 TextColumn::make('status_pembayaran')
                 ->sortable()
                 ->badge()
                 ->searchable(),

                 TextColumn::make('created_at')
                 ->label('Tanggal Pesan')
                 ->dateTime()
            ])
            ->actions([
                Action::make('Liat Order')
                 ->url(fn (Individu $record):string => IndividuResource::getUrl('view', ['record' => $record]))
                 ->icon('heroicon-o-eye'),
            ]);
    }
}
