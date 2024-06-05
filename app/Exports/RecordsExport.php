<?php

namespace App\Exports;

use App\Models\Doctor;
use App\Models\Record4;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecordsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Record4::select('doctor_id', DB::raw('count(*) as total'))
        //    ->groupBy('doctor_id')
        //    ->get();
        //return Doctor::join('records4', 'doctors.id', '=', 'records4.doctor_id')
        //    ->select('doctors.doctor_surname', DB::raw('count(records4.id) as total'))
        //    ->groupBy('doctors.doctor_surname')
        //    ->get();
        //return Doctor::join('records4', 'doctors.id', '=', 'records4.doctor_id')
        //    ->select(
        //        'doctors.doctor_surname',
        //        DB::raw("CONCAT(LEFT(doctors.doctor_name, 1), '.', LEFT(doctors.doctor_middlename, 1), '.') as initials"),
        //        DB::raw('count(records4.id) as total')
        //    )
        //    ->groupBy('doctors.id')
        //    ->get();
        return Doctor::join('records4', 'doctors.id', '=', 'records4.doctor_id')
            ->select(
                DB::raw("CONCAT(doctors.doctor_surname, ' ', doctors.doctor_name, ' ', doctors.doctor_middlename) as full_name"),
                DB::raw('count(records4.id) as total')
            )
            ->groupBy('doctors.id')
            ->get();
    }
    public function headings(): array
    {
        return [
            'ФИО врача',
            'Количество записей на приём',
        ];
    }
}
