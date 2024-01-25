<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form workorder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Workorder</h1><br>
    <form method="post" action="/work-order">
        @csrf
        <div class="col-md-4" id="picContainer">
            <label for="area_id" class="form-label"></label>
            <select class="form-select" aria-label="Large select example"  id="area_id" name="area_id" >
                <option selected disabled>Area</option>
                @foreach(\App\Models\Area::all() as $area)
                    <option value="{{$area->id}}">{{$area->nama_area}}</option>
                @endforeach
            </select>

            <label for="route_id" class="form-label"></label>
            <select class="form-select" aria-label="Large select example"  id="route_id" name="route_id" >
                <option selected disabled>Route</option>
                @foreach(\App\Models\Route::all() as $route)
                    <option value="{{$route->id}}">{{$route->nama_route}}</option>
                @endforeach
            </select>
            <br>
            <!-- Kotak isian PIC pertama -->
            <label for="pic" class="form-label">PIC </label>
            <input type="text" class="form-control" id="pic" name="pic" placeholder="masukkan nama">
        </div>
        <p></p>

        <div class="col-md-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="col-md-4">
            <label for="kode_alat" class="form-label"></label>
            <select class="form-select" aria-label="Large select example"  id="kode_alat" name="kode_alat" >
                <option selected disabled>Alat</option>
                @foreach(\App\Models\Alat::all() as $alat)
                    <option value="{{$alat->id}}">{{$alat->kode_alat}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="abnormalitas" class="form-label">Abnormalitas</label>
            <textarea class="form-control"  placeholder="Masukkan teks" id="abnormalitas" name="abnormalitas"></textarea>
        </div>
        <div class="mb-3">
            <label for="action" class="form-label">Action</label>
            <textarea class="form-control" placeholder="Masukkan teks" id="action" name="action"></textarea>
        </div>
        <div class="col-md-4">
            <label for="kondisi" class="form-label"></label>
            <select class="form-select" aria-label="Large select example"  id="kondisi" name="kondisi" >
                <option selected value=1>OK</option>
                <option  value=0>Not OK</option>
            </select>
        </div>
            <!-- Tombol untuk menambahkan kotak isian PIC baru -->
            <button class="btn btn-primary" type="submit" >Submit</button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>
