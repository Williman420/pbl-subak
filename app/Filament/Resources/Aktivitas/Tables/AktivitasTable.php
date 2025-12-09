<?php

namespace App\Filament\Resources\Aktivitas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class AktivitasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_aktivitas'),
                TextColumn::make('nama_aktivitas'),
                TextColumn::make('deskripsi')
                ->limit(80),

                TextColumn::make('harga'),
                TextColumn::make('start_date'),
                TextColumn::make('end_date'),
                TextColumn::make('status_ketersediaan'),
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
