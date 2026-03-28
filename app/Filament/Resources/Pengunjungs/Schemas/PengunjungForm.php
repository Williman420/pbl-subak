<?php

namespace App\Filament\Resources\Pengunjungs\Schemas;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Hash;
use Filament\Schemas\Schema;

class PengunjungForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('username')
                    ->required()
                    ->unique(table: 'pengunjung', column: 'username', ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(table: 'pengunjung', column: 'email', ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('no_tlp')
                    ->tel()
                    ->label('Nomor Telepon')
                    ->maxLength(20),

                TextInput::make('password')
                    ->password()
                    // Hash password only when it's filled
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->dehydrated(fn($state) => filled($state))
                    // Only required when creating a new record
                    ->required(fn(string $context): bool => $context === 'create')
                    ->label(fn(string $context): string => $context === 'create' ? 'Password' : 'Ubah Password (kosongkan jika tidak diganti)'),
            ]);
    }
}
    