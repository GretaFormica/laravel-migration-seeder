<?php

namespace App\Http\Controllers;
use App\Models\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function train(){
        $trains = Train::where('partenza', '=', '2023-03-30')->get();

        return view('train', compact('trains'));
    }
}
