<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatan extends Model
{
    use HasFactory;
    protected $table = "pencatatan";

    protected $fillable = [
        "judul",
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
