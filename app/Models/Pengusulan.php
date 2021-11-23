<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengusulan extends Model
{
    use HasFactory;
    protected $table = "pengusulan";

    protected $fillable = [
        "nama_warisan_budaya",
        "kondisi",
        "lokasi",
        "deskripsi",
        "pelaku",
        "foto",
        "video",
        "domain",
        "user_id"
    ];


    
}
