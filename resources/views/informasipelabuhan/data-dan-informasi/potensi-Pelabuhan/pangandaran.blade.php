@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Potensi dan Pemanfaatan Pelabuhan</h1>
            <h5 class="display-5 text-white mb-3 animated slideInDown">Kabupaten Pangandaran</h5>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <center>
                    {{-- <p style="font-size: 11px;">src: https://www.pngtree.com/</p> --}}
                </center>
                <div style="color: black; margin-top: 2%;">
                    <p style="font-size:16px;font-family:Bookman Old Style,serif;">ANALISA DATA SURVEI HINTERLAND PELABUHAN PANGANDARAN</p>
                    <p style="font-size:16px;font-family:Bookman Old Style,serif; text-align:justify;">Pelaksanaan Survei data Hinterland Pelabuhan Pangandaran telah dilakukan pada bulan Mei – November
                        2022. Dalam tahapan survei ini dilakukan penghimpunan data kepada Dinas-Dinas yang berada di
                        Hinterland Pelabuhan Pangandaran. Dinas – Dinas yang dimaksud adalah Dinas Ketahanan Pangan, Dinas
                        Pertanian, Dinas Perkebunan & Perikanan, Dinas Pariwisata dan Dinas KUKM serta Dinas Perdagangan &
                        Perindustrian. Berikut adalah rincian informasi hasil data survei yang dipaparkan per masing-masing
                        Kab/Kota.</p>
                </div>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#analisa"
                            type="button" role="tab" aria-controls="home" aria-selected="true">ANALISA DATA</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#datakukm"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">DATA KUKM DAN
                            PERINDUSTRIAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#dataperdagangan"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">DATA
                            PERDAGANGAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#datapariwisata"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">DATA
                            PARIWISATA</button>
                    </li>
                </ul>

                <div class="tab-content fs-5" id="myTabContent" style="text-align: justify; color:black">
                    <div class="tab-pane fade show active" id="analisa" role="tabpanel" aria-labelledby="home-tab"
                        style="color:black">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Pada kegiatan survei yang
                                telah dilakukan oleh pokja penyusun dokumen Hinterland Pelabuhan Pangandaran di Kab.
                                Pangandaran didapatkan beberapa data primer dari Dinas Koperasi dan UMKM Kab. Pangandaran
                                tentang informasi UKM baik nilai investasi, kontak person dan produksi per minggu. Berikut
                                adalah data jumlah industri kecil dan menengah per masing-masing kecamatan di Kab.
                                Pangandaran.</span>
                        </p>
                    </div>

                    <div class="tab-pane fade" id="datakukm" role="tabpanel" aria-labelledby="profile-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Dijelaskan
                                pada&nbsp;</span><span style='font-family:"Bookman Old Style",serif;'>Tabel
                                <em>31</em></span><span style='font-size:16px;font-family:"Bookman Old Style",serif;'>,
                                terdapat 50 Industri Kecil Menengah di Kabupaten Pangandaran yang diurutkan berdasarkan
                                besarnya investasi. Dari 50 Industri kecil menengah terbesar didapatkan 27 industri yang
                                bergerak di bidang Penggergajian Kayu, industri yang bergerak di bidang Gula Merah terdapat
                                9 industri, kemudian industri beras dengan jumlah 7 industri. Dalam tabel tersebut juga
                                dapat ditarik kesimpulan bahwa terdapat 3 (tiga) industri Kecil &amp; Menengah yang memiliki
                                nilai Investasi diatas 1 Miliar Rupiah yaitu P.O Abdul Sobur dengan jenis produk Beras
                                (besar produksi 2 Ton / Minggu), P.O Asep Hendra dengan jenis produk pengolahan kayu (besar
                                produksi 102 Kupik / Minggu) dan P.O Solih dengan jenis produk adalah olahan kayu (besar
                                produksi 51 Kubik / Minggu).</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Selanjutnya
                                pada&nbsp;</span><span style='font-family:"Bookman Old Style",serif;'>Tabel
                                <em>32</em></span><span
                                style='font-size:16px;font-family:"Bookman Old Style",serif;'>&nbsp;dapat diambil informasi
                                bahwa Kecamatan Langkaplancar menjadi Kecamatan dengan jumlah terbanyak industri IKM yang
                                memiliki nilai investasi terbesar yaitu 20 IKM dari 50 IKM terbesar (40%), sementara itu
                                pada peringkat kedua terdapat kecamatan Cimerak dengan 17 IKM dari 50 IKM (34%). Hal ini
                                dapat dijadikan dasaran untuk melihat potensi di masing-masing kecamatan.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;font-size:12px;font-family:"Calibri",sans-serif;color:#44546A;font-style:italic;text-align:center;'>
                            <span
                                style='font-family:"Bookman Old Style",serif;color:windowtext;font-style:normal;'>Tabel&nbsp;</span><span
                                style='font-family:"Bookman Old Style",serif;color:windowtext;font-style:normal;'>31</span><span
                                style='font-family:"Bookman Old Style",serif;color:windowtext;font-style:normal;'>&nbsp;Data
                                Produksi IKM di Kabupaten Pangandaran</span>
                        </p>
                        <table style="width: 0.0pt;border: none;border-collapse:collapse;margin-left: 25%">
                            <thead>
                                <tr style="justify-content: center">
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;background:#4F81BD;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:13px;font-family:"Bookman Old Style",serif;color:white;'>No.</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border:solid windowtext 1.0pt;border-left:none;background:   #4F81BD;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:13px;font-family:"Bookman Old Style",serif;color:white;'>Perusahaan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border:solid windowtext 1.0pt;border-left:none;background:   #4F81BD;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:13px;font-family:"Bookman Old Style",serif;color:white;'>Kecamatan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border:solid windowtext 1.0pt;border-left:   none;background:#4F81BD;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:13px;font-family:"Bookman Old Style",serif;color:white;'>Nilai
                                                    Investasi<br>&nbsp;(Ribu - Rupiah)</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border:solid windowtext 1.0pt;border-left:none;background:   #4F81BD;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:13px;font-family:"Bookman Old Style",serif;color:white;'>Jenis
                                                    Produk</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border:solid windowtext 1.0pt;border-left:none;background:   #4F81BD;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:13px;font-family:"Bookman Old Style",serif;color:white;'>Produksi
                                                    / Minggu</span></strong>
                                        </p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                ABDUL SOBUR</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>1.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Beras</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>2
                                                Ton&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                ASEP HENDRA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>1.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Balok/Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>102
                                                Kubik&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SOLIH</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>1.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Balok/Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>51
                                                Kubik&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                AGUS</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>800.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Balok/Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>21
                                                Kubik&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>5</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H.RUSPANDI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>800.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Balok/Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>42
                                                Kubik&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>6</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                NUR</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>550.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>100
                                                M3/Mnggu</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>7</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H Abdul Gani</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>500.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Beras</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>2
                                                Ton</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H.ATENG JAELANI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>500.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Beras</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>1
                                                Ton&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>9</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                HERMAN</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>500.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>10</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. Rahmat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>500.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>14000
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>11</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. Muhaemin</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>470.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>12</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                HAE</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>400.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Beras</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>2
                                                Ton/Bln</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>13</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. EDENG</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>400.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Beras</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>2.5
                                                Ton/Bln</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>14</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                NARLI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>400.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Beras</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>15</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                Agus Kuncoro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>17500
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>16</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. Siswanto</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>14000
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>17</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                Faturohman</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>24000
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>18</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                Epi Sapein</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250
                                                M3</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>19</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                Heni S</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Padaherang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kayu
                                                Olahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>50
                                                M&sup3;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>20</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                KOSIM</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>21</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                YAMAD</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>22</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                MUMU</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>23</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                HADA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>300.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>24</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SUTARMAN</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>275.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>5
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>25</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                KHOTIM GOZALI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>265.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>5
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>26</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                MUNDORI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>145
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>27</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. Ruslan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>17500
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>28</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                TATANG</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>29</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                AYEN</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>30</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                GANDA.W.</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>31</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. USIN</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>32</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                WAGIMAN</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>25
                                                M3/Mnggu</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>33</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                YANTO&nbsp;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>15
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>34</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SUYANTO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>15
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SAHURI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>250.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>5
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>36</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                NANO SUTARNO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>230.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>4
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>37</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                RUSDI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Coco
                                                Mentah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>12
                                                Ton</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>38</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                H. Muhidin</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>20000
                                                Kg</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>39</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                RASMIN ABDUL MUTOLIB</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Padaherang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Padi,Beras,Dedak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>7
                                                Ton</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>40</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>&nbsp;Rohidin</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Gula
                                                Merah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>41</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SUKRI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>42</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                MUSTOPA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>43</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SURYADI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>44</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                UCE</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>45</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                ATANG</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>46</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                SUEGA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>47</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                RASUMBITO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Tidak
                                                Terdata&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>48</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                IRWAN HARYONO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>200.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>3
                                                M3/Hari</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>49</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                ADE JUHAERI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>190.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>28
                                                M3/Mnggu</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:27.8pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>50</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:92.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>P.O
                                                KARYO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:83.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:77.05pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>180.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:85.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian
                                                Kayu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:99.2pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-size:13px;font-family:"Bookman Old Style",serif;color:black;'>22
                                                M3/Mnggu</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;font-size:12px;font-family:"Calibri",sans-serif;color:#44546A;font-style:italic;text-align:center;'>
                            <img src="data:image/png;base64,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G/QSo2q/yJqNzCdWfyyB207A/7HuUu9EgAgQASJABIgAESACRKBmEyABX7Pnj6wnAkSACBABIkAEiAARuMsIkIC/yyac3CUCRIAIEAEiQASIABGo2QRIwNfs+SPriQARIAJEgAgQASJABO4yAiTg77IJJ3eJABEgAkSACBABIkAEajYBEvA1e/7IeiJABIgAESACRIAIEIG7jAAJ+LtswsldIkAEiAARIAJEgAgQgZpNgAR8zZ4/sp4IEAEiQASIABEgAkTgLiNAAv4um3BylwgQASJABIgAESACRKBmEyABX7Pnj6wnAkSACBABIkAEiAARuMsIkIC/yyac3CUCRIAIEAEiQASIABGo2QRIwNfs+SPriQARIAJEgAgQASJABO4yAiTg77IJJ3eJABEgAkSACBABIkAEajYBEvA1e/7IeiJABIgAESACRIAIEIG7jAAJ+LtswsldIkAEiAARIAJEgAgQgZpNgAR8zZ4/sp4IEAEiQASIABEgAkTgLiNAAv4um3BylwgQASJABIgAESACRKBmEyABX7Pnj6wnAkSACBABIkAEiAARuMsIkIC/yyac3CUCRIAIEAEiQASIABGo2QRIwNfs+SPriQARIAJEgAgQASJABO4yAiTg77IJJ3eJABEgAkSACBABIkAEajYBEvA1e/7IeiJABIgAESACRIAIEIG7jAAJ+LtswsldIkAEiAARIAJEgAgQgZpNgAR8zZ4/sp4IEAEiQASIABEgAkTgLiNAAv4um3BylwgQASJABIgAESACRKBmEyABX7Pnj6wnAkSACBABIkAEiAARuMsIkIC/yyac3CUCRIAIEAEiQASIABGo2QRIwNfs+SPriQARIAJEgAgQASJABO4yAiTg77IJJ3eJABEgAkSACBABIkAEajaB/wfNaD3Rug8KZgAAAABJRU5ErkJggg=="
                                width="752" height="304"><br>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Selain informasi terkait
                                nama-nama pengusaha yang telah dijelaskan sebelumnya, didapatkan juga data informasi secara
                                umum persebaran industri atau UKM di Kab.Pangandaran berdasarkan kecamatan dan jenis
                                industrinya.&nbsp;</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Pada tabel dibawah ini,
                                terdapat 3 (tiga) kelompok industri yang beroperasi di Kab. Pangandaran yaitu Industri Makan
                                dan Minuman olahan, Industri Kayu dan Hasil Hutan serta industri aneka. Pada kelompok
                                industri makanan dan minuman terdapat industri ikan asin, industri kerupuk, industri olahan
                                kedelai, industri gula kelapa, industri gula aren, industri olahan kelapa, industri
                                penggilingan daging, industri air isi ulang, industri garam, industri minuman olahan, dan
                                industri huler gabah. Sementara pada industri kayu dan hasil hutan terdapat industri
                                penggergajian dan industri meubel. Industri terakhir yaitu kelompok industri aneka yang
                                berisikan industri batok, industri bata merah, industri kontruksi, industri konveksi,
                                industri bengkel dan pencucian serta industri pertambangan.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Pada tabel diatas ini,
                                juga
                                dapat ditarik kesimpulan jumlah total usaha kecil dan menengah di Kab. Pangandaran pada
                                tahun 2021 berjumlah sebanyak 3.580 perusahaan. Jumlah perusahaan terbanyak berada di
                                Kecamatan Padaherang dengan jumlah 642 perusahaan, kemudian diikuti oleh Kec. Pangandaran
                                dengan 579 perusahaan dan selanjutnya Kec. Cimerak dengan 477 perusahaan. Sementara apabila
                                ditinjau dari jenis industrinya dilihat pada gambar grafik diatas Industri Gula Kelapa
                                menjadi industri mayoritas di Kab. Pangandaran dengan jumlah 1.623 perusahaan atau 45% dari
                                total 3.580 Perusahaan, kemudian pada posisi kedua industri terbesar di Kab. Pangandaran
                                adalah Industri Kerupuk dan sejenisnya dengan jumlah 482 perusahaan atau 11% dari total
                                jumlah industri, Kemudian pada peringkat ketiga adalah Industri Huler Gabah sebesar 325
                                Perusahaan atau dalam prosentase sebesar 9% dari total jumlah industri.</span>
                        </p>

                        <table style="border: none;width:100.0%;border-collapse:collapse;">
                            <tbody>
                                <tr>
                                    <td rowspan="4"
                                        style="width:4.1%;border:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>No</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="4"
                                        style="width:11.52%;border:solid windowtext 1.0pt;border-left:none;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Kecamatan</span></strong>
                                        </p>
                                    </td>
                                    <td colspan="11" rowspan="2"
                                        style="width:82.0%;border:solid windowtext 1.0pt;border-left:none;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Makanan dan minuman olahan</span></strong>
                                        </p>
                                    </td>
                                    <td style="border:none;padding:0cm 0cm 0cm 0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;'>
                                            &nbsp;</p>
                                    </td>
                                    <td style="height:22.5pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;"><br></td>
                                    <td style="height:15.0pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td rowspan="2"
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Ikan Asin</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Kerupuk dan Sejenisnya</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Olahan Kedelai</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Gula Kelapa</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Gula Aren</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Olahan Kelapa</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Penggilingan Daging</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Air Isi Ulang</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Garam</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Minuman Olahan</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Huler Gabah</span></strong>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;"><br></td>
                                    <td style="height:21.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:29.75pt;"><br></td>
                                    <td style="height:29.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>7</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>9</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>10</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>22</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>12</span></strong>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Parigi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>73</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>16</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>81</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>53</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Cijulang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>28</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>20</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>33</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>267</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>120</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Cigugur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>133</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>115</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>92</span>
                                        </p>
                                    </td>
                                    <td style="width:6.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td
                                        style="width:9.72%;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>64</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>68</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>7</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Sidamulih</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border:solid windowtext 1.0pt;border-left:none;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>31</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Pangandaran</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>420</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>9</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>29</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>181</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>21</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>10</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Padaherang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>90</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>13</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>233</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>14</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:4.1%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.52%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Mangunjaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>116</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>189</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>43</span>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td colspan="2"
                                        style="width:15.64%;border:solid windowtext 1.0pt;border-top:none;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Jumlah
                                                    Klaster IKM</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.0%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>47</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.4%;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>482</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>64</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1623</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>97</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.98%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.96%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>121</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>325</span></strong>
                                        </p>
                                    </td>
                                    <td style="width:2.36%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                            </tbody>
                        </table>

                        {{-- Table 2 --}}
                        <table style="border: none;width:100.0%;border-collapse:collapse;margin-top:20px;">
                            <tbody>
                                <tr>
                                    <td rowspan="4"
                                        style="width:2.56%;border:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>No</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="4"
                                        style="width:9.42%;border:solid windowtext 1.0pt;border-left:none;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Kecamatan</span></strong>
                                        </p>
                                    </td>
                                    <td colspan="2" rowspan="2"
                                        style="width:16.36%;border-top:solid windowtext 1.0pt;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Kayu dan Hasil Hutan</span></strong>
                                        </p>
                                    </td>
                                    <td colspan="8" rowspan="2"
                                        style="width:63.62%;border-top:  solid windowtext 1.0pt;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Aneka</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="4"
                                        style="width:7.04%;border:solid windowtext 1.0pt;border-left:none;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Jumlah
                                                    IKM Per Kecamatan</span></strong>
                                        </p>
                                    </td>
                                    <td style="border:none;padding:0cm 0cm 0cm 0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;'>
                                            &nbsp;</p>
                                    </td>
                                    <td style="height:22.5pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;"><br></td>
                                    <td style="height:15.0pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td rowspan="2"
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Penggergajian</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Mebeul</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Kerajinan</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Logam</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Batok</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Bata Merah</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Kontruksi</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Konveksi</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Bekngkel dan Pencucian</span></strong>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;background:#DDD9C4;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Industri
                                                    Pertambangan</span></strong>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt;"><br></td>
                                    <td style="height:21.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:30.8pt;"><br></td>
                                    <td style="height:30.8pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>13</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>14</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>15</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>16</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>17</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>18</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>19</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>20</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>21</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>24</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>25</span></strong>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Parigi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td style="width:7.82%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td
                                        style="width:7.82%;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td style="width:8.84%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td
                                        style="width:7.04%;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>249</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Cijulang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>15</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border:solid windowtext 1.0pt;border-left:none;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>1</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border:solid windowtext 1.0pt;border-left:none;padding:  0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>85</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Cimerak</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>37</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>17</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>477</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Cigugur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>43</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>229</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Langkaplancar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>47</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>454</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>7</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Sidamulih</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>24</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>116</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Pangandaran</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>101</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>579</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>9</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Kalipucang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>4</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>296</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>10</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Padaherang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>46</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>10</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>121</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>113</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>642</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:2.56%;border:solid windowtext 1.0pt;border-top:none;background:  #C4BD97;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.42%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Mangunjaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>7</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>9</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>11</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span
                                                style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>47</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;font-family:"Bookman Old Style",serif;'>453</span>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td colspan="2"
                                        style="width:11.98%;border:solid windowtext 1.0pt;border-top:none;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Jumlah
                                                    Klaster IKM</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.64%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>173</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.72%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>76</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>197</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>5</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>7</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>138</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>14</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>186</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.82%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>6</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.84%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#C5D9F1;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>8</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <br>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                                <tr>
                                    <td colspan="12"
                                        style="width:91.96%;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;color:black;'>Jumlah
                                                    Total IKM</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.04%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:12px;font-family:"Bookman Old Style",serif;'>3580</span></strong>
                                        </p>
                                    </td>
                                    <td style="width:.98%;padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt;"><br></td>
                                    <td style="height:18.75pt;border:none;"><br></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="dataperdagangan" role="tabpanel" aria-labelledby="contact-tab">
                        <p><span style='font-size:16px;font-family:"Bookman Old Style",serif;'>Hasil survei lainnya yang
                                didapatkan adalah terkait volume perdagangan baik untuk dalam negeri (inbound &amp;
                                outbound) ataupun perdagangan luar negeri (Impor &amp; ekspor). Terkait data perdagangan
                                dalam negeri sementara ini Dinas Koperasi, UKM dan Perdangan Kab. Pangandaran masih dalam
                                proses pendataan, sementara untuk data perdagangan luar negeri (impor dan ekspor) dapat
                                dilihat pada tabel dan gambar grafik dibawah ini</span></p>
                        <table style="border: none;border-collapse:collapse;margin-left:25%">
                            <thead>
                                <tr>
                                    <td
                                        style="width:88.1pt;border:solid windowtext 1.0pt;background:#366092;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:16px;font-family:"Bookman Old Style",serif;color:white;'>Nama
                                                    Perusahaan</span></strong></p>
                                    </td>
                                    <td
                                        style="width:122.85pt;border:solid windowtext 1.0pt;border-left:none;background:   #366092;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:16px;font-family:"Bookman Old Style",serif;color:white;'>Komoditas&nbsp;</span></strong>
                                        </p>
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:16px;font-family:"Bookman Old Style",serif;color:white;'>Ekspor&nbsp;</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:79.7pt;border:solid windowtext 1.0pt;border-left:none;background:   #366092;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:16px;font-family:"Bookman Old Style",serif;color:white;'>Volume
                                                    (Ton)</span></strong></p>
                                    </td>
                                    <td
                                        style="width:90.4pt;border:solid windowtext 1.0pt;border-left:none;background:   #366092;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:16px;font-family:"Bookman Old Style",serif;color:white;'>Nilai
                                                    (Rp)</span></strong></p>
                                    </td>
                                    <td
                                        style="width:70.9pt;border:solid windowtext 1.0pt;border-left:none;background:   #366092;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span
                                                    style='font-size:16px;font-family:"Bookman Old Style",serif;color:white;'>Tujuan
                                                    Negara</span></strong></p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3"
                                        style="width:88.1pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>H.
                                                SAPRUDIN</span></p>
                                    </td>
                                    <td rowspan="3"
                                        style="width:122.85pt;border-top:none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Manggis</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Abu
                                                Dhabi</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Korea</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>China</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2"
                                        style="width:88.1pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>CV.
                                                BUDIDARMA</span></p>
                                    </td>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Ikan
                                                Layur</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>80,0
                                                ton</span></p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:90.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>2.300.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>B.
                                                Putih</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>3,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="6"
                                        style="width:88.1pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Mina
                                                Mandiri</span></p>
                                    </td>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Layur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>14,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width:90.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>300.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Bawal</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>10,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width:90.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>250.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Kerapu</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>0,5
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>25.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Kakap</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>0,6
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>30.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Udang&nbsp;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>11,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>30.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Lobster</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>0,1
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>150.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2"
                                        style="width:88.1pt;border:solid windowtext 1.0pt;border-top:none;padding:  0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>H INAN</span>
                                        </p>
                                    </td>
                                    <td rowspan="2"
                                        style="width:122.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Manggis</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Hongkong</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Korea</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 88.1pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>YOHAN</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Cocofeat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>685.163,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>2.706.393.850</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Cina</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="12"
                                        style="width:88.1pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>PT
                                                PECU</span></p>
                                    </td>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Santan
                                                Tepung</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>50,9
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Australia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Santan
                                                Cair</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>1.495,8
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Canada</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Santan
                                                Tepung, Air Kelapa, Kelapa Parut</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>524,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>China</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Air
                                                Kelapa</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>57,6
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Hongkong</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Santan
                                                Cair</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>107,2
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Selandia
                                                Baru</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Air
                                                Kelapa</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>26,2
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Norwegia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Kelapa
                                                Parut</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>720,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Polandia</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Air Kelapa,
                                                Santan Cair</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>26,2
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Singapore</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Air Kelapa,
                                                Santan Cair</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>3.306,6
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Amerika
                                                Serikat</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Santan
                                                Cair</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>67,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Jepang</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Kelapa
                                                Parut</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>600,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Korea</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 122.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Kelapa
                                                Parut</span></p>
                                    </td>
                                    <td
                                        style="width: 79.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>200,0
                                                ton</span></p>
                                    </td>
                                    <td
                                        style="width: 90.4pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span style='font-family:"Bookman Old Style",serif;color:black;'>Belum
                                                Dilaporkan</span></p>
                                    </td>
                                    <td
                                        style="width: 70.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:  normal;'>
                                            <span
                                                style='font-family:"Bookman Old Style",serif;color:black;'>Vietnam</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="font-size:16px;font-family:Bookman Old Style;margin-top:2%">
                            <p>Pada tabel diatas dapat disimpulkan terdapat 6 perusahaan di Kab. Pangandaran yang terdata
                                telah melakukan kegiatan ekspor ke beberapa negara dengan komoditas yang berbeda-beda.
                                Terdapat perusahaan atas nama Bapak H. Saprudin yang melakukan ekspor dengan komoditas
                                Manggis ke 3 (tiga) negara yaitu Abu Dhabi, Korea dan China. Kemudian perusahaan selanjutnya
                                atas nama CV. Budidarma dengan komoditas Ikan Layur seberat 80 ton dan Bawal Putih seberat 3
                                ton serta tujuan dari kedua komoditas tersebut adalah China. Perusahaan atas nama Mina
                                Mandiri juga melakukan perdagangan luar negeri dengan komoditas yang dikirimkan mayoritas
                                hasil perikanan yaitu Ikan Layur (14 ton), Ikan Bawal (10 ton), Ikan kerapu (0,5 ton), Ikan
                                Kakap (0,6 ton), Udang (11 ton) dan Lobster (0,1 ton) dengan tujuan ekspor adalah China.</p>
                            <p>Perusahaan selanjutnya yang melakukan kegiatan ekspor adalah perusahaan atas nama H. Inan
                                dengan komoditas ekspor adalah manggis yang tujuan ekspornya adalah Negara Hongkong dan
                                Korea. PT. Yohan juga menjadi salah satu perusahaan yang melakukan kegitan ekspor dengan
                                komoditas yang dikirimkan adalah Cocofeat (685.000 Ton) dan tujuan ekspornya adalah China.
                                Terakhir, perusahaan yang melakukan kegiatan ekspor adalah PT. Pecu dengan jenis komoditas
                                mayoritas adalah olahan dari kelapa diantaranya santan tepung, santan cair, air kelapa dan
                                kelapa parut dengan total ekspor sebesar 7.000 ton. Sementara untuk persebaran negara ekspor
                                dari PT. Pecu dapat dilihat pada gambar grafik dibawah ini.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="datapariwisata" role="tabpanel"
                        aria-labelledby="home-tab" style="">
                        <div style="font-size:16px;font-family:Bookman Old Style;">
                            <p>Pelaksanaan kegiatan survei potensi muatan Pelabuhan Bojongsalawe khususnya untuk sektor
                                pariwisata di Kab. Pangandaran dilakukan oleh UPTD PPP Pelabuhan Laut pada tanggal 13
                                &ndash; 14 Maret 2023. Bentuk kegiatan survei adalah melakukan koordinasi langsung dengan
                                Dinas Pariwisata dan Kebudayaan Kab. Pangandaran serta melakukan peninjauan langsung ke
                                beberapa destinasi wisata baik yang dikelola oleh Pemerintah Kabupaten Pangandaran ataupun
                                yang dikelola oleh swasta.</p>
                            <p>Dalam koordinasi ini didapatkan beberapa data yang dapat dijadikan acuan dalam mengukur
                                seberapa besar potensi muatan untuk aktivitas pariwista pada Pelabuhan Bojongsalawe
                                Pangandaran. Beberapa data yang dimaksud adalah historikal data kunjungan wisatawan, potensi
                                pengembangan tempat wisata dan spot-spot lokasi yang dapat dimanfaatkan untuk kegiatan
                                diving ataupun snorkling. Berikut rincian data yang dapat dihimpun oleh UPTD PPP Pelabuhan
                                Laut</p>
                        </div>
                        <div style="margin-left: 5%; margin-bottom:2%;">
                            <img
                                src="data:image/png;base64,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"alt="" />
                        </div>
                        <div style="font-size:16px;font-family:Bookman Old Style;">
                            <p>
                                Dapat disimpulan pada gambar dan tabel di atas bahwa objek wisata Pantai
                                Pangandaran menjadi destinasi wisata utama di Kab. Pangandaran dengan range
                                jumlah wisatawan sebanyak 2 – 3 Juta Pengunjung per tahun. Kemudian
                                selanjutnya adalah objek wisata Batukaras dengan jumlah pengunjung
                                rata-rata adalah 250 ribu pengunjung. Selain itu informasi lain yang dapat
                                disimpulkan dari gambar grafik dan tabel diatas adalah objek wisata pantai
                                pangandaran dan pantai karapyak merupakan objek wisata yang rata-rata
                                mengaami kenaikan pkunjungan wisatawan tiap tahunnya.
                            </p>
                            <p style="margin-left: 5%;">
                                    alt="" />
                            </p>
                            <p align="center">
                                <a name="_Toc139572311">Gambar</a>19 Lokasi Persebaran Pengembangan Tempat
                                Wisata di Kab. Pangandaran
                            </p>
                            <p>
                                Informasi lain yang didapatkan oleh UPTD PPP Pelabuhan Laut adalah lokasi
                                pengembangan wisata yang ada di Kab. Pangandaran. Terdapat kurang lebih 24
                                lokasi yang rencananya akan dilakukan pengembangan. Selain itu juga
                                terdapat 4 (empat) lokasi snorkling dan diving diantaranya Pantai Barat
                                (-7.706929067968172, 108.6452847709645), Pantai Pasir Putih
                                (-7.704887733993337, 108.65210831064819), Pantai Timur (-7.704994053723327,
                                108.66989672081732) dan Pantai Madasari (-7.7763577846548975,
                                108.50410133502552). Hal ini bisa menjadi salah satu destinasi menarik untuk
                                mengundang kapal-kapal yang melayani wisata <em>on board</em>.
                            </p>
                            <p style="margin-left: 5%;">
                                <img src="data:image/png;base64,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"
                                    alt="" />
                                <br />
                            </p>
                            <p align="center">
                                <a name="_Toc139572312">Gambar</a>20 Grafik Proyeksi Total Kunjungan
                                Wisatawan di Kab. Pangandaran
                            </p>
                            <p>
                                Setelah mendapatkan historikal data pada tahun 2018 – 2023, analisa
                                selanjutnya adalah melakukan proyeksi muatan wisatawan di Kab. Pangandarang
                                dengan melakukan proyeksi pergerakan linier dengan pertumbuhan penduduk di
                                Provinsi Jawa Barat. Didapatkan proyeksi wisatawan di Kab. Pangandaran pada
                                tahun 2023 sebanyak 3,46 Juta, pada tahun 2024 sebanyak 3,56 Juta, pada
                                tahun 2025 sebanyak 3,66 Juta dan pada tahun 2026 sebanyak 3,77 Juta. Dari
                                proyeksi tersebut dilakukan proporsi per masing-masing objek wisata sesuai
                                dengan proporsi pada historikal data. Berikut hasil proyeksi per
                                masing-masing objek wisata.
                            </p>
                            <p>Pada objek wisata Pantai Pangandaran hasil proyeksi pada tahun 2023 tercatat hasil sebanyak 3
                                Juta Pengunjung, pada tahun 2024 sebanyak 3,1 Juta Pengunjung, pada tahun 2025 tercatat
                                sebanyak 3,27 Juta dan pada tahun 2026 tercatat sebanyak 3,42 juta. Sementara untuk kondisi
                                proyeksi objek wisata terpopuler kedua yaitu Pantai Batu Karas pada tahun 2023 tercatat
                                hasil sebanyak 411 Ribu Pengunjung, pada tahun 2024 sebanyak 423 Ribu Pengunjung, pada tahun
                                2025 tercatat sebanyak 435 Ribu Pengunjung dan pada tahun 2026 tercatat sebanyak 448 Ribu
                                Pengunjung.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection