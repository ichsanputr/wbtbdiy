<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WarisanBudaya;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        return view("index", [
            'warisan_budaya' => WarisanBudaya::whereIsApproved(1)->limit(3)->orderByDesc("id")->get(),
            'jumlah_warisan_budaya' => WarisanBudaya::whereIsApproved(1)->count(),
            'jumlah_pengusulan' => WarisanBudaya::whereIsApproved(0)->count(),
            'jumlah_user' => User::count()
        ]);
    }

    public function pencatatan()
    {
        return view("pencatatan", ['pencatatan' => WarisanBudaya::all()]);
    }

    public function wbtb()
    {
        return view("wbtb", ['warisan_budaya' => WarisanBudaya::whereIsApproved(1)->get()]);
    }

    public function detail(WarisanBudaya $wbtb)
    {
        // dd($warisan_budaya->judul);
        return view("detail", ["warisan_budaya" => $wbtb]);
    }

}
