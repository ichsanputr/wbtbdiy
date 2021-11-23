<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pengusulan as pengusulan_model;

class Pengusulan extends Component
{
    public $nama_warisan_budaya;
    public $kondisi;
    public $lokasi;
    public $deskripsi;
    public $pelaku;
    public $foto;
    public $video;
    public $domain;
    public $user_id;

    public function render()
    {
        return view('livewire.pengusulan');
    }
}
