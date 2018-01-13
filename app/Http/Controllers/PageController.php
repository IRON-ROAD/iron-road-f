<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function master()
    {
        return view('Layouts.MasterPage');
    }
}
