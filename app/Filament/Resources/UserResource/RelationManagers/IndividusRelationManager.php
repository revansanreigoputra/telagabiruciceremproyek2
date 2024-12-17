<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\IndividuResource;
use App\Models\Individu;
use Doctrine\DBAL\Schema\Index;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndividusRelationManager extends RelationManager
{
    protected static string $relationship = 'individus';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // 
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id')
                 ->label('Order ID')
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
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Action::make('Liat Order')
                 ->url(fn (Individu $record):string => IndividuResource::getUrl('view', ['record' => $record]))
                 ->color('info')
                 ->icon('heroicon-o-eye'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
