<?php

namespace App\Exports;

use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;


class RecordsExport3 implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Speciality::join('records4', 'specialities.id', '=', 'records4.speciality_id')
            ->select('specialities.speciality_title', DB::raw('count(records4.id) as total'))
            ->groupBy('specialities.speciality_title')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Название специальности',
            'Количество записей на приём',
        ];
    }
}
