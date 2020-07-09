<?php

namespace App\Imports;

use App\Inscription;
use Maatwebsite\Excel\Concerns\ToModel;

class InscriptionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Inscription([
            //
        ]);
    }
}
