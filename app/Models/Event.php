<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via formulário
    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'link_sympla'
    ];

    // Garante que a data seja tratada como um objeto de data
    protected $casts = [
        'date' => 'datetime',
    ];
}