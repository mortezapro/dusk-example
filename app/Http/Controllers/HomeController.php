<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("front.home.index");
    }

    public function contactPost() :RedirectResponse
    {
        return redirect()->back()->with("success",true);
    }
}
