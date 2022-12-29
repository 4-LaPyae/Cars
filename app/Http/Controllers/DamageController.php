<?php

namespace App\Http\Controllers;

use App\Models\Damage;
use Illuminate\Http\Request;

class DamageController extends Controller
{
    public function index(){
        return Damage::with(['cars'])->get();
    }
}
