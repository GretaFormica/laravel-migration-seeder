<?php

namespace App\Http\Controllers;
use App\Models\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function train(){
        $movies = Train::all();
        return view('train', compact('train'));
    }
}
