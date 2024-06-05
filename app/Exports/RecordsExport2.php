<?php

namespace App\Exports;


use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record4;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecordsExport2 implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Patient::join('records4', 'patients.id', '=', 'records4.patient_id')
            ->select(
                DB::raw("CONCAT(patients.patient_surname, ' ', patients.patient_name, ' ', patients.patient_middlename) as full_name"),
                DB::raw('count(records4.id) as total')
            )
            ->groupBy('patients.id')
            ->get();
    }
    public function headings(): array
    {
        return [
            'ФИО пациента',
            'Количество записей на приём',
        ];
    }
}
