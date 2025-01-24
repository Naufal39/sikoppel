@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Potensi dan Pemanfaatan Pelabuhan</h1>
            <h5 class="display-5 text-white mb-3 animated slideInDown">Kabupaten Bekasi</h5>
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
                    <p>ANALISA DATA DI KABUPATEN BEKASI</p>
                    <p></p>
                </div>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#potensikelautan" type="button" role="tab" aria-controls="home"
                            aria-selected="true">POTENSI KELAUTAN DAN PERIKANAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#potensipeternakan"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">POTENSI
                            PETERNAKAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#kaukm"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">KAUKM DAN
                            PERINDUSTRIAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#dataperhubungan"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">DATA
                            PERHUBUNGAN</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent" style="text-align: justify; color:black">
                    <div class="tab-pane fade show active" id="potensikelautan" role="tabpanel" aria-labelledby="home-tab"
                        style="color:black;">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>Dalam data potensi Kelautan dan perikanan
                                didapatkan data beberapa lokasi Pelabuhan Perikanan yang ada di Kabupaten Bekasi. Selain
                                lokasi terdapat juga distribusi operasional, potensi dan tantangan dari Kelautan dan
                                Perikanan di Kabupaten Bekasi.</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Pelabuhan
                                            Perikanan</span></strong>
                                </li>
                            </ol>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>Kabupaten Bekasi memiliki <strong>dua
                                    pelabuhan perikanan utama</strong>, yaitu:</span>
                        </p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Pelabuhan Perikanan
                                        Tarumajaya</span></strong>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style=''>Berfungsi sebagai pusat
                                            kegiatan perikanan pesisir.</span>
                                    </li>
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style=''>Memiliki fasilitas untuk sandar
                                            kapal, penyimpanan hasil tangkapan, serta tempat pelelangan ikan.</span>
                                    </li>
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style=''>Mendukung sektor ekonomi
                                            perikanan lokal melalui interaksi perdagangan langsung</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Pelabuhan Perikanan Tambun
                                        Utara</span></strong>
                            </li>
                        </ul>
                        <ol style="list-style-type: circle;margin-left: 62px;">
                            <li><span style=''>Fokus pada aktivitas bongkar muat hasil
                                    tangkapan dari kapal skala kecil.</span></li>
                            <li><span style=''>Berperan penting dalam mendistribusikan
                                    hasil laut ke wilayah sekitar Bekasi dan Jakarta</span></li>
                        </ol>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Distribusi
                                            Operasional</span></strong><span style=''>:</span>
                                </li>
                            </ol>
                        </div>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style=''>Wilayah operasi utama adalah pesisir
                                    utara Kabupaten Bekasi, meliputi laut di sekitar Kecamatan Tarumajaya, Babelan, dan
                                    Tambun Utara.</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style=''>Terdapat juga kapal yang mendukung
                                    logistik untuk hasil perikanan budidaya</span>
                            </li>
                        </ul>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="3" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Potensi dan
                                            Tantangan</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Potensi</span></strong><span style=''>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style=''>Kabupaten Bekasi memiliki
                                            lokasi strategis di pesisir utara Jawa Barat, dekat dengan pasar besar (Jakarta)
                                            dan pelabuhan lainnya.</span>
                                    </li>
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style=''>Infrastruktur pelabuhan terus
                                            dikembangkan untuk mendukung keberlanjutan kegiatan perikanan</span>
                                    </li>
                                </ul>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Tantangan</span></strong><span style=''>:</span>
                            </li>
                        </ul>
                        <ol style="list-style-type: circle;margin-left: 62px;">
                            <li><span style=''>Kapal berkapasitas kecil menghadapi
                                    tantangan dalam menjangkau area tangkap yang lebih jauh.</span></li>
                            <li><span style=''>Perlunya modernisasi alat tangkap dan
                                    fasilitas pelabuhan agar lebih kompetitif di tingkat nasional</span></li>
                        </ol>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>&nbsp;</span>
                        </p>
                        <div style="margin-left: 20%">
                            <table style="border-collapse: collapse;border: none;width: 601px;">
                                <thead>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                                <strong><span style=''>Aspek</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border:solid windowtext 1.0pt;border-left:   none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                                                <strong><span style=''>Data</span></strong>
                                            </p>
                                        </td>
                                    </tr>
                                </thead>
                                <div>

                                </div>
                                <tbody>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <strong><span style=''>Target
                                                        Produksi</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style=''>150.000 ton per tahun,
                                                    dengan target pertumbuhan 5% setiap tahun.</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <strong><span style=''>Komoditas
                                                        Utama</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style=''>Lele, nila, patin
                                                    (perikanan budidaya).</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <strong><span style=''>Pemanfaatan
                                                        Lahan</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style=''>Optimalisasi lahan
                                                    non-produktif untuk budidaya perikanan berkelanjutan.</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <strong><span style=''>Program
                                                        Pengembangan</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style=''>Pelatihan teknologi modern
                                                    untuk 70 pelaku usaha perikanan dalam kegiatan sarasehan.</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <strong><span style=''>Kontribusi
                                                        Ekonomi</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style=''>Mendukung ketahanan pangan
                                                    dan peningkatan kesejahteraan pembudidaya kecil.</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width:176.95pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <strong><span style=''>Rencana
                                                        Keberlanjutan</span></strong>
                                            </p>
                                        </td>
                                        <td
                                            style="width:273.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                                            <p
                                                style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;line-height:normal;'>
                                                <span style=''>Fokus pada kelestarian
                                                    lingkungan, dengan pemanfaatan sumber daya yang efisien.</span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <br>

                    </div>

                    <div class="tab-pane fade" id="potensipeternakan" role="tabpanel" aria-labelledby="profile-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>Kabupaten Bekasi memiliki karakteristik
                                geografis yang mendukung sektor peternakan, mulai dari ketersediaan lahan hingga akses pasar
                                yang strategis di kawasan Jabodetabek. Berikut adalah rincian potensi sektor
                                peternakan:</span>
                        </p>
                        <ol style="list-style-type: decimal;margin-left: 8px;">
                            <li><span style=''>Peternakan Unggas</span>
                                <ol style="list-style-type: lower-alpha;">
                                    <li><span style=''>Populasi Ayam: Pada 2023,
                                            Kabupaten Bekasi mencatat populasi ayam ras pedaging mencapai 20 juta ekor,
                                            sedangkan ayam petelur mendekati 5 juta ekor. Hal ini menjadikan Bekasi sebagai
                                            salah satu pusat produksi unggas utama di Jawa Barat</span></li>
                                    <li><span style=''>Distribusi Produksi: Sebagian
                                            besar produksi unggas dipasarkan ke kota besar seperti Jakarta dan Bogor, dengan
                                            permintaan yang stabil bahkan saat pandemi. Sistem pemeliharaan intensif
                                            berbasis kandang tertutup mulai diterapkan untuk meningkatkan
                                            produktivitas</span></li>
                                </ol>
                            </li>
                            <li><span style=''>Peternakan Sapi dan Kambing</span>
                                <ol style="list-style-type: lower-alpha;">
                                    <li><span style=''>Populasi Sapi Potong: Populasi
                                            sapi potong meningkat menjadi 50 ribu ekor pada 2023. Banyak peternak fokus pada
                                            pemenuhan kebutuhan daging, terutama saat momen Idul Adha</span></li>
                                    <li><span style=''>Populasi Kambing: Peternakan
                                            kambing, dengan populasi 120 ribu ekor, sebagian besar dilakukan oleh peternak
                                            kecil yang memanfaatkan lahan pekarangan dan limbah pertanian sebagai
                                            pakan</span></li>
                                </ol>
                            </li>
                            <li><span style=''>Dukungan Pemerintah</span></li>
                        </ol>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>Pemerintah Kabupaten Bekasi terus
                                meluncurkan program pemberdayaan peternak, termasuk bantuan pakan ternak, vaksinasi gratis,
                                serta pelatihan manajemen usaha. Selain itu, pemerintah mendorong peternak untuk beralih ke
                                sistem modern berbasis teknologi, seperti inseminasi buatan</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>Sektor perikanan di Kabupaten Bekasi,
                                terutama budidaya ikan air tawar, menunjukkan pertumbuhan yang stabil. Berikut adalah data
                                produksi perikanan yang dirinci berdasarkan jenis dan tahun:</span>
                        </p>
                        <table style="border: 1pt solid windowtext; width: 100%; margin-left: calc(0%);">
                            <thead>
                                <tr>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style=''>Tahun</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style=''>Produksi Total
                                                    (Ton)</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style=''>Jenis
                                                    Perikanan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style=''>Catatan
                                                    Utama</span></strong>
                                        </p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2021</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>65,000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Budidaya dan
                                                tangkap</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Implementasi awal
                                                bioflok dan polikultur</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>68,250</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Budidaya (lele, patin,
                                                udang)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Fokus pada diversifikasi
                                                komoditas</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>71,662</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Budidaya dan
                                                tangkap</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Produksi patin meningkat
                                                pesat, mencapai 5 ton/bulan di Cikarang Timur</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2024</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>75,000 (proyeksi)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Budidaya dan
                                                tangkap</span>
                                        </p>
                                    </td>
                                    <td
                                        style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:8.5pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>Optimalisasi metode
                                                bioflok serta ekspansi pasar ke luar Jabodetabek</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style=''>&nbsp;</span></strong>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style=''>&nbsp;</span></strong>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Dominasi Budidaya Air
                                            Tawar</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Lele dan
                                        Patin</span></strong><span style=''>:
                                    Komoditas utama adalah ikan lele dan patin, dengan sebagian besar hasil panen berasal
                                    dari Kecamatan Serang Baru dan Cikarang Timur. Budidaya menggunakan kolam terpal bundar
                                    semakin populer karena efisiensi lahan dan biaya</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Inovasi
                                        Polikultur</span></strong><span style=''>:
                                    Sistem polikultur, di mana beberapa spesies ikan dibudidayakan bersamaan, memperkuat
                                    efisiensi produksi dan memaksimalkan hasil panen</span>
                            </li>
                        </ul>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Kelompok Peternak
                                            Ikan</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style=''>Kabupaten Bekasi memiliki <strong>64
                                        kelompok peternak ikan</strong> aktif, yang mendapatkan dukungan langsung dari Dinas
                                    Perikanan berupa benih, pelatihan, dan pendampingan teknologi</span>
                            </li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style=''>Dalam pengelolaan hasil atau produksi
                                ternak Dinas terkait di Kabupaten Bekasi juga mengalami beberapa tantangan dan faktor
                                pendukung untuk ikut serta dalam peningkatan produksi ternak di Kabupaten Bekasi. Salah satu
                                faktor pendukung dan tantangannya diantaranya adalah:</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Faktor
                                            Pendukung:</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ol style="margin-bottom:0cm;margin-top:0cm;" start="1" type="a">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Dukungan
                                        Infrastruktur</span></strong><span style=''>:
                                    Akses transportasi yang baik mempermudah distribusi hasil peternakan dan perikanan ke
                                    pasar besar.</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Peningkatan
                                        Teknologi</span></strong><span style=''>:
                                    Metode bioflok dan inovasi polikultur membantu meningkatkan efisiensi dan hasil
                                    produksi</span>
                            </li>
                        </ol>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style=''>Tantangan:</span></strong>
                                </li>
                            </ol>
                        </div>
                        <ol style="margin-bottom:0cm;margin-top:0cm;" start="1" type="a">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Ketersediaan
                                        Lahan</span></strong><span style=''>:
                                    Urbanisasi yang cepat mengurangi lahan untuk peternakan dan perikanan.</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style=''>Pelatihan
                                        Teknologi</span></strong><span style=''>:
                                    Tidak semua peternak mampu menerapkan teknologi modern karena kurangnya pelatihan
                                    intensif</span>
                            </li>
                        </ol>
                        <p><span style='font-size:15px;'>Potensi peternakan dan
                                perikanan Kabupaten Bekasi memberikan kontribusi besar terhadap perekonomian lokal. Dengan
                                pertumbuhan rata-rata 5&ndash;7% per tahun, sektor ini memiliki prospek yang cerah jika
                                tantangan seperti keterbatasan lahan dan akses teknologi dapat diatasi. Diversifikasi produk
                                dan pengembangan pasar baru juga menjadi prioritas untuk memastikan keberlanjutan sektor
                                ini</span></p>
                    </div> <br>

                    <div class="tab-pane fade" id="kaukm" role="tabpanel" aria-labelledby="contact-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-family:"Arial",sans-serif;'>Kabupaten</span><span
                                style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;Bekasi memiliki potensi
                                industri dan perdagangan yang sangat besar, didukung oleh posisinya sebagai salah satu
                                kawasan industri terbesar di Asia Tenggara dan kontribusi signifikan terhadap perekonomian
                                nasional. Pada tahun 2023, sektor industri menyumbang 77,2% dari total kegiatan ekonomi
                                daerah dengan nilai sekitar Rp 317,94 triliun. Wilayah ini memiliki lebih dari 7.600
                                perusahaan yang tersebar di 11 kawasan industri besar dengan total luas 9.496 hektare,
                                termasuk Bekasi International Industrial Estate dan MM2100 Industrial Town. Dalam
                                perdagangan, Kabupaten Bekasi berfokus pada pengembangan nilai tambah melalui inisiatif
                                seperti Cikarang Trade Center, yang menggabungkan fungsi perdagangan dan wisata industri.
                                Wisata industri yang dikembangkan telah menarik 50.000 pengunjung, termasuk pelajar dari
                                luar daerah</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;line-height:normal;'>
                            <span style='font-size:16px;font-family:"Arial",sans-serif;'>Untuk perdagangan luar negeri,
                                ekspor dari Kabupaten Bekasi mencakup produk teknologi tinggi hingga FMCG, sementara impor
                                didominasi bahan baku untuk mendukung industri manufaktur. Pada tahun 2024, nilai investasi
                                mencapai Rp 54,134 triliun hingga triwulan ketiga, menunjukkan daya tarik kawasan ini
                                sebagai destinasi investasi</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style='font-family:"Arial",sans-serif;'>Tabel Data Volume Perdagangan dan
                                    Industri (2021&ndash;2024)</span></strong>
                        </p>
                        <table style="border: 1pt solid windowtext; width: 100%;">
                            <thead>
                                <tr>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-family:"Arial",sans-serif;'>Tahun</span></strong>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-family:"Arial",sans-serif;'>Total Ekspor (Rp
                                                    Triliun)</span></strong>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-family:"Arial",sans-serif;'>Total Impor (Rp
                                                    Triliun)</span></strong>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-family:"Arial",sans-serif;'>Penyerapan Lahan Industri
                                                    (Ha)</span></strong>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-family:"Arial",sans-serif;'>Nilai Investasi (Rp
                                                    Triliun)</span></strong>
                                        </p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2021</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>35,6</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>24,3</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>1.000</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>45,0</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2022</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>37,4</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>26,1</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>1.200</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>49,2</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2023</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>39,0</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>28,0</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>1.500</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>52,3</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>2024*</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>40,5</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>29,8</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>1.800</span>
                                        </p>
                                    </td>
                                    <td style="border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style=''>54,134</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-family:"Arial",sans-serif;'>(*Angka 2024 hingga triwulan ketiga)</span>
                        </p>
                        <p><span style='font-size:16px;font-family:"Arial",sans-serif;'>Kabupaten Bekasi juga mendukung
                                transisi ke ekonomi hijau dengan mendorong perusahaan untuk menggunakan energi terbarukan
                                seperti solar panel, sebagai bagian dari strategi keberlanjutan. Potensi besar ini diperkuat
                                oleh infrastruktur strategis, seperti tol layang dan kereta cepat, serta insentif perpajakan
                                dan fasilitas khusus dalam zona ekonomi internasional</span></p>
                    </div>

                    <div class="tab-pane fade" id="dataperhubungan" role="tabpanel" aria-labelledby="contact-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Laporan Kedatangan dan Keberangkatan Kapal (LK3)
                                Pelabuhan Marunda selama Januari hingga November 2024 memberikan gambaran yang komprehensif
                                tentang aktivitas pelabuhan yang menjadi salah satu pusat logistik utama di wilayah
                                Jabodetabek. Sebagai pelabuhan dengan fokus utama pada distribusi komoditas curah dan
                                general cargo, Pelabuhan Marunda memainkan peran strategis dalam mendukung arus barang baik
                                di dalam negeri maupun untuk ekspor. Data laporan menunjukkan bahwa aktivitas bongkar muat
                                berjalan konsisten dengan volume yang terus meningkat setiap bulan, mencerminkan tingginya
                                permintaan logistik dari pelaku usaha.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Secara umum, jenis kapal yang mendominasi
                                operasional di Pelabuhan Marunda adalah tongkang, kapal motor tunda, kapal tanker minyak,
                                dan kapal utilitas untuk pengangkutan general cargo. Tongkang menjadi kendaraan utama dalam
                                pengangkutan komoditas curah seperti pasir kuarsa dan batubara, yang masing-masing mencatat
                                volume bongkar sebesar 530.000 ton dan 810.000 ton selama periode ini. Selain itu, komoditas
                                minyak sawit mentah (CPO) memiliki peran signifikan dengan total volume bongkar mencapai 1,2
                                juta ton. Angka ini menunjukkan tingginya kontribusi pelabuhan dalam distribusi energi
                                terbarukan ke berbagai wilayah di Indonesia maupun luar negeri.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Dari segi efisiensi operasional, rata-rata waktu
                                sandar kapal berada pada kisaran 8 hingga 12 jam, sementara waktu bongkar muat mencapai 16
                                jam untuk kapal tongkang curah kering. General cargo, di sisi lain, memerlukan waktu
                                operasional yang lebih singkat berkat kemudahan dalam proses bongkar muat. Salah satu faktor
                                yang mendorong efisiensi ini adalah implementasi sistem digital dalam manajemen pelabuhan,
                                yang memungkinkan koordinasi yang lebih baik antara operator kapal, penyedia layanan
                                logistik, dan otoritas pelabuhan.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Namun, laporan ini juga menyoroti beberapa
                                tantangan utama, termasuk pengaruh cuaca buruk pada awal tahun yang menghambat jadwal kapal.
                                Kapasitas infrastruktur yang terbatas menjadi hambatan lain, terutama dalam menghadapi
                                peningkatan jumlah kapal yang signifikan pada bulan-bulan puncak. Meski demikian, Pelabuhan
                                Marunda memiliki peluang besar untuk terus berkembang. Digitalisasi layanan pelabuhan,
                                misalnya, dapat meningkatkan daya saing dengan mengurangi waktu tunggu kapal dan mempercepat
                                proses administrasi. Selain itu, diversifikasi komoditas yang diangkut, termasuk pengolahan
                                minyak sawit menjadi produk turunan dengan nilai tambah tinggi, dapat memperluas pasar
                                pelabuhan ini di tingkat internasional.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Secara keseluruhan, data menunjukkan bahwa
                                Pelabuhan Marunda berada di jalur pertumbuhan yang baik, dengan tren positif dalam volume
                                bongkar muat dan efisiensi operasional. Untuk menjaga pertumbuhan ini, perlu ada investasi
                                lebih lanjut dalam infrastruktur pelabuhan, termasuk fasilitas penyimpanan dan peralatan
                                bongkar muat modern. Dukungan pemerintah dalam bentuk regulasi yang mendukung, serta promosi
                                pelabuhan sebagai pusat logistik ramah lingkungan, juga dapat menjadi pendorong utama dalam
                                memaksimalkan potensi Pelabuhan Marunda. Jika detail lebih spesifik atau aspek tertentu dari
                                laporan ini perlu digali lebih dalam, dokumen ini bisa menjadi referensi yang kaya informasi
                                untuk analisis lebih lanjut. Berikut lampiran untuk data Laporan Kedatangan dan
                                Keberangkatan Kapal (LK3) Pelabuhan Marunda pada periode Januari &ndash; November
                                2024.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Kabupaten Bekasi dikenal sebagai pusat industri dengan wilayah
                                yang strategis di kawasan Jabodetabek. Dokumen menunjukkan data perizinan berbagai
                                perusahaan dari Januari hingga akhir tahun 2023 yang tersebar di beberapa kecamatan seperti
                                Cikarang, Tarumajaya, Babelan, dan Tambun Selatan. Sebagian besar perusahaan yang mengajukan
                                izin berada dalam kategori skala usaha kecil dan menengah dengan tingkat risiko tinggi. Hal
                                ini mencerminkan aktivitas ekonomi yang aktif, terutama pada sektor logistik, manufaktur,
                                dan perdagangan.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Sebagian besar perusahaan yang mengajukan perizinan berasal dari
                                sektor mikro hingga menengah dengan tingkat risiko yang bervariasi. Dari dokumen, tercatat
                                beberapa perusahaan memiliki keunggulan tenaga ahli, terutama pada bidang pelayaran,
                                manufaktur, dan teknologi. Beberapa perusahaan besar di kawasan industri seperti Marunda
                                Center dan Jababeka juga menunjukkan keaktifan dalam pengajuan izin, menandakan pertumbuhan
                                investasi dan ekspansi usaha.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Khusus untuk perusahaan kecil dan menengah, mereka mendominasi
                                jumlah permohonan izin, mencerminkan peran signifikan sektor UMKM dalam mendukung
                                perekonomian lokal. Sektor usaha ini sering kali berbasis komunitas dan menggunakan sumber
                                daya lokal, seperti kawasan Tarumajaya yang terkenal dengan usaha kecil berbasis manufaktur
                                ringan dan logistik.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Wilayah Tarumajaya menjadi salah satu kawasan dengan konsentrasi
                                perusahaan terbanyak dalam pengajuan izin. Kawasan ini mencatat berbagai pengajuan dari
                                perusahaan di sektor logistik dan manufaktur ringan. Kawasan industri seperti Jababeka dan
                                Lippo Cikarang mendukung perusahaan yang lebih besar dengan fokus pada manufaktur berat dan
                                distribusi regional.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Selain itu, kecamatan lain seperti Babelan dan Tambun Selatan
                                juga memiliki aktivitas ekonomi yang tinggi. Babelan, misalnya, memiliki keunggulan dalam
                                sektor perdagangan dan usaha ritel berbasis mikro. Sementara itu, Tambun Selatan menjadi
                                basis untuk usaha skala menengah yang berorientasi ekspor, berkat aksesibilitasnya ke
                                pelabuhan dan fasilitas logistik.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Dari data Dinas Perhubungan Provinsi Jawa Barat, sebanyak 18 dari
                                58 perusahaan yang mengajukan izin usahan khususnya terkait JPT dan PBM di Jawa Barat berada
                                di Kabupaten Bekasi hal ini menandakan bahwa ekosistem Kabupaten Bekasi sangatlah cocok
                                untuk usaha yang berhubungan dengan Pelayaran. Dimana sevara geografis Kabupaten Bekasi
                                berdekatan secara jarak dengan Pelabuhan Tanjung Priok dan Pelabuhan Patimban di Subang.
                                Untuk rincian data terkait perusahaan yang telah mengajukan izi operasi di Kabupaten Bekasi
                                dapat dilihat pada tabel di bawah ini.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span><span
                                style="font-family:&quot;Bookman Old Style&quot;,serif;"></span><span
                                style='font-size:15px;font-family:"Bookman Old Style",serif;'><br>&nbsp;</span>
                        </p>
                        <table style="border: none;width:100.0%;border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <td
                                        style="width:2.48%;border:solid windowtext 1.0pt;background:#00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>No.</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:10.88%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>No. &nbsp; &nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp;Permohonan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:10.88%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>No. &nbsp; &nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kegiatan Usaha</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:4.96%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Tanggal</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.48%;border:solid windowtext 1.0pt;border-left:   none;background:#00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Jenis &nbsp; &nbsp; &nbsp;
                                                    &nbsp;Permohonan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.82%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Nama
                                                    Perusahaan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.02%;border:solid windowtext 1.0pt;border-left:   none;background:#00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Jenis
                                                    Perusahaan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.52%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>No. Identitas</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.12%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>NIB</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:3.34%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>KBLI</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.14%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Sektor&nbsp;</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.9%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Modal Usaha</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.92%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Nama Usaha</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:4.2%;border:solid windowtext 1.0pt;border-left:   none;background:#00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Luas &nbsp; &nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp;Lahan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:5.38%;border:solid windowtext 1.0pt;border-left:   none;background:#00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>Jenis &nbsp; &nbsp; &nbsp;
                                                    &nbsp;Kegiatan</span></strong>
                                        </p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202212291747307358853</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202209-2613-0726-7916-593</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>01 Januari 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) PBM SUBANG
                                                SEJAHTERA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3213220202640002</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>2609220060004</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52240</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp2.200.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perusahaan Bongkar Muat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>200 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>9</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202301031712046189885</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202301-0317-0645-9339-216</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>28-Nov-23</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) SYIFA TRANS
                                                LOGISTIK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3216022710750008</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>0220203751976</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp125.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>PT. Syifa Trans Logistik</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>120 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>12</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202109170747409343064</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202109-1513-3230-3886-375</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>18 Februari 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) OTOWA
                                                ABADI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3216096903830001</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>9120004981691</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp600.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>PT. OTOWA ABADI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>200 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>15</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202202021107198597284</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202202-0211-0446-2737-341</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>12 Desember 2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) ECHIBI
                                                LOGISTIK UTAMA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3275090407760016</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>0202220008369</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52240</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp2.200.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perusahaan Bongkar Muat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>200 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>16</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202301060937586578995</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202301-0609-2814-6002-190</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>19 Februari 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) BERLIAN
                                                SELARAS ABADI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3276014202800016</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>9120304952771</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp750.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Jasa Pengurusan Transportasi
                                                (JPT)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>75 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>18</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202208101402060671982</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202208-1013-5220-7396-619</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>27 Februari 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Baru</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) MITRA SINAR
                                                KEDUMAS</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3216190204780010</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>9120405242006</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp400.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>PPJK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>100 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>21</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202211301447057051808</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202211-3014-3007-0417-854</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>30-Nov-22</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Data Migrasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) GF
                                                LINES</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3216182606630001</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>1272000330781</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp350.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Jasa Pengurusan Transportasi
                                                (JPT)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>100 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>24</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202301131132269392972</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202106-1111-1051-1447-610</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>16 Mei 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) MITRA KARUNIA
                                                JAYA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3173061101720009</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>8120106970432</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp600.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Jasa Pengurusan Transportasi
                                                (JPT)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>50 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>25</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202212191705233541589</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>202101-2711-5739-3788-821</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>21-Sep-23</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) MAKMUR MANDIRI SEJAHTERA
                                                ABADI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3671012908800003</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>1245000122273</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52240</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp4.350.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Bongkar muat Barang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>2000 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>29</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202210061640016504656</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>202210-0518-1718-3057-498</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>12 Juni 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) SARANA TRANS
                                                SUMATERA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3173041711800012</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>0220205773501</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp38.195.966.928</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>EKSPEDISI MUATAN KAPAL LAUT</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>1380 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>33</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202305101342384488652</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>201912-2914-4610-5128-073</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>27 Juni 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Baru</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) EXISTAMA
                                                PUTRANINDO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3275064512740011</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>8120106872771</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp 200.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) EXISTAMA
                                                PUTRANINDO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>150 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>I-202205190934514614725</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>202205-1909-3341-5628-425</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>27 Juni 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Baru</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perseroan Terbatas (PT) SAKAR JENIUS
                                                LOGISTIK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>3276031711870002</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>1905220012043</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Rp 100.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>EKPEDISI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>100 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>36</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202305222028552929032</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>201912-3109-0049-7761-978</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>7 Juli 2023</span>
                                        </p>
                                    </td>
                                    <td style="width: 6.48%;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) TRANSFIVE LOGISTICS
                                                INDONESIA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3674011603710001</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>9120200461316</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp 400.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Pendukung</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>150 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>39</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202306261118244413104</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>202011-2218-3620-3618-122</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>26 Juli 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) RAHAYU PUTRA
                                                KARAWANG</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3216091101800000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>233010122323</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp 3.000.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Jasa Pengurusan Transportasi (JPT)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>2000 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>42</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>II-202206201836435116764</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>202011-2312-4512-2471-460</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>4 Agustus 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) WIRA TRANS GLOBAL</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3173062303860014</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>8120114271421</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp 2.148.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Jasa Transportasi Barang dan Logistik</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>90 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>45</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202303081011384472300</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>202303-0809-5749-5367-564</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>01-Sep-23</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Baru</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) CIKARANG GERBANG
                                                SOLUSI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3374120912750001</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>0803230026019</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp 6.000.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Jasa Pengurusan Transportasi (JPT)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>1068.24 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>47</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202204261405078457040</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>201912-3112-2730-6571-729</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>22 Agustus 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) MODA PERKASA MAJU</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>3275115006920006</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>9120303783116</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp 110.000.000</span>
                                        </p>
                                    </td>
                                    <td style="width: 6.92%;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>PT. MODA PERKASA MAJU</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>90 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>Pendukung</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 2.48%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;'>56</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202309200751408498343</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.88%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>I-202309200751408498343</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.96%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>11 Oktober 2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.48%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perubahan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.82%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perseroan Terbatas (PT) JEJE HARAPAN
                                                TRANSINDO</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Badan Usaha Perseroan Terbatas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.52%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>6472056505670005</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.12%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>0225010191266</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 3.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;'>52291</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Perhubungan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.9%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Rp 370.000.000</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Jasa Pengurusan Transportasi (JPT)</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 4.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>50 M&sup2;</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;'>Utama</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-family:"Bookman Old Style",serif;'>&nbsp;</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-family:"Bookman Old Style",serif;'>&nbsp;</span>
                        </p>
                        <table style="border: none;width:100.0%;border-collapse:collapse;table-layout: fixed;">
                            <thead>
                                <tr>
                                    <td
                                        style="width:3.18%;border:solid windowtext 1.0pt;background:#00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>No.</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:10.66%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Alamat</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:5.7%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Provinsi</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.56%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Kab/Kota</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.26%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Kecamatan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.44%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Kelurahan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:7.8%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Skala Usaha</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:6.34%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Resiko</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:11.06%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Nama Tenaga
                                                    Ahli</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:9.08%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Pendidikan</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:16.24%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>No. Surat
                                                    KSOP</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width:8.7%;border:solid windowtext 1.0pt;border-left:none;background:   #00B050;padding:0cm 5.4pt 0cm 5.4pt;height:30.75pt;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:12px;color:black;'>Tanggal
                                                    Surat</span></strong>
                                        </p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>3</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jalan Kawasan Marunda Center</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sagara Makmur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Kecil</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Muzammil Akbar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Diploma IV Ketatalaksanaan Pelayaran
                                                Niaga dan Kepelabuhanan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.003/1/11/KSOP.Mrd-2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>23 November ber 2022</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>9</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>JVila Gading Harapan Blok
                                                AL10/11A</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Babelan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kebalen</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>UM.006/12/22/OP-PMB/22</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>14 Desember 2022</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>12</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Ruko Notredame Blok F No.21, Lantai
                                                II, Deltamas</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Cikarang Pusat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sukamahi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Pipit Yuliana</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Dirjen Hubla &nbsp; &nbsp; Ahli
                                                Nautika Tngkat III</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>UM.006/4/21/KSOP-PMB/2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>21 Oktober 2022</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>15</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jalan Kawasan Marunda Center</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sagara Makmur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Kecil</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Muzammil Akbar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Diploma IV Ketatalaksanaan Pelayaran
                                                Niaga dan Kepelabuhanan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.003/1/11/KSOP.Mrd-2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>23 November ber 2022</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>16</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jalan Harmoni</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Pusaka Rakyat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sumadi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.001/1/11/KSOP-PMB-2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>28 Desember 2022</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>18</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kawasan Industri Multiguna 2
                                                Jl.Tanjung No.7 BIIE,Hyundai,Lippo Cikarang</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Cikarang Selatan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sukaresmi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Ignatius Pio</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.001/1/13/KSOP-PMB-2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>24 Februari 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>21</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>GRAND WISATA MARKET PLACE JL.
                                                BOULEVARD PR-2 NO. 07 LAMBANGSARI</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tambun Selatan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Lambangsari</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Wahyu Widianto</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>BPPK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.001/1/18/KSOP-PMB/23</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>15 Maret 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>24</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>KP. KEBON KELAPA, JALAN MARUNDA
                                                MAKMUR NOMOR 89</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sagara Makmur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Yanti</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>BPPK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.001/1/19/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>15 Maret 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>25</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jalan Kawasan Marunda Center , Jalan Marunda
                                                Makmur Blok B No 21. Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Sagara Makmur</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Kecil</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Heddy P Arindra</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Dirjen Hubla &nbsp; &nbsp; Ahli Nautika Tngkat
                                                II</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.003/1/10/KSOP.Mrd/2022</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 102pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>29 Agustus 2022</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>29</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>KAWASAN INDUSTRI DAN PERGUDANGAN MARUNDA CENTER,
                                                BLOK E NO.62, JL. MARUNDA MAKMUR</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Besar</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Fredric Kosim</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.001/1/1/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 5.4pt;height: 140.25pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>16 Februari 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>33</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Ruko Cluster Harmoni Blok HZ 2 No.
                                                40-41, Harapan Indah 2</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Pusaka Rakyat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Hendri Gusmawan, SH</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>BPPK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.001/18/23/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 63.75pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>29 Mei 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;color:black;'>35</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Ruko Heliconia HP 1 Nomor 29,
                                                Harapan Indah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Pusaka Rakyat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Rheza Surya Pinandita</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>ISCEA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>AL.001/2/27/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 51pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>20 Juni 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>36</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>JL.KH DEWANTARA RUKO RESTO PLAZA BLOK 5C NO
                                                52</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Cikarang Utara</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Simpangan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;color:black;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Eduard Saur Marojohan S</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>BPPK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>UM.006/39/23/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 76.5pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>15 Juni 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>39</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>DUSUN II, NO. 205, KP CIBEBER RT 003/004</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Cikarang Utara</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Simpangan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Usaha Kecil</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>D I F</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AMY</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.001/2/13/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>21 Juli 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>42</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Ruko Aralia Blok HY45 No. 10</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Pusaka Rakyat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Usaha Kecil</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Ruhyatullah</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>BPPK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.001/2/19/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>1 Agustus 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>45</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>JL. DRY PORT RAYA, KOTA JABABEKA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>-</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Usaha Kecil</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>D I F</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AMY</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.001/1/21/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 69pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:12px;'>10-Apr-23</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>47</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Ruko Niaga Kalimas 2 Blok C No 3B</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Tambun Selatan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Setiadarma</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Mekha Rohmayani</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>BPPK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.001/3/3/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>11 Agustus 2023</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 3.18%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:12px;'>56</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 10.66%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Ruko Heliconia Blok HP 1 No. 30</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 5.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Jawa Barat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.56%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Kab. Bekasi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.26%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Tarumajaya</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Pusaka Rakyat</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 7.8%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Usaha Mikro</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 6.34%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Menengah Tinggi</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 11.06%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>Rheza Surya Pinandita</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>ISCEA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 16.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:12px;'>AL.001/3/17/KSOP-PMB/2023</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 8.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 54.95pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:12px;'>29-Sep-23</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-family:"Bookman Old Style",serif;'>&nbsp;</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
