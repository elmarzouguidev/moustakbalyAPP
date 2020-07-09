<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\Exports\InscriptionExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
class appController extends Controller
{
    //

    public function dataClear()
    {
        Inscription::truncate();

        return redirect()->back()->with('yes','Ok is Done');
    }


    /**
     * Excel data export
     */

    public function export() 
    {
        return Excel::download(new InscriptionExport, 'inscriptions.xlsx');
    }
}
