@extends('layouts/main')

@section('isihalaman')
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Profil UPTD PPP Pelabuhan Laut</h1>
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
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#visimisi" type="button" role="tab" aria-controls="home" aria-selected="true">Visi dan Misi</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#maklumat" type="button" role="tab" aria-controls="profile" aria-selected="false">Maklumat</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#klimatologi" type="button" role="tab" aria-controls="contact" aria-selected="false">Klimatologi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#demografi" type="button" role="tab" aria-controls="contact" aria-selected="false">Demografi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#pdrb" type="button" role="tab" aria-controls="contact" aria-selected="false">Pertumbuhan PDRB</button>
                </li> --}}
              </ul>
              <div class="tab-content fs-5 text-dark" id="myTabContent" style="text-align: justify">
                  <div class="tab-pane fade show active" id="visimisi" role="tabpanel" aria-labelledby="home-tab" style="">
                    
                </div>
                <div class="tab-pane fade" id="maklumat" role="tabpanel" aria-labelledby="profile-tab">
                    <center>
                        <img src="{{ asset('img/maklumat.png') }}" alt="" class="mt-3" style="max-width: 70%; margin-bottom: 5%">
                    </center>
                </div>
                {{-- <div class="tab-pane fade" id="klimatologi" role="tabpanel" aria-labelledby="contact-tab">
                    <p>Iklim daerah Jawa Barat termasuk tropis dengan suhu udara rata-rata antara 16° Celsius - 34° Celsius dan curah hujan yang beragam. Curah hujan di Jawa Barat berada pada rentang curah hujan 1.000 - 4.000 mm per tahun (Sumber: Badan Meteorologi, Klimatologi dan Geofisika). Rata-rata hujan setiap bulan menunjukkan perbedaan yang jelas antara periode musim kemarau dengan curah hujan kurang dari 150 milimeter dan periode musim hujan dengan curah hujan lebih dari 150 milimeter. Persebaran curah hujan terendah berada di Wilayah Utara (Pantura, Bekasi sampai dengan Cirebon dan Kuningan) dan sebagian Wilayah Tengah Jawa Barat (Sukabumi, Cianjur, Bandung, dan Garut, dan sekitarnya); sedangkan sebaran curah hujan tinggi melingkupi Wilayah Barat-Selatan (Bogor dan Sukabumi), Wilayah Tengah (Purwakarta, Subang, Sumedang, dan sekitarnya) serta Wilayah TimurSelatan (Tasikmalaya, Kuningan, Ciamis, dan Pangandaran).</p>
                </div>
                <div class="tab-pane fade" id="demografi" role="tabpanel" aria-labelledby="demografi-tab">
                    <p>
                        Kondisi demografis suatu daerah secara umum tercermin melalui jumlah penduduk, laju pertumbuhan penduduk, struktur penduduk, sebaran penduduk serta ketenagakerjaan. Berdasarkan hasil proyeksi BPS, jumlah penduduk Jawa Barat Tahun 2017 mencapai 48.037.827 jiwa dengan laju pertumbuhan sebesar 1,39 persen, menurun sebesar 0,04 persen bila dibandingkan dengan laju pertumbuhan penduduk pada tahun 2016. Penduduk terbanyak pada tahun 2017 berada di Kabupaten Bogor, sebanyak 5.715.009 jiwa atau 11,90 persen, diikuti dengan Kabupaten Bandung dan Kabupaten Bekasi. Daerah yang paling sedikit penduduknya adalah Kota Banjar yaitu sebanyak 182,388 jiwa atau 0,38 persen dari total jumlah penduduk Jawa Barat.
                    </p>
                </div>
                <div class="tab-pane fade" id="pdrb" role="tabpanel" aria-labelledby="pdrb-tab">
                    <p>
                        Berdasarkan harga konstan 2010, nilai PDRB Jawa Barat pada tahun 2017 meningkat dibandingkan tahun 2016. Peningkatan tersebut dipengaruhi oleh meningkatnya produksi di seluruh lapangan usaha yang sudah bebas dari pengaruh inflasi. Nilai PDRB Jawa Barat tahun 2017 atas dasar harga konstan 2010, mencapai 1.342,95 triliun rupiah. Angka tersebut naik sebesar 67,42 triliun dari 1.275,53 triliun rupiah pada tahun 2016. Hal tersebut menunjukkan bahwa selama tahun 2017 terjadi pertumbuhan ekonomi sebesar 5,29 persen, lebih lambat jika dibandingkan dengan pertumbuhan ekonomi tahun sebelumnya yang mencapai 5,66 persen.
                    </p>
                    <p>
                        Perlambatan pertumbuhan ekonomi Jawa Barat pada tahun 2017 dibandingkan Tahun 2016 disebabkan karena melambatnya beberapa lapangan usaha seperti Pertanian, Kehutanan, dan Perikanan; Transportasi dan Pergudangan; Penyediaan Akomodasi dan Makan Minum; Informasi dan Komunikasi; Jasa Keuangan dan Asuransi; Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib; serta Jasa Kesehatan dan Kegiatan Sosial. Sementara itu, penurunan pertumbuhan lapangan usaha Pertambangan dan Penggalian serta Pengadaan Listrik dan Gas juga turut memberikan andil perlambatan pertumbuhan ekonomi Jawa Barat tahun 2017.
                    </p>
                </div> --}}
              </div>
              </div>
        </div> 
    </div>        
</div>
@endsection