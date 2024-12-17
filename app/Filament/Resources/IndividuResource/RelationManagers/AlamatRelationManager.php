<?php

namespace App\Filament\Resources\IndividuResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlamatRelationManager extends RelationManager
{
    protected static string $relationship = 'alamat';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('nama_awal')
                 ->required()
                 ->maxLength(255),

                TextInput::make('nama_terakhir')
                 ->required()
                 ->maxLength(255),

                TextInput::make('no_telepon')
                 ->required()
                 ->tel()
                 ->maxLength(20),

                Textarea::make('jalan')
                 ->required()
                 ->columnSpanFull(),
                 
                TextInput::make('desa')
                 ->required()
                 ->maxLength(255),
                 
                 TextInput::make('kecamatan')
                 ->required()
                 ->maxLength(255),

                TextInput::make('kabupaten')
                 ->required()
                 ->maxLength(255),

                TextInput::make('kode_pos')
                 ->required()
                 ->numeric()
                 ->maxLength(5),

                TextInput::make('provinsi')
                 ->required()
                 ->maxLength(255),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('desa')
            ->columns([
                TextColumn::make('fullname')
                ->label('Nama Lengkap'),

                TextColumn::make('no_telepon'),

                TextColumn::make('jalan'),
                
                TextColumn::make('desa'),

                TextColumn::make('kabupaten'),
                
                TextColumn::make('kode_pos'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
