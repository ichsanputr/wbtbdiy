<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\WarisanBudaya;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', ['warisan_budaya' => WarisanBudaya::whereIsApproved(0)->get(), "jumlah_warisan_budaya" => WarisanBudaya::whereIsApproved(1)->count()]);
    }

    public function approve($id)
    {
        $warisan_budaya = WarisanBudaya::findOrFail($id);
        $warisan_budaya->is_approved = 1;
        $warisan_budaya->save();
        $url_preview = url("admin/preview/".$id);

        session()->flash('message', "Berhasil menyetujui Pengusulan. <a href='".$url_preview."' target='_blank'>Lihat di Halaman Depan</a>");
        return redirect()->to('/admin');
    }

    public function preview($id)
    {
        # code...
    }
}
