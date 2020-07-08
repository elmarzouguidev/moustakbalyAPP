<?php

namespace App\Http\Controllers;

use App\Inscription;
use Illuminate\Http\Request;

class appController extends Controller
{
    //

    public function dataClear()
    {
        Inscription::truncate();

        return redirect()->back()->with('yes','Ok is Done');
    }
}
