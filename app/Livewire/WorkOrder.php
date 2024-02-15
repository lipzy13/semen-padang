<?php

namespace App\Livewire;

use App\Models\AksiList;
use App\Models\Pic;
use App\Models\pic_workorder;
use App\Models\User;
use App\Notifications\workOrderNotification;
use Livewire\Component;

class WorkOrder extends Component
{
    public $tanggal_mulai = '';
    public $tanggal_selesai = '';
    public $pic = [''];
    public $alat = '';
    public $abnormalitas= '';
    public $action = '';
    public $kondisi = '';
    public function addPic()
    {
        $this->pic[] = '';
    }

    public function removePic()
    {
        array_pop($this->pic);
    }

    public function save(){
            $data = \App\Models\workOrder::create([
                'tanggal_mulai' => $this->tanggal_mulai,
                'tanggal_selesai' => $this->tanggal_selesai,
                'alat_id' => $this->alat,
                'kondisi' => $this->kondisi,
                'abnormalitas' => $this->abnormalitas,
                'action' => $this->action,
            ]);
            foreach ($this->pic as $pic){
                pic_workorder::create(['work_order_id'=> $data->id, 'nama' => $pic]);
            }


        $users = User::find(auth()->user()->id);
        $users->notify(new workOrderNotification());
        return redirect('/work-order');
    }
    public function render()
    {
        return view('livewire.work-order');
    }
}
