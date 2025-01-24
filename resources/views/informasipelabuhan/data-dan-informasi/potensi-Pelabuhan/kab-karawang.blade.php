@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Potensi dan Pemanfaatan Pelabuhan</h1>
            <h5 class="display-5 text-white mb-3 animated slideInDown">KABUPATEN KARAWANG</h5>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid" style="font-size:16px;font-family:Montserrat, sans-serif;">
        <div class="container">
            <div class="row">
                <center>
                    {{-- <p style="font-size: 11px;">src: https://www.pngtree.com/</p> --}}
                </center>
                <div style="color: black; margin-top: 2%; text-align:justify;">
                    <p>ANALISA DATA DI KABUPATEN KARAWANG</p>
                    <p></p>
                </div>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#potensikelautan" type="button" role="tab" aria-controls="home"
                            aria-selected="true">POTENSI KELAUTAN DAN PERIKANAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#potensiperindustrian" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">POTENSI
                            PERINDUSTRIAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#potensipeternakan"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">POTENSI
                            PETERNAKAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#potensipariwisata"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">POTENSI
                            PARIWISATA</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent" style="text-align: justify; color:black">
                    <div class="tab-pane fade show active" id="potensikelautan" role="tabpanel" aria-labelledby="home-tab"
                        style="color:black;">
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <h3
                                style='margin-top:8.0pt;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;font-size:19px;font-family:"Aptos",sans-serif;color:#0F4761;font-weight:normal;'>
                                <strong><span style='line-height:107%;font-size:16px;color:windowtext;'>&nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp;DATA POTENSI KELAUTAN DAN PERIKANAN</span></strong>
                            </h3>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Komoditas utama dari sektor kelautan dan perikanan di Kabupaten
                                Karawang meliputi berbagai jenis hasil tangkap laut, budidaya, serta produk olahan. Berikut
                                adalah rincian berdasarkan sektor:</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style='line-height:107%;font-size:16px;'>Komoditas Perikanan
                                            Tangkap</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Ikan Laut</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Kakap, tongkol, kembung, dan
                                            teri merupakan hasil tangkap dominan dari perairan pesisir Karawang</span><span
                                            style='font-size:16px;'>.</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Udang Laut</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Udang yang dihasilkan dari
                                            perikanan tangkap di wilayah pesisir, terutama di Kecamatan Cilamaya dan Pedes,
                                            memiliki potensi ekonomi tinggi.</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Kepiting dan Rajungan</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Hasil tangkap seperti kepiting
                                            juga ditemukan dalam jumlah yang cukup besar di kawasan pesisir Karawang.</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="2" style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style='line-height:107%;font-size:16px;'>Komoditas Perikanan
                                            Budidaya</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Udang Vaname</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Tambak udang di Karawang,
                                            terutama di BLUPPB (Balai Layanan Usaha Produksi Perikanan Budidaya) Karawang,
                                            menghasilkan udang vaname sebagai komoditas utama. Produksi mencapai 2.000 ton
                                            per tahun dengan teknologi inovatif.</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Ikan Lele</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Budidaya lele bioflok sangat
                                            populer dan efisien, menghasilkan panen berkualitas tinggi untuk kebutuhan pasar
                                            lokal dan nasional.</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Bandeng dan Nila</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Bandeng dan nila juga
                                            dibudidayakan di beberapa tambak tradisional dan modern di Kabupaten
                                            Karawang.</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style='font-size:16px;'>3. Komoditas Olahan dan Pendukung</span></strong>
                        </p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Garam Rakyat</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Sebagai pendukung sektor
                                            kelautan, produksi garam rakyat dilakukan di area pesisir dan menjadi salah satu
                                            komoditas unggulan pendukung.</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Olahan Ikan</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Produk olahan seperti ikan
                                            asin, terasi, dan ikan pindang mulai dikembangkan untuk meningkatkan nilai
                                            tambah hasil tangkapan.</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style='font-size:16px;'>4. Komoditas Unggulan Spesifik</span></strong>
                        </p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Lele dan Udang Vaname Bioflok</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>Kolam bioflok menghasilkan
                                            komoditas unggulan dengan efisiensi tinggi. Lele bioflok mendukung sektor pangan
                                            lokal sementara udang vaname bioflok meningkatkan kontribusi terhadap
                                            ekspor.</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p><span style='font-size:16px;'>Pengembangan sektor ini didukung oleh investasi infrastruktur
                                tambak modern, pelatihan nelayan, dan teknologi ramah lingkungan seperti pengaturan
                                <em>elevasi central drain</em>. Peningkatan produktivitas berfokus pada efisiensi energi dan
                                kualitas hasil komoditas yang berkelanjutan</span></p>
                    </div>

                    <div class="tab-pane fade" id="potensiperindustrian" role="tabpanel" aria-labelledby="profile-tab">
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                <span style='font-size:16px;'>Sektor perdagangan didominasi oleh usaha kecil dan menengah
                                    (UKM) serta pasar tradisional. Karawang memiliki beberapa pasar besar, seperti Pasar
                                    Johar, Pasar Rengasdengklok, dan Pasar Baru Karawang, yang menjadi pusat aktivitas
                                    ekonomi masyarakat. Selain itu, perdagangan modern juga berkembang dengan kehadiran
                                    pusat perbelanjaan seperti Mall Karawang Central Plaza (KCP) dan Karawang International
                                    Mall. Volume perdagangan di Karawang meningkat signifikan, terutama pada produk-produk
                                    agrikultur, makanan olahan, dan kebutuhan pokok</span><span
                                    style='font-size:16px;'>.</span>
                            </p>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                <span style='font-size:16px;'>Di sektor industri, Karawang dikenal sebagai kawasan industri
                                    strategis nasional dengan zona industri seperti KIIC (Karawang International Industrial
                                    City), Suryacipta, dan kawasan industri lainnya. Sektor ini didukung oleh berbagai
                                    industri besar, seperti otomotif, elektronik, dan makanan. Beberapa pabrik besar,
                                    termasuk Toyota, Honda, dan Samsung, beroperasi di wilayah ini. Data terbaru menunjukkan
                                    bahwa kontribusi sektor industri terhadap PDRB Kabupaten Karawang mencapai lebih dari
                                    70%, menjadikannya penggerak utama ekonomi daerah</span>
                            </p>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                <span style='font-size:16px;'>Selain industri besar, industri kecil dan menengah (IKM) juga
                                    berkembang, terutama di bidang pengolahan makanan, kerajinan, dan tekstil. Pemerintah
                                    daerah terus mendorong pengembangan sektor ini melalui pelatihan, kemudahan akses
                                    permodalan, dan bantuan pemasaran. Secara keseluruhan, perdagangan dan perindustrian di
                                    Kabupaten Karawang menunjukkan pertumbuhan yang solid, dengan potensi yang besar untuk
                                    terus berkembang sebagai pusat ekonomi regional di masa depan.</span>
                            </p>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                <span style='font-size:16px;'>Perdagangan di Kabupaten Karawang saat ini menunjukkan
                                    dinamika yang kuat di sektor domestik maupun internasional. Karawang dikenal sebagai
                                    salah satu pusat manufaktur di Indonesia dengan kontribusi signifikan terhadap ekspor.
                                    Komoditas unggulan yang diperdagangkan meliputi produk elektronik, otomotif, tekstil,
                                    dan produk pertanian tertentu seperti beras.</span>
                            </p>
                            <table style="width:100.0%;border:solid windowtext 1.0pt;">
                                <thead>
                                    <tr>
                                        <td
                                            style="width:4.98%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                                <strong><span style='font-size:16px;'>No</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:39.26%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                                <strong><span style='font-size:16px;'>Komoditas</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:22.08%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                                <strong><span style='font-size:16px;'>Kategori</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:31.52%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                                <strong><span style='font-size:16px;'>Pasar Utama</span></strong>
                                            </p>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            style="width:4.98%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>1</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:39.26%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Komponen
                                                    Otomotif</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:22.08%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span
                                                    style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Manufaktur</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:31.52%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Asia,
                                                    Eropa, Amerika</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:4.98%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>2</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:39.26%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span
                                                    style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Elektronik
                                                    Konsumen</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:22.08%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span
                                                    style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Manufaktur</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:31.52%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Asia
                                                    Tenggara, Eropa</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:4.98%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>3</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:39.26%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Tekstil
                                                    dan Produk Garmen</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:22.08%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Industri
                                                    Tekstil</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:31.52%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Eropa,
                                                    Amerika Utara</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:4.98%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>4</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:39.26%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span
                                                    style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Beras</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:22.08%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span
                                                    style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Pertanian</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:31.52%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Pasar
                                                    Domestik</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:4.98%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>5</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:39.26%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Plastik
                                                    dan Produk Karet</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:22.08%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Industri
                                                    Kimia</span>
                                            </p>
                                        </td>
                                        <td
                                            style="width:31.52%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style='font-size:16px;font-family:  "Amasis MT Pro",serif;'>Pasar
                                                    Asia dan Eropa</span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                <span style='font-size:16px;'>&nbsp;</span>
                            </p><span style='font-size:16px;'>Kabupaten
                                Karawang juga memainkan peran penting dalam penyediaan kebutuhan pokok nasional, khususnya
                                melalui distribusi beras sebagai salah satu produk unggulannya. Infrastruktur perdagangan
                                domestik yang terintegrasi membantu menjaga kestabilan pasokan dan harga kebutuhan pokok.
                                Data terbaru menunjukkan pertumbuhan positif pada nilai ekspor, terutama dari sektor
                                manufaktur seperti komponen otomotif dan elektronik. Hal ini didukung oleh keberadaan
                                Kawasan Industri di Karawang yang menjadi basis produksi perusahaan multinasional, yang
                                menyumbang ke peningkatan daya saing produk Karawang di pasar global</span><span
                                style='font-size:16px;'>. Komoditas pertanian dan tekstil juga terus mendukung neraca
                                perdagangan dengan peningkatan volume ekspor ke beberapa negara, terutama di kawasan Asia
                                dan Eropa. Pemerintah daerah terus berupaya meningkatkan efisiensi dan akses pasar melalui
                                kerja sama perdagangan dan peningkatan infrastruktur.</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="potensipeternakan" role="tabpanel" aria-labelledby="contact-tab">
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Kabupaten Karawang memiliki potensi sektor peternakan yang
                                    cukup besar dengan populasi ternak yang terus berkembang. Jenis ternak utama yang
                                    dikelola meliputi sapi potong, sapi perah, kambing, domba, dan unggas seperti ayam
                                    pedaging dan petelur. Berdasarkan data terbaru, populasi ayam ras pedaging dan ayam ras
                                    petelur mendominasi angka produksi, mengingat tingginya permintaan lokal dan regional
                                    untuk produk unggas. Ayam buras juga menjadi pilihan utama dalam peternakan skala kecil
                                    dan tradisional, berkontribusi pada ekonomi pedesaan</span><span
                                    style='font-size:16px;'>.</span>
                            </p>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Di sektor ternak besar, sapi potong dan sapi perah
                                    menunjukkan tren yang stabil, dengan sapi perah menghasilkan susu segar untuk memenuhi
                                    kebutuhan lokal dan pasar sekitar. Domba dan kambing, selain sebagai sumber daging, juga
                                    memiliki nilai budaya, terutama dalam acara keagamaan atau tradisional. Karawang telah
                                    mengadopsi pendekatan modern dalam pengelolaan peternakan, termasuk integrasi teknologi
                                    untuk meningkatkan efisiensi produksi dan pengelolaan limbah peternakan</span>
                            </p>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Selain itu, pemerintah daerah terus mendorong pelaku usaha
                                    kecil menengah (UKM) di sektor peternakan untuk memperluas pasar dengan meningkatkan
                                    kualitas produk melalui pelatihan, bantuan teknologi, dan akses ke permodalan. Usaha ini
                                    juga diharapkan dapat mendorong swasembada pangan dan peningkatan kesejahteraan peternak
                                    di Karawang.</span>
                            </p>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Berikut data kuantitatif terkait populasi ternak utama di
                                    Kabupaten Karawang dari tahun 2020 hingga 2023:</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                        <strong><span style='line-height:107%;font-size:16px;'>Ayam Ras Pedaging dan
                                                Petelur</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Populasi ayam ras, termasuk pedaging (broiler) dan petelur
                                    (layer), menjadi salah satu komoditas unggulan. Pada tahun 2023, jumlah ayam ras
                                    pedaging mencapai sekitar 4,7 juta ekor, sementara ayam petelur berkisar di angka 1,2
                                    juta ekor. Angka ini menunjukkan peningkatan dibandingkan tahun 2020, di mana populasi
                                    masing-masing adalah 4,2 juta dan 1 juta ekor. Populasi ayam broiler menjadi yang
                                    terbesar di Kabupaten Karawang, mencerminkan tingginya permintaan pasar lokal dan
                                    regional. Tren produksi mengalami peningkatan konsisten dari 2020 hingga 2024 karena
                                    kebutuhan daging ayam terus bertambah, terutama di wilayah urban Jawa Barat. Peningkatan
                                    ini didukung oleh sistem peternakan intensif yang mengadopsi teknologi modern dan
                                    pengelolaan pakan yang efisien.</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                        <strong><span style='line-height:107%;font-size:16px;'>Sapi Potong</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Populasi sapi potong stabil di angka 23.000&ndash;25.000 ekor
                                    sejak tahun 2020. Produksi daging sapi dari peternakan lokal terus menyumbang kebutuhan
                                    daerah, dengan mayoritas sapi berasal dari peternakan skala kecil. Sapi potong
                                    menunjukkan populasi yang stabil dari tahun 2020 hingga saat ini. Daging sapi tetap
                                    menjadi komoditas penting, meskipun beberapa tantangan seperti biaya pakan dan
                                    pengelolaan limbah masih menjadi perhatian. Program pemerintah untuk meningkatkan
                                    kualitas sapi lokal melalui inseminasi buatan turut mendukung sektor ini.</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                <ol start="3" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                        <strong><span style='line-height:107%;font-size:16px;'>Kambing dan
                                                Domba</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Pada tahun 2023, populasi kambing mencapai 37.000 ekor,
                                    sementara domba sekitar 40.000 ekor. Angka ini relatif stabil dari tahun 2020 hingga
                                    2023. Komoditas ini lebih dominan di wilayah perdesaan dengan pengelolaan
                                    tradisional</span><span style='font-size:16px;'>. Komoditas kambing dan domba mencatat
                                    angka populasi yang konsisten, terutama untuk kebutuhan konsumsi domestik dan acara
                                    keagamaan seperti Idul Adha. Selain itu, beberapa daerah di Karawang menjadi pusat
                                    pengembangbiakan kambing peranakan etawa (PE), yang memiliki nilai ekonomi tinggi</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                <ol start="4" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                        <strong><span style='line-height:107%;font-size:16px;'>Sapi Perah</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <p
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;'>Populasi sapi perah meningkat moderat dari 7.500 ekor pada
                                    2020 menjadi 8.000 ekor pada 2023. Produksi susu segar berkontribusi pada kebutuhan
                                    industri susu lokal di Jawa Barat</span><span style='font-size:16px;'>. Produksi susu
                                    segar di Kabupaten Karawang juga stabil, didorong oleh keberadaan peternakan skala kecil
                                    dan menengah. Susu ini dipasarkan di daerah sekitar atau diolah lebih lanjut menjadi
                                    produk seperti keju dan yoghurt</span>
                            </p><span style='font-size:16px;'>Pemerintah
                                Kabupaten Karawang telah meluncurkan program bantuan bagi peternak, seperti pelatihan
                                teknis, penyediaan bibit unggul, dan subsidi pakan. Program ini bertujuan untuk meningkatkan
                                efisiensi produksi dan kualitas komoditas ternak. Secara keseluruhan, sektor peternakan di
                                Karawang terus mengalami pertumbuhan seiring dengan peningkatan permintaan pasar dan
                                dukungan teknologi. Tantangan seperti fluktuasi harga pakan dan penyakit hewan tetap menjadi
                                isu yang dikelola melalui kebijakan pemerintah dan inovasi oleh peternak</span><span
                                style="font-size:16px;font-family:&quot;Times New Roman&quot;,serif;"></span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="potensipariwisata" role="tabpanel" aria-labelledby="contact-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Kabupaten Karawang saat ini memiliki beragam destinasi wisata,
                                yang mencakup wisata alam, budaya, edukasi, dan modern. Beberapa destinasi wisata yang
                                populer meliputi Pantai Tanjung Baru, Kampung Turis, Danau Cipule, New Marigold Garden, dan
                                Curug Bandung Loji. Masing-masing menawarkan keunikan tersendiri seperti suasana pantai yang
                                tenang, area outbound, hingga taman dengan ribuan kincir angin mini yang
                                instagramable.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Secara keseluruhan, sektor pariwisata di Karawang terus
                                berkembang dengan adanya fasilitas lengkap di setiap destinasi, seperti mushola, restoran,
                                hingga area untuk keluarga seperti mini zoo dan taman bermain. Wisata alam seperti Curug
                                Bandung Loji dan Danau Cipule memberikan pengalaman relaksasi dengan pemandangan indah,
                                sementara tempat-tempat seperti Taruma Leisure Waterpark lebih cocok untuk wisata keluarga
                                dengan berbagai wahana airnya.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Untuk jumlah kunjungan wisatawan, meskipun data terbaru tahun
                                2024 belum sepenuhnya dipublikasikan, Karawang mencatat peningkatan dalam kunjungan domestik
                                karena faktor aksesibilitas yang baik dari Jakarta dan kota sekitarnya, serta promosi yang
                                masif di platform digital dan media sosial. Lokasi-lokasi ini menjadi daya tarik utama bagi
                                wisatawan lokal yang mencari pengalaman liburan yang variatif dan terjangkau</span><span
                                style='font-size:16px;line-height:107%;font-family:"Times New Roman",serif;'>.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Data kunjungan wisatawan di Kabupaten Karawang selama lima tahun
                                terakhir menunjukkan variasi signifikan di berbagai tempat wisata, dipengaruhi oleh pandemi
                                COVID-19 dan tren pariwisata lokal. Berikut adalah ringkasan data berdasarkan berbagai
                                sumber:</span></p>
                        <ol class="decimal_type" style="list-style-type: decimal;margin-left: 8px;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Kunjungan Umum</span></strong><span
                                    style='line-height:107%;font-size:16px;'>:</span>
                                <ol style="list-style-type: circle;">
                                    <li><span style='line-height:107%;font-size:16px;'>Pada 2020, total kunjungan wisatawan
                                            di Karawang mencakup 32.168 wisatawan domestik dan 728 wisatawan mancanegara.
                                            Angka ini menurun drastis dibandingkan tahun-tahun sebelumnya karena pembatasan
                                            perjalanan selama pandemi</span></li>
                                    <li><span style='line-height:107%;font-size:16px;'>Sebelum pandemi, tempat wisata
                                            seperti Pantai Tanjung Pakis, Green Canyon Karawang, dan Curug Cigentis mencatat
                                            peningkatan pengunjung setiap tahunnya, dengan puncak kunjungan pada 2019</span>
                                    </li>
                                </ol>
                            </li>
                            <li><strong><span style='line-height:107%;font-size:16px;'>Tren di Masing-masing tempat
                                        wisata</span></strong><span style='line-height:107%;font-size:16px;'>:</span></li>
                        </ol>
                        <ol style="list-style-type: upper-alpha;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Pantai Tanjung Pakis</span></strong>
                            </li>
                        </ol>
                        <ul style="list-style-type: disc;margin-left: 44px;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Karakteristik</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Destinasi wisata pantai yang menjadi salah
                                    satu andalan Kabupaten Karawang. Pantai ini menarik banyak wisatawan dari Jabodetabek
                                    karena jarak yang relatif dekat dan suasana pantai yang nyaman.</span></li>
                            <li><strong><span style='line-height:107%;font-size:16px;'>Kunjungan
                                        Wisatawan</span></strong><span style='line-height:107%;font-size:16px;'>: Sebelum
                                    pandemi, rata-rata kunjungan tahunan mencapai puluhan ribu, dengan lonjakan kunjungan
                                    pada musim liburan dan akhir pekan</span></li>
                            <li><strong><span style='line-height:107%;font-size:16px;'>Pasca-Pandemi</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Kunjungan mulai pulih pada 2022, didukung
                                    oleh promosi digital dan peningkatan fasilitas seperti area bermain dan warung makanan
                                    laut.</span></li>
                        </ul>
                        <ol start="2" style="list-style-type: upper-alpha;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Curug Cigentis</span></strong></li>
                        </ol>
                        <ul style="list-style-type: disc;margin-left: 44px;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Karakteristik</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Air terjun alami yang berada di kawasan
                                    konservasi pegunungan. Populer sebagai destinasi relaksasi dan petualangan
                                    ringan.</span></li>
                            <li><strong><span style='line-height:107%;font-size:16px;'>Tren Pengunjung</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Sebelum 2020, kunjungan terus meningkat
                                    setiap tahun karena aksesibilitas yang diperbaiki dan promosi lokal. Selama pandemi,
                                    terjadi penurunan tajam, tetapi mulai membaik pada 2022</span><span
                                    style='line-height:107%;font-size:16px;'>.&nbsp;</span></li>
                        </ul>
                        <ol start="100" style="list-style-type: upper-roman;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Green Canyon
                                        Karawang</span></strong></li>
                        </ol>
                        <ul style="list-style-type: disc;margin-left: 44px;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Karakteristik</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Destinasi wisata baru yang dikenal melalui
                                    media sosial, menawarkan pemandangan sungai dengan tebing alami dan air terjun
                                    mini.</span></li>
                            <li><strong><span style='line-height:107%;font-size:16px;'>Tren Pengunjung</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Dimulai dengan kunjungan lokal pada 2020,
                                    jumlah wisatawan terus meningkat setiap tahun, terutama dari kalangan anak muda yang
                                    mencari lokasi fotografi dan eksplorasi alam</span><span
                                    style='line-height:107%;font-size:16px;'>.</span></li>
                        </ul>
                        <ol start="500" style="list-style-type: upper-roman;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Taman Kincir
                                        Tamelang</span></strong></li>
                        </ol>
                        <ul style="list-style-type: disc;margin-left: 44px;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Karakteristik</span></strong><span
                                    style='line-height:107%;font-size:16px;'>: Destinasi modern dengan ribuan kincir angin
                                    berwarna-warni sebagai daya tarik utama. Menjadi destinasi favorit untuk keluarga dan
                                    wisatawan muda.</span></li>
                        </ul>
                        <p><strong><span style='font-size:16px;'>Tren Pengunjung</span></strong><span
                                style='font-size:16px;'>: Dibuka pada 2020, taman ini mencatat pertumbuhan kunjungan yang
                                konsisten hingga sekarang. Fasilitas seperti area bermain dan spot foto menjadi magnet
                                utama</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
