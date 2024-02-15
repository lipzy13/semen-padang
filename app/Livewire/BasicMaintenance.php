<?php

namespace App\Livewire;

use App\Models\AksiList;
use App\Models\Pic;
use App\Models\User;
use App\Notifications\basicMaintenanceNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class BasicMaintenance extends Component
{

    public $area = '';
    public $route = '';
    public $tanggal = '';
    public $pic = [''];
    public $alat = [''];
    public $kondisi = [];
    public $abnormalitas= [''];
    public $aksi = [[]];

    public function addAlat()
    {
        $this->alat[] = '';
        $this->kondisi[] = [];
        $this->aksi[] = [];
        $this->abnormalitas[] = [];
    }

    public function removeAlat()
    {
        array_pop($this->alat);
    }

    public function addPic()
    {
        $this->pic[] = '';
    }

    public function removePic()
    {
        array_pop($this->pic);
    }

    public function save(){
        foreach($this->alat as $key => $value){
            $data = \App\Models\basicMaintenance::create([
                'area_id' => $this->area,
                'route_id' => $this->route,
                'alat' => $value,
                'kondisi' => $this->kondisi[$key],
                'abnormalitas' => $this->abnormalitas[$key],
                'tanggal' => $this->tanggal,
            ]);
            foreach ($this->pic as $pic){
                Pic::create(['basic_maintenances_id'=> $data->id, 'nama' => $pic]);
            }
            foreach($this->aksi[$key] as $aksi_sat){
                AksiList::create(['basic_maintenance_id' => $data->id, 'aksi_id' => $aksi_sat, 'alat_id'=>$this->alat[$key]]);
            }
        }
        $user = User::find(auth()->user()->id);
        $user->notify(new basicMaintenanceNotification());
        return redirect('/basic-maintenance');
    }
    public function render()
    {
        return view('livewire.basic-maintenance');
    }
}
