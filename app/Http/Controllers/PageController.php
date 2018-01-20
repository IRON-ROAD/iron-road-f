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

    public function login()
    {
        return view('login');
    }

    //------------Finance------------
    public function voucher_entry()
    {
        return view('finance.voucher_entry');
    }

    //-------------------------------

}
