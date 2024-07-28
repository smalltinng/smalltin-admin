<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
class TransactionController extends Controller
{
    public function transaction(){
      return  Inertia::render("Transaction");
    }
}
