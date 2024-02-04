<div>
    <form class="row g-3" id="workOrderForm" wire:submit="save">
        <div class="form-check">
            <label for="validationDefault04" class="form-label">Area</label>
            <select class="form-select" aria-label="Large select example" wire:model="area">
                <option disabled selected value="">Area</option>
                @foreach(\App\Models\Area::all() as $are)
                    <option value={{$are->id}}>{{$are->nama_area}}</option>
                @endforeach
            </select>


            <label for="validationDefault04" class="form-label"> Route</label>

            <select class="form-select" aria-label="Large select example" wire:model="route">
                <option disabled selected value="">Route</option>
                @foreach(\App\Models\Route::all() as $rou)
                    <option value={{$rou->id}}>{{$rou->nama_route}}</option>
                @endforeach
            </select>
            <br>
            <!-- Kotak isian PIC pertama -->
            <label for="pic" class="">PIC</label>
            <select id="pic" class="form-select" wire:model="pic.0">
                <option disabled selected value="">PIC</option>
                @foreach(\App\Models\User::all() as $use)
                    <option value="{{$use->username}}" >{{$use->username}}</option>
                @endforeach
            </select>

            @foreach($pic as $key => $tangg)
                @if($key>0)
                    <div>
                        <select id="pic" class="form-select my-2" wire:model="pic.{{$key}}">
                            <option disabled selected value="">PIC</option>
                            @foreach(\App\Models\User::all() as $us)
                                <option value="{{$us->username}}">{{$us->username}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
            @endforeach
            <br>
            <button wire:click.prevent="removePic">
                Hapus </button>
            <button wire:click.prevent="addPic" class="">Tambah PIC</button>
        </div>

        <div class="form-check">
            <label for="validationDefault04" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="validationDefault04" required wire:model="tanggal">
        </div><br>

        <div class="form-check">
            <label for="validationDefault02" class="form-label">Kode Alat</label>
            <select class="form-select" wire:model="alat">
                <option disabled selected value="">Alat</option>
                @foreach(\App\Models\Alat::all() as $al)
                    <option value="{{$al->id}}">{{$al->kode_alat}}</option>
                @endforeach
            </select>
        </div>

        @foreach(\App\Models\Aksi::all() as $aksi)
            <div class="form-check">
                <input  type="checkbox" value="{{$aksi->id}}" id="flexCheckDefault{{$aksi->id}}" wire:model="aksi">
                <label  for="flexCheckDefault{{$aksi->id}}">
                    {{$aksi->nama}}
                </label>
            </div>
        @endforeach


        <div class="form-check form-check-inline">
            <input  type="radio" name="inlineRadioOptions" id="inlineRadio1" value=1 wire:model="kondisi">
            <label for="inlineRadio1">ok</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value=0 wire:model="kondisi">
            <label for="inlineRadio2">not ok</label>
        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Abnormalitas</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Masukan teks" wire:model="abnormalitas" ></textarea>
        </div>
        <div class="form-check">
            <!-- Tombol untuk menambahkan kotak isian PIC baru -->
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

        <div class="form-check">
            <a class="btn btn-secondary" href="/">Kembali</a>
        </div>
    </form>
</div>
