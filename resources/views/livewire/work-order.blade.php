<div>
    <form class="row g-3" id="workOrderForm" wire:submit="save">
        @csrf
        <div class="form-check">
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
        <div class="col-md-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" wire:model="tanggal_mulai" required>
        </div>
        <div class="form-check col-md-4">
            <label for="validationDefault02" class="form-label">Kode Alat</label>
            <select class="form-select"  name="alat" id="alat" wire:model="alat">
                <option disabled selected value="">Alat</option>
                @foreach(\App\Models\Alat::all() as $al)
                    <option value="{{$al->id}}">{{$al->kode_alat}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="abnormalitas" class="form-label">Abnormalitas</label>
            <textarea class="form-control" id="abnomralitas" name="abnormalitas" id="abnormalitas" required placeholder="Masukkan teks" wire:model="abnormalitas"></textarea>
        </div>
        <div class="mb-3">
            <label for="action" class="form-label">Action</label>
            <textarea class="form-control" id="action" name="action" placeholder="Masukkan teks" required wire:model="action"></textarea>
        </div>
        <div class="form-check form-check-inline">
            <input  type="radio" name="kondisi" id="inlineRadio1" value=1 id="kondisi" wire:model="kondisi">
            <label for="inlineRadio1">ok</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="kondisi" id="inlineRadio2" value=0 id="kondisi" wire:model="kondisi">
            <label for="inlineRadio2">not ok</label>
        </div>
        <div class="col">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" name="tanggal_selesai" id="tanggal_selesai" required wire:model="tanggal_selesai"  required>
        </div>
        <div class="col-12">
            <!-- Tombol untuk menambahkan kotak isian PIC baru -->
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </form>
    <div class="mt-3">
        <a class="btn btn-secondary" href="/">Kembali</a>
    </div>
</div>

