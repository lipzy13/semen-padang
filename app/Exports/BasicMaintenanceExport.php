<?php

namespace App\Exports;

use App\Models\Area;
use App\Models\basicMaintenance;
use App\Models\Pic;
use App\Models\Route;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BasicMaintenanceExport implements WithMapping, WithHeadings, FromQuery
{
    public function query()
    {
        // TODO: Implement query() method.
        return basicMaintenance::query();
    }
    public function map($row): array
   {
       $aksi = $row->aksiList->pluck('aksi_id')->toArray();
       // TODO: Implement map() method.
       return [
         $row->area->nama_area,
         $row->route->nama_route,
         Pic::where('basic_maintenances_id', $row->id)->value('nama'),
         $row->tanggal,
         $row->alat->kode_alat,
         (in_array(1, $aksi)) ? '1' : '0',
         (in_array(2, $aksi)) ? '1' : '0',
         (in_array(3, $aksi)) ? '1' : '0',
         (in_array(4, $aksi)) ? '1' : '0',
         (in_array(5, $aksi)) ? '1' : '0',
         $row->kondisi ? 'ok' : 'not ok'
       ];
   }

    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            'Area',
            'Route',
            'PIC',
            'Tanggal',
            'Kode alat',
            'cleaning',
            'visual',
            'adjusting',
            'repair',
            'indikasi',
            'kondisi'
        ];
    }
}
