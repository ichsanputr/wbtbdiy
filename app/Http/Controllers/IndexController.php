<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengusulan;

class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function pencatatan()
    {
        return view("pencatatan");
    }

    public function pengusulan()
    {
        return view("pengusulan", ['pengusulan' => Pengusulan::all()]);
    }

    public function detail()
    {
        return view("detail");
    }
}
