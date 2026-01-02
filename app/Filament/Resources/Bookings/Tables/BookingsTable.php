<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_booking'),
                TextColumn::make('id_aktivitas'),
                TextColumn::make('id_pengunjung'),
                TextColumn::make('tanggal_booking'),
                TextColumn::make('jumlah_peserta'),
                TextColumn::make('total_harga'),

                TextColumn::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->time('H:i'),

                TextColumn::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->time('H:i'),
                textColumn::make('jumlah_peserta'),
                SelectColumn::make('status_booking')
                    ->options([
                        'pending' => 'pending',
                        'confirmed' => 'confirmed',
                        'cancelled' => 'cancelled',
                    ]),
                textColumn::make('total_harga'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
