<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inscription;
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
                    'nomComplet',
                    'email',
                    'ville',
                    'age',
                    'sexe',
                    // AllowedFilter::scope('Aged'),
                    AllowedFilter::exact('age')
                ]
            )
            ->allowedSorts(['nomComplet'])
            ->get();

        return view('backend.inscription.index', compact('customers'));
    }
}
