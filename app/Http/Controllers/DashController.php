<?php

namespace App\Http\Controllers;

use App\Inscription;
use Illuminate\Http\Request;

class DashController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $counters = [
            'homme' => Inscription::where('sexe', 'homme')->count(),
            'femme' => Inscription::where('sexe', 'femme')->count(),
            'total' => Inscription::count(),
        ];

        $villes = Inscription::select('ville')->distinct()->get();
        $allCounters = [];
        foreach ($villes as $ville) {
            $perCent = [
                $ville->ville => Inscription::where('ville', $ville->ville)->count(),
            ];
            $allCounters[] = $perCent[$ville->ville];
        }
        return view('backend.dashboard.index', compact('counters', 'villes','allCounters'));
    }
}
