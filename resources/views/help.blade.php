@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pusat Bantuan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Pusat Bantuan</li>
            </ol>

            <!-- Content for Help Center -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- FAQ Section -->
                    <h2 class="mb-3">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Items -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    Bagaimana cara mengganti kata sandi akun?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Anda dapat mengganti kata sandi akun dengan masuk ke pengaturan akun dan mengikuti langkah-langkah yang tercantum di sana.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 2, 3, ... -->

                    </div>

                    <!-- User Guides Section -->
                    <h2 class="mt-5 mb-3">Panduan Pengguna</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Langkah-langkah Menggunakan Aplikasi</h5>
                                    <p class="card-text">Panduan langkah demi langkah tentang cara menggunakan aplikasi ini.</p>
                                    <a href="#" class="btn btn-primary">Baca Panduan</a>
                                </div>
                            </div>
                        </div>
                        <!-- User Guide 2, 3, ... -->
                    </div>

                    <!-- Contact Form -->
                    <h2 class="mt-5 mb-3">Hubungi Kami</h2>
                    <form>
                        <div class="mb-3">
                            <label for="contactName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="contactName" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">NIP</label>
                            <input type="email" class="form-control" id="contactEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactMessage" class="form-label">Pertanyaan atau Pesan</label>
                            <textarea class="form-control" id="contactMessage" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
