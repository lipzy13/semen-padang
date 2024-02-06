<?php

namespace App\Exports;

use App\Models\workOrder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class workOrderExport implements FromQuery, WithHeadings, WithMapping
{

    public function query()
    {
        // TODO: Implement query() method.
        return workOrder::query();
    }

    public function map($row): array
    {
        // TODO: Implement map() method.
        return [
            $row->tanggal,
            $row->alat->kode_alat,
            $row->abnormalitas,
            $row->action,
            $row->kondisi ? 'ok' : 'not ok'
        ];
    }


    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            'Tanggal',
            'Alat',
            'Abnormalitas',
            'Action',
            'Kondisi'
        ];
    }


}
