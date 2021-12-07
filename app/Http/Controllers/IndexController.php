<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengusulan;
use App\Models\Pencatatan;
use App\Models\User;



class IndexController extends Controller
{
    public function index()
    {
        return view("index", [
            'pengusulan' => Pengusulan::limit(3)->orderByDesc("id")->get(),
            'jumlah_pengusulan' => Pengusulan::count(),
            'jumlah_pencatatan' => Pencatatan::count(),
            'jumlah_user' => User::count()
        ]);
    }

    public function pencatatan()
    {
        return view("pencatatan", ['pencatatan' => Pencatatan::all()]);
    }

    public function pengusulan()
    {
        return view("pengusulan", ['pengusulan' => Pengusulan::all()]);
    }

    public function detailPengusulan(Pengusulan $pengusulan)
    {
        return view("detail-pengusulan", ["pengusulan" => $pengusulan]);
    }

    public function detailPencatatan(Pencatatan $pencatatan)
    {
        return view("detail-pencatatan", ["pencatatan" => $pencatatan]);
    }
}
