<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\BukuFactory> */
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        // Menambahkan custom ID dengan prefix "BK-SMK" dan timestamp
        static::creating(function ($buku) {
            if (empty($buku->kode_buku)) {
                $buku->kode_buku = 'BK-SMK-' . now()->format('YmdHis') . '-' . Str::random(5); 
                // Format ID: BK-SMK-YYYYMMDDHHMMSS
            }
        });
    }
}
