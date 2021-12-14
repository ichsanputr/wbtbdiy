<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\WarisanBudaya;

class Dashboard extends Component
{
    public function render()
    {

        return view('livewire.user.dashboard', ['warisan_budaya' => WarisanBudaya::whereUserId(auth()->user()->id)->get()]);
    }
}
