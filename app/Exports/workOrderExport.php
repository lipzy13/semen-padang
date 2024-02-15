<?php

namespace App\Exports;

use App\Models\Alat;
use App\Models\Pic;
use App\Models\pic_workorder;
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
        $pic = pic_workorder::where('work_order_id', $row->id)->pluck('nama')->toArray();
        return [
            $row->tanggal_mulai,
            $row->tanggal_selesai,
            implode(",",$pic),
            Alat::where('id', $row->alat_id)->value('kode_alat'),
            $row->abnormalitas,
            $row->action,
            $row->kondisi ? 'ok' : 'not ok'
        ];
    }


    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            'Tanggal Mulai',
            'Tanggal Selesai',
            'PIC',
            'Alat',
            'Abnormalitas',
            'Action',
            'Kondisi'
        ];
    }


}
