<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_booking')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Booking"),
                TextColumn::make('id_aktivitas')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('id_pengunjung')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Pengunjung"),
                TextColumn::make('tanggal_booking')
                    ->sortable()
                    ->searchable()
                    ->Label("Tanggal Booking"),
                TextColumn::make('created_at')
                    ->sortable()
                    ->searchable()
                    ->Label("Created At"),
                TextColumn::make('jumlah_peserta')
                    ->sortable()
                    ->searchable()
                    ->Label("Jumlah Peserta"),
                TextColumn::make('total_harga')
                    ->sortable()
                    ->searchable()
                    ->Label("Total Harga"),
                TextColumn::make('jam_mulai')
                    ->time('H:i')
                    ->sortable()
                    ->searchable()
                    ->Label("Jam Mulai"),

                TextColumn::make('jam_selesai')
                    ->time('H:i')
                    ->sortable()
                    ->searchable()
                    ->Label("Jam Selesai"),
                SelectColumn::make('status_booking')
                    ->options([
                        'pending' => 'pending',
                        'confirmed' => 'confirmed',
                        'cancelled' => 'cancelled',
                    ])
                    ->sortable()
                    ->searchable()
                    ->Label("Status Booking"),
            ])
            ->filters([
                SelectFilter::make('status_booking')
                    ->options([
                        'pending'   => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ]),
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
