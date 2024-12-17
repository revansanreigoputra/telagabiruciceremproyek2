<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndividuResource\Pages;
use App\Filament\Resources\IndividuResource\RelationManagers;
use App\Filament\Resources\IndividuResource\RelationManagers\AlamatRelationManager;
use App\Models\Alamat;
use App\Models\Individu;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndividuResource extends Resource
{
    protected static ?string $model = Individu::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        // Bagian User Information
                        Section::make('User Information')->schema([
                                Select::make('user_id')
                                    ->label('Customer')
                                    ->relationship('user', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),
                                
                                ToggleButtons::make('status')
                                    ->inline()
                                    ->default('baru')
                                    ->required()
                                    ->options([
                                        'baru' => 'Baru',
                                        'proses' => 'Proses',
                                        'sukses' => 'Sukses',
                                        'batal' => 'Batal'
                                    ])
                                    ->colors([
                                        'baru' => 'info',
                                        'proses' => 'warning',
                                        'sukses' => 'success',
                                        'batal' => 'danger'
                                    ])
                                    ->icons([
                                        'baru' => 'heroicon-m-sparkles',
                                        'proses' => 'heroicon-m-arrow-path',
                                        'sukses' => 'heroicon-m-check-badge',
                                        'batal' => 'heroicon-m-x-circle'
                                    ]),

                                Select::make('metode_pembayaran')
                                    ->options([
                                        'tf' => 'Transfer',
                                        'cod' => 'Cash on Delivery'
                                    ])
                                    ->required(),

                                Select::make('status_pembayaran')
                                    ->options([
                                        'tertunda' => 'Tertunda',
                                        'dibayar' => 'Dibayar',
                                        'gagal' => 'Gagal'
                                    ])
                                    ->default('tertunda')
                                    ->required(),

                                DatePicker::make('tanggal_kedatangan') // Tambahkan DatePicker
                                    ->label('Tanggal Kedatangan')
                                    ->required()
                                    ->minDate(now())
                                    ->default(now()),
                                    ]),

                        // Bagian Ticket Information
                        Section::make('Ticket Information')->schema([
                                Select::make('kendaraan')  // Tambahkan Select untuk kendaraan
                                    ->label('Kendaraan')
                                    ->options([
                                        'roda_dua' => 'Roda Dua',
                                        'roda_empat' => 'Roda Empat',
                                        'bus' => 'Bus',
                                    ])
                                    ->default('roda_dua') // Default ke roda dua
                                    ->required()
                                    ->reactive() // Untuk perhitungan otomatis
                                    ->afterStateUpdated(fn($state, callable $set, callable $get) => 
                                        $set('total', ($get('jumlah_tiket') * 15000) + match($state) {
                                            'roda_dua' => 2000,
                                            'roda_empat' => 5000,
                                            'bus' => 10000,
                                            default => 2000,
                                        })
                                    ),

                                TextInput::make('jumlah_tiket')
                                    ->label('Jumlah Tiket')
                                    ->numeric()
                                    ->minValue(1)
                                    ->default(1)
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn($state, callable $set, callable $get) => 
                                        $set('total', ($state * 15000) + match($get('kendaraan')) {
                                            'roda_dua' => 2000,
                                            'roda_empat' => 5000,
                                            'bus' => 10000,
                                            default => 2000,
                                        })
                                    ),

                                TextInput::make('total')
                                    ->label('Total Harga')
                                    ->disabled()
                                    ->suffix('IDR')
                            ])
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                 ->label('Customer')
                 ->sortable()
                 ->searchable(),

                 TextColumn::make('tanggal_kedatangan')
                  ->searchable()
                  ->sortable(),

                TextColumn::make('jumlah_tiket')
                  ->searchable()
                  ->sortable(),

                TextColumn::make('total')
                 ->numeric()
                 ->sortable()
                 ->money('INR'),

                TextColumn::make('metode_pembayaran')
                  ->searchable()
                  ->sortable(),

                TextColumn::make('status')
                 ->searchable()
                 ->sortable(),

                TextColumn::make('created_at')
                 ->dateTime()
                 ->sortable()
                 ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                 ->dateTime()
                 ->sortable()
                 ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AlamatRelationManager::class
        ];
    }

    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }

    public static function getnavigationBadgeColor(): string|array|null {
        return static::getModel()::count() > 10 ? 'success' : 'danger';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIndividus::route('/'),
            'create' => Pages\CreateIndividu::route('/create'), 
            'view' => Pages\ViewIndividu::route('/{record}'),
            'edit' => Pages\EditIndividu::route('/{record}/edit'),
        ];
    }
}
