<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
class MessagesController extends Controller
{
    public function  message(){
        return Inertia::render("Messages");
    }
}
