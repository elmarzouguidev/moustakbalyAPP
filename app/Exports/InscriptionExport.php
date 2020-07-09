<?php

namespace App\Exports;

use App\Inscription;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class InscriptionExport implements FromCollection, WithHeadings,ShouldAutoSize
{

   /* private $year;


    public function __construct(int $year)
    {
        $this->year = $year;
    }*/

    public function headings(): array
    {
        return [
            '#',
            'Nom Complet',
            'Date de Nissance',
            'Sexe',
            'Telephone',
            'E-mail',
            'Adresse',
            'Ville',
            'Diplomé',
            'Inscrit a la cnss',
            'Dernirere inscription a la CNSS',
            'Cart National',
            'Date d\'enregistrement',
            'Date de modification',
            'MOUS-CODE'
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Inscription::all();
    }

    /* public function collection()
    {
        return Inscription::whereYear('created_at', $this->year)->get();
    }*/
}
