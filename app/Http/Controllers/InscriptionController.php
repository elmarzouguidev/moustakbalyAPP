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

    public function appled(Request $request)
    {
        $customer = Inscription::findOrFail($request->cutomer);
        if ($customer) {
            $customer->called = true;
            $customer->update();
            return redirect()->back()->with('good','l\'action a ete fait');
        }
    }
}
