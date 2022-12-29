<?php

namespace App\Http\Controllers;

use App\Models\PowerHp;
use Illuminate\Http\Request;

class PowerHpController extends Controller
{
    public function index(){
        
        return PowerHp::with(['cars'])->get();
    }
}
