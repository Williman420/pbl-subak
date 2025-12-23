<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;

class Pengelola extends Authenticatable implements FilamentUser, HasName
{
    protected $table = 'pengelola';
    protected $primaryKey = 'id_pengelola';
    public $timestamps = false;
    protected $fillable = [
        'nama_lengkap',
        'username',
        'email',
        'password',
        'no_tlp',
    ];



    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function getFilamentName(): string
    {
        return $this->username;
    }
}
