<?php

namespace App\Http\Controllers;

use App\Models\PowerKw;
use Illuminate\Http\Request;

class PowerKwController extends Controller
{
    public function index(){
        return PowerKw::with(['cars'])->get();
    }
}
