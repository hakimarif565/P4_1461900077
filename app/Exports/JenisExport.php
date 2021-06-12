<?php

namespace App\Exports;

use App\Jenis_Buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class JenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jenis_Buku::all();
    }
}
