<?php

namespace App\Imports;

use App\Models\Service;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;

class ServiceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Service([
            'title' => $row[0],
            'url' => Str::slug($row[0]),
            'text' => $row[1],
            'price_id' => $row[2]

        ]);
    }
}
