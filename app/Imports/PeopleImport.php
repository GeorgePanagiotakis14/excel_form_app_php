<?php

namespace App\Imports;

use App\Models\Person;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PeopleImport implements ToModel, WithHeadingRow
{
    /**
     * Δημιουργεί ένα νέο Person για κάθε γραμμή του Excel
     *
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Person([
            'ari8mosEisagoghs' => $row['ari8mosEisagoghs'] ?? null,
            'hmeromhnia_eis'   => $row['hmeromhnia_eis'] ?? null,
            'syggrafeas'       => $row['syggrafeas'] ?? null,
            'koha'             => $row['koha'] ?? null,
            'titlos'           => $row['titlos'] ?? null,
            'ekdoths'          => $row['ekdoths'] ?? null,
            'ekdosh'           => $row['ekdosh'] ?? null,
            'etosEkdoshs'      => $row['etosEkdoshs'] ?? null,
            'toposEkdoshs'     => $row['toposEkdoshs'] ?? null,
            'sxhma'            => $row['sxhma'] ?? null,
            'selides'          => $row['selides'] ?? null,
            'tomos'            => $row['tomos'] ?? null,
            'troposPromPar'    => $row['troposPromPar'] ?? null,
            'ISBN'             => $row['ISBN'] ?? null,
            'sthlh1'           => $row['sthlh1'] ?? null,
            'sthlh2'           => $row['sthlh2'] ?? null,
        ]);
    }
}
