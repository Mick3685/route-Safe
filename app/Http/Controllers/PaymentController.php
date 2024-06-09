<?php

namespace App\Http\Controllers;

use App\Services\KiakiaPayService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function payement()
   {
    return view('routesafe.payement.index');
   }
}