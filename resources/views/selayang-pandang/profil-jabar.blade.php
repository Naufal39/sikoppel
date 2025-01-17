@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Profil Provinsi Jawa Barat</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <center>
                    <img src="{{ asset('img/gedung-sate2.png') }}" alt="" class="mt-3" style="max-width: 50%;">
                    <p style="font-size: 11px;">src: https://www.pngtree.com/</p>
                </center>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#luasdanbataswilayah" type="button" role="tab" aria-controls="home"
                            aria-selected="true">Luas dan Batas Wilayah</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#topografi"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Topografi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#klimatologi"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Klimatologi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#demografi"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Demografi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#pdrb" type="button"
                            role="tab" aria-controls="contact" aria-selected="false">Pertumbuhan PDRB</button>
                    </li>
                </ul>
                <div class="tab-content fs-5" id="myTabContent" style="text-align: justify">
                    <div class="tab-pane fade show active" id="luasdanbataswilayah" role="tabpanel"
                        aria-labelledby="home-tab" style="color:black">
                        <center>
                            <img src="{{ asset('img/peta-jawa-barat.jpg') }}" alt="" class="mt-3"
                                style="max-width: 50%;">
                            <p style="font-size: 11px;">src: https://www.lamudi.co.id/journal/peta-jawa-barat/</p>
                        </center>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:18.0pt;'>
                            Secara Geografis Provinsi Jawa Barat terletak pada posisi 104&deg;48&quot; - 108&deg;48&quot;
                            Bujur Timur dan 5&deg;50&quot; - 7&deg;50&quot; Lintang Selatan, dengan batasbatas wilayah
                            sebagai berikut:</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            a. Sebelah Utara : berbatasan dengan Laut Jawa dan Provinsi DKI Jakarta</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            b. Sebelah Barat : berbatasan dengan Provinsi Banten</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            c. Sebelah Timur : berbatasan dengan Provinsi Jawa Tengah</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            d. Sebelah Selatan : berbatasan dengan Samudera Hindia</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Provinsi Jawa Barat memiliki luas wilayah 37.087.92 Km2
                            (Sumber: RTRW Provinsi Jawa Barat, perhitungan GIS) dengan garis pantai sepanjang 832,69 km
                            (Sumber: Peta RZWP3K Provinsi Jawa Barat). Berdasarkan kewenangan pengelolaan laut 0-12 mil,
                            luas wilayah laut Provinsi Jawa Barat adalah 1.552.890,67 Ha, dan memiliki jumlah pulaupulau
                            kecil 19 buah.</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            &nbsp;</p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                            &nbsp; &nbsp; &nbsp; &nbsp; Secara administratif, wilayah Provinsi Jawa Barat terbagi kedalam 27
                            kabupaten/kota, meliputi 18 kabupaten dan 9 Kota, yaitu Kabupaten Bogor, Sukabumi, Cianjur,
                            Bandung, Bandung Barat, Garut, Tasikmalaya, Ciamis, Kuningan, Cirebon, Majalengka, Sumedang,
                            Indramayu, Subang, Purwakarta, Karawang, Bekasi, dan Pangandaran serta Kota Bogor, Sukabumi,
                            Bandung, Cirebon, Bekasi, Depok, Cimahi, Tasikmalaya dan Kota Banjar. Kabupaten Sukabumi
                            merupakan wilayah kabupaten terluas di Provinsi Jawa Barat dengan luas 4.145,70 Km2 (11,72
                            persen terhadap luas wilayah Provinsi Jawa Barat), sedangkan wilayah terkecil adalah Kota
                            Cirebon yaitu seluas 37,36 Km2 (0,11 persen terhadap luas wilayah Provinsi Jawa Barat).</p>
                    </div>
                    <div class="tab-pane fade" id="topografi" role="tabpanel" aria-labelledby="profile-tab">
                        <p>Jawa Barat terdiri atas wilayah pegunungan curam di selatan, wilayah lereng bukit yang landai di
                            tengah, wilayah dataran luas di utara, dan wilayah aliran sungai. Wilayah pegunungan curam
                            (9,5%) terletak di bagian selatan dengan ketinggian lebih dari 1.500 m di atas permukaan laut,
                            dan wilayah lereng bukit yang landai (36,48%) terletak di bagian tengah dengan ketinggian
                            10-1.500 m dpl, serta wilayah daratan landai (54,02%) terletak di bagian utara dengan ketinggian
                            0-10 mdpl. Kondisi fisik dasar pesisir utara Jawa Barat yang terdiri atas dataran pantai dan
                            rawa alluvial pantai dengan kemiringan lereng 0%–5%, merupakan daerah yang bertopografi landai,
                            perairan dangkal, memiliki substrat lumpur, berpasir dan berawa, pola arus yang dipengaruhi arus
                            laut Jawa, serta
                            bervegetasi mangrove dan terumbu karang. Topografi Wilayah Pansela Jawa Barat merupakan
                            pegunungan dan perbukitan terjal, perairan dalam dengan banyak batu karang dan pantai berpasir,
                            pola arus laut yang kuat yang dipengaruhi keberadaan Samudera Indonesia.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="klimatologi" role="tabpanel" aria-labelledby="contact-tab">
                        <p>Iklim daerah Jawa Barat termasuk tropis dengan suhu udara rata-rata antara 16° Celsius - 34°
                            Celsius dan curah hujan yang beragam. Curah hujan di Jawa Barat berada pada rentang curah hujan
                            1.000 - 4.000 mm per tahun (Sumber: Badan Meteorologi, Klimatologi dan Geofisika). Rata-rata
                            hujan setiap bulan menunjukkan perbedaan yang jelas antara periode musim kemarau dengan curah
                            hujan kurang dari 150 milimeter dan periode musim hujan dengan curah hujan lebih dari 150
                            milimeter. Persebaran curah hujan terendah berada di Wilayah Utara (Pantura, Bekasi sampai
                            dengan Cirebon dan Kuningan) dan sebagian Wilayah Tengah Jawa Barat (Sukabumi, Cianjur, Bandung,
                            dan Garut, dan sekitarnya); sedangkan sebaran curah hujan tinggi melingkupi Wilayah
                            Barat-Selatan (Bogor dan Sukabumi), Wilayah Tengah (Purwakarta, Subang, Sumedang, dan
                            sekitarnya) serta Wilayah TimurSelatan (Tasikmalaya, Kuningan, Ciamis, dan Pangandaran).</p>
                    </div>
                    <div class="tab-pane fade" id="demografi" role="tabpanel" aria-labelledby="demografi-tab">
                        <p>
                            Kondisi demografis suatu daerah secara umum tercermin melalui jumlah penduduk, laju pertumbuhan
                            penduduk, struktur penduduk, sebaran penduduk serta ketenagakerjaan. Berdasarkan hasil proyeksi
                            BPS, jumlah penduduk Jawa Barat Tahun 2017 mencapai 48.037.827 jiwa dengan laju pertumbuhan
                            sebesar 1,39 persen, menurun sebesar 0,04 persen bila dibandingkan dengan laju pertumbuhan
                            penduduk pada tahun 2016. Penduduk terbanyak pada tahun 2017 berada di Kabupaten Bogor, sebanyak
                            5.715.009 jiwa atau 11,90 persen, diikuti dengan Kabupaten Bandung dan Kabupaten Bekasi. Daerah
                            yang paling sedikit penduduknya adalah Kota Banjar yaitu sebanyak 182,388 jiwa atau 0,38 persen
                            dari total jumlah penduduk Jawa Barat.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pdrb" role="tabpanel" aria-labelledby="pdrb-tab">
                        <p>
                            Berdasarkan harga konstan 2010, nilai PDRB Jawa Barat pada tahun 2017 meningkat dibandingkan
                            tahun 2016. Peningkatan tersebut dipengaruhi oleh meningkatnya produksi di seluruh lapangan
                            usaha yang sudah bebas dari pengaruh inflasi. Nilai PDRB Jawa Barat tahun 2017 atas dasar harga
                            konstan 2010, mencapai 1.342,95 triliun rupiah. Angka tersebut naik sebesar 67,42 triliun dari
                            1.275,53 triliun rupiah pada tahun 2016. Hal tersebut menunjukkan bahwa selama tahun 2017
                            terjadi pertumbuhan ekonomi sebesar 5,29 persen, lebih lambat jika dibandingkan dengan
                            pertumbuhan ekonomi tahun sebelumnya yang mencapai 5,66 persen.
                        </p>
                        <p>
                            Perlambatan pertumbuhan ekonomi Jawa Barat pada tahun 2017 dibandingkan Tahun 2016 disebabkan
                            karena melambatnya beberapa lapangan usaha seperti Pertanian, Kehutanan, dan Perikanan;
                            Transportasi dan Pergudangan; Penyediaan Akomodasi dan Makan Minum; Informasi dan Komunikasi;
                            Jasa Keuangan dan Asuransi; Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib;
                            serta Jasa Kesehatan dan Kegiatan Sosial. Sementara itu, penurunan pertumbuhan lapangan usaha
                            Pertambangan dan Penggalian serta Pengadaan Listrik dan Gas juga turut memberikan andil
                            perlambatan pertumbuhan ekonomi Jawa Barat tahun 2017.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
