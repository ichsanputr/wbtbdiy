<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\WarisanBudaya;

class Pengusulan extends Component
{
    public function render()
    {
        return view('livewire.admin.pengusulan', ["warisan_budaya" => WarisanBudaya::whereHas("user", function($q){
            $q->where('is_admin', '0');
        })->get()]);
    }
}
