<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class pdfController extends Controller

{
  
    public function index()
    {
        $user = User::all();

        $pdf = PDF::loadView('pdf', $user);
        return $pdf->download('users.pdf');
    }
}
