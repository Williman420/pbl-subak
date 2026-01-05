<?php

namespace App\Filament\Resources\Aktivitas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\TextColumn;

class AktivitasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_aktivitas')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('nama_aktivitas')
                    ->sortable()
                    ->searchable()
                    ->Label("Nama Aktivitas"),
                TextColumn::make('deskripsi')
                    ->limit(80)
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('slot')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('harga')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('start_date')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('end_date')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
                TextColumn::make('status_ketersediaan')
                    ->sortable()
                    ->searchable()
                    ->Label("ID Aktivitas"),
            ])
            ->filters([
                
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
