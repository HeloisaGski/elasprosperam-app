<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // É aqui que liberamos os campos para serem salvos
    protected $fillable = [
        'client_name',
        'content',
        'rating',
        'photo_path',
        'is_active', // <--- O IMPORTANTE ESTÁ AQUI
    ];

    // Garante que o campo is_active seja tratado como booleano (true/false)
    protected $casts = [
        'is_active' => 'boolean',
    ];
}