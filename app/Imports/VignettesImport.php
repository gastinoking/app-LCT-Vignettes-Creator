<?php

namespace App\Imports;

use App\Models\Vignette;
use Maatwebsite\Excel\Concerns\ToModel;

class VignettesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vignette([
            'entreprise' => $row[0],
            'immatriculation' => $row[1],
            'typeengin' => $row[2],
            'annees' => $row[3],
            'typeimpression' => $row[4],
        ]);
    }
}
