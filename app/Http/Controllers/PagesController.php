<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }

    public function showBooksDetails()
    {
        return view('details');
    }
}
