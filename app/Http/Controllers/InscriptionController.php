<?php

namespace App\Http\Controllers;

use App\Exports\InscriptionExport;
use Illuminate\Http\Request;

use App\Inscription;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class InscriptionController extends Controller
{
    //

    public function index(Request $request)
    {
        $customers = QueryBuilder::for(Inscription::class)
            ->allowedFilters(
                [
                    'dateNissance',
                    'codePer',
                    'ville',
                    'sexe',
                    // AllowedFilter::scope('Aged'),
                    //AllowedFilter::exact('dateNissance')
                ]
            )
           // ->allowedSorts(['dateNissance'])
            //->paginate(5);
            ->get();

        return view('backend.inscription.index', compact('customers'));
    }

    public function export() 
    {
        return Excel::download(new InscriptionExport, 'inscriptions.xlsx');
    }
}
