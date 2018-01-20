<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    //

    public function insert_voucher(Request $request)
    {
     $data=$request->all();

     dd($data);
    }
    
}
