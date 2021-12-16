<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TraitCategory;
use Illuminate\Http\Request;

class TraitsController extends Controller
{
    //
    public function traits(){

        return response(TraitCategory::with('traits')->get(),200);
    }
}
