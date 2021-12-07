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

    protected $cast = [
        'foto' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFotoAttribute($value)
    {
        $value = (0 === sizeof(json_decode($value)))? array("default.jpg") :json_decode($value);
        
        return $value[0];
    }
}
