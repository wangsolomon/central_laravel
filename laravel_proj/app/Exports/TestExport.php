<?php

namespace App\Exports;

use App\Models\Test;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Schema;

class TestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect([Schema::getColumnListing('Test')]);
    }
}
