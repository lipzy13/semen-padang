<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Ka.ur Basic Maintance</h1><br>
    <form class="row g-3" id="workOrderForm">

        <div class="col-md-4" id="picContainer">
            <label for="area" class="form-label"></label>
            <select class="form-select" aria-label="Large select example"  id="area" name="area" >
                <option selected disabled>Area</option>
                @foreach(\App\Models\Area::all() as $area)
                    <option>{{$area->nama_area}}</option>
                @endforeach
            </select>

            <label for="route" class="form-label"></label>
            <select class="form-select" aria-label="Large select example"  id="route" name="route" >
                <option selected disabled>Route</option>
                @foreach(\App\Models\Route::all() as $route)
                    <option>{{$route->nama_route}}</option>
                @endforeach
            </select>
            <br>
            <!-- Kotak isian PIC pertama -->
            <label for="validationDefault01" class="form-label">PIC </label>
            <div class="input-group">
                <input type="text" class="form-control" id="validationDefault01" placeholder="masukkan nama">
            </div>

        </div>
        <p></p>

        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="validationDefault04" required>
        </div>
        <div class="col-12">
            <!-- Tombol untuk menambahkan kotak isian PIC baru -->
            <button class="btn btn-primary" type="button" onclick="submitForm()">Submit</button>
        </div>

        <div class="mt-3">
            <button class="btn btn-secondary" onclick="goToDashboard()">Kembali</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    function addPicInput() {
        // Menentukan kontainer untuk kotak isian PIC
        const picContainer = document.getElementById("picContainer");

        // Membuat elemen input baru
        const newPicInput = document.createElement("div");
        newPicInput.className = "input-group";
        newPicInput.innerHTML = `
          <input type="text" class="form-control" placeholder="masukkan nama">
          <button class="btn btn-outline-secondary" type="button" onclick="removePicInput(this)">-</button>
          <button class="btn btn-outline-secondary" type="button" onclick="addPicInput()">+</button>
        `;

        // Menambahkan elemen input baru ke dalam kontainer
        picContainer.appendChild(newPicInput);
    }

    function removePicInput(button) {
        // Menghapus elemen input PIC saat tombol "-" ditekan
        const picContainer = document.getElementById("picContainer");
        const inputGroup = button.parentNode;
        picContainer.removeChild(inputGroup);
    }

    function submitForm() {
        // Logika atau pemrosesan form dapat ditambahkan di sini
        // Misalnya, validasi form atau pengiriman data ke server

        // Menampilkan alert berhasil
        alert("Form berhasil disubmit!");

        // Mengosongkan form (opsional)
        document.getElementById("workOrderForm").reset();
    }

    function goToDashboard() {
        // Pindah ke halaman home
        window.location.href = "index.html";
    }
</script>
</body>
</html>
