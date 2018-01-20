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

    public function received_voucher()
    {
        return view('finance.received_voucher');
    }

    public function paid_voucher()
    {
        return view('finance.paid_voucher');
    }

    public function unpaid_voucher()
    {
        return view('finance.unpaid_voucher');
    }

    public function dropped_voucher()
    {
        return view('finance.dropped_voucher');
    }

    //-------------------------------

}
