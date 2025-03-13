<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::with('category')->get();
        return view('product', compact('watches'));
    }
}


