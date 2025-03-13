<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch; // Đảm bảo có import Model Watch

class HomeController extends Controller
{
    public function home()
    {
        $watches = Watch::all(); // Lấy danh sách đồng hồ từ database
        return view('home', compact('watches'));
    }
}
