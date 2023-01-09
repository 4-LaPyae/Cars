<?php

namespace App\Http\Controllers;

use App\Models\Colour;
use Illuminate\Http\Request;

class ColourController extends Controller
{
    public function index(){
        return Colour::with(['cars'])
                ->when();
    }
}
