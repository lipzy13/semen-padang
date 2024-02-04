<?php

namespace App\Livewire;

use App\Models\AksiList;
use App\Models\Pic;
use Livewire\Component;

class BasicMaintenance extends Component
{

    public $area = '';
    public $route = '';
    public $tanggal = '';
    public $pic = [''];
    public $alat = '';
    public $kondisi = '';
    public $abnormalitas= '';
    public $aksi = [];


    public function addPic()
    {
        $this->pic[] = '';
    }

    public function removePic()
    {
        array_pop($this->pic);
    }

    public function save(){
        $data = \App\Models\basicMaintenance::create([
            'area_id' => $this->area,
            'route_id' => $this->route,
            'alat_id' => $this->alat,
            'tanggal' => $this->tanggal,
            'kondisi' => $this->kondisi,
            'abnormalitas' => $this->abnormalitas
        ]);
        foreach ($this->pic as $pic){
            Pic::create(['basic_maintenances_id'=> $data->id, 'nama' => $pic]);
        }

        foreach($this->aksi as $aksi){
            AksiList::create(['basic_maintenance_id' => $data->id, 'aksi_id' => $aksi]);
        }
        return redirect('/basic-maintenance');
    }
    public function render()
    {
        return view('livewire.basic-maintenance');
    }
}
