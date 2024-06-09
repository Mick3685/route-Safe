<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleConformController extends Controller
{
    public function index()
    {
        return view('admin.controle.controleConform');
    }

}
