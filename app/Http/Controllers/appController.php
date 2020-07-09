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

        return redirect()->back()->with('yes', 'Ok is Done');
    }


    /**
     * Excel data export
     */


    public function export()
    {
        return Excel::download(new InscriptionExport, 'Inscriptions.xlsx');

       /* return Excel::download(new InscriptionExport(), 'inscriptions.csv', \Maatwebsite\Excel\Excel::CSV, [
            'Content-Type' => 'text/csv',
        ]);*/
        //return (new InscriptionExport)->download('inscriptions.csv', \Maatwebsite\Excel\Excel::CSV);

        /*  return (new InscriptionExport)->download('inscriptions.csv', \Maatwebsite\Excel\Excel::CSV, [
            'Content-Type' => 'text/csv',
        ]);*/
    }

    /* public function export(Request $request)
    {
        return Excel::download(new InscriptionExport($request->createdAt), 'inscriptions.xlsx');
    }*/

    public function advanced()
    {
        return view('backend.advanced.index');
    }
}
