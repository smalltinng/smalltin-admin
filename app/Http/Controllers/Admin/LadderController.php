<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LadderController extends Controller
{
    public function ladder_board(){
        return Inertia::render("LadderBoard");
    }
}
