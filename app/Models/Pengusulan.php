<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengusulan extends Model
{
    use HasFactory;
    protected $table = "pengusulan";

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
