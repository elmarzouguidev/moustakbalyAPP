<?php

namespace App\Exports;

use App\Inscription;
use Maatwebsite\Excel\Concerns\FromCollection;

class InscriptionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inscription::all();
    }
}
