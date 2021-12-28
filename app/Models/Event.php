<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'konten', 'start', 'end'];
    protected $table = "event";
    protected $casts = [
        'start' => 'date:Y-m-d',
        'end' => 'date:Y-m-d'
    ];
}
