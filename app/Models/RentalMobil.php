<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalMobil extends Model
{
    use HasFactory;

    protected $guard = [
        'id'
    ];

    protected $fillable = [
        'nama',
        'deskripsi',
        'durasi',
        'image',
        'harga',
        'konten',
    ];
}
