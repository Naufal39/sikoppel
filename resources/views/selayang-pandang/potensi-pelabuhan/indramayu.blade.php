@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">POTENSI PELABUHAN INDRAMAYU</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="fs-5" style="color: black">

                </div>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tugaspokok"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Tugas Pokok</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#fungsi"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Fungsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#kewenangan"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Kewenangan</button>
                    </li>
                </ul>

                <div class="tab-content fs-5" id="myTabContent" style="text-align: justify; color:black;">
                    <div class="tab-pane fade show active" id="tugaspokok" role="tabpanel" aria-labelledby="home-tab"
                        style="">

                    </div>
                    <div class="tab-pane fade" id="fungsi" role="tabpanel" aria-labelledby="profile-tab">

                    </div>
                    <div class="tab-pane fade" id="kewenangan" role="tabpanel" aria-labelledby="contact-tab">

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
