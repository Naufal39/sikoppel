@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Profil Dinas Perhubungan Provinsi Jawa Barat</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <center>
                    <img src="{{ asset('img/dishubjabar.jpg') }}" alt="" class="mt-3" style="max-width: 50%;">
                    {{-- <p style="font-size: 11px;">src: https://www.pngtree.com/</p> --}}
                </center>
                <div class="fs-5" style="color: black">
                    <p style="font-weight: 300">Tugas, Fungsi dan Struktur Organisasi</p>
                    <p>Berdasarkan Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah memasukkan urusan
                        perhubungan menjadi urusan wajib yang tidak berkaitan dengan pelayanan dasar. Penyelenggaraan
                        pemerintahan daerah termasuk penyelenggaraan perhubungan di daerah, memerlukan penyesuaian-
                        penyesuaian tugas pokok dan fungsi sebagai dampak penyesuaian urusan/ kewenangan berdasarkan UU No.
                        23 Tahun 2014.</p>
                    <p>Dinas Perhubungan Pemerintah Daerah Provinsi Jawa Barat dibentuk dengan Peraturan Daerah Provinsi
                        Jawa Barat Nomor 6 Tahun 2016 tentang pembentukan dan Susunan Perangkat Daerah Provinsi Jawa Barat,
                        serta dalam menyelenggarakan urusan dilingkungan Pemerintah Daerah Provinsi Jawa Barat ditetapkan
                        dengan Peraturan Daerah Provinsi Jawa Barat Nomor 9 Tahun 2017 tentang Penyelenggaraan Urusan
                        Pemerintah Daerah. Selanjutnya atas dasar peraturan daerah tersebut ditetapkan Peraturan Gubernur
                        Jawa Barat Nomor 45 Tahun 2016 tentang kedudukan dan Susunan Organisasi Perangkat Daerah Provinsi
                        Jawa Barat.</p>
                    <p>Tugas pokok, dan fungsi Dinas Perhubungan Provinsi Jawa Barat berdasarkan Peraturan Gubernur Jawa
                        Barat Nomor 59 Tahun 2016 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit Dan Tata Kerja Dinas
                        Perhubungan Provinsi Jawa Barat, adalah sebagai berikut:</p>
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
                        <p>Dalam pasal 2 disebutkan tugas pokok, fungsi, rincian tugas unit dan tata kerja Dinas Perhubungan
                            Provinsi Jawa Barat, bahwa Dinas mempunyai tugas pokok melaksanakan urusan pemerintahan di
                            bidang perhubungan, meliputi sub urusan Lalu Lintas dan Angkutan Jalan (LLAJ), sub urusan
                            pelayaran, sub urusan penerbangan dan sub urusan perkeretaapian yang menjadi kewenangan
                            provinsi, melaksanakan tugas dekonsentrasi sampai dengan dibentuk Sekretariat Gubernur sebagai
                            Wakil Pemerintah Pusat dan melaksanakan tugas pembantuan sesuai bidang tugasnya.</p>
                    </div>
                    <div class="tab-pane fade" id="fungsi" role="tabpanel" aria-labelledby="profile-tab">
                        <p>Fungsi Dinas Perhubungan Provinsi lawa Barat adalah sebagai berikut:</p>
                        <ul>
                            <li>penyelenggaraan perumusn kebgakan teknis di bidang perhubungan, yang menjadi kewenangan
                                Provinsi;</li>
                            <li>penyelenggaraan kebijakan teknis di bidang perhubungan, yang menjadikewenangan Provinsi;
                            </li>
                            <li>penyelenggaraanadministrasi Dinas;</li>
                            <li>penyelenggaraan evaluasi dan pelaporan Dinas; dan</li>
                            <li>penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="kewenangan" role="tabpanel" aria-labelledby="contact-tab">
                        <p>Dalam pelaksanaan Tugas Pokok dan Fungsi, Dinas juga telah dilengkapi dengan peraturan daerah
                            yang memudahkan operasionalisasi pelaksanaan tugas dan pelayanan masyarakat melalui Peraturan
                            Daerah Nomor 3 Tahun 2011 tentang Penyelenggaraan Perhubungan yang telah dirubah dengan
                            Peraturan Daerah Provinsi Jawa Barat Nomor 4 Tahun 20L7 tentang Perubahan Atas Peraturan Daerah
                            Provinsi Jawa Barat Nomor 3 Tahun 2011 tentang Penyelenggaraan Perhubungan.</p>
                        <p>Dengan ditetapkannya Undang-Undang Nomor 23 Tahun 20L4 tentang Pemerintahan Daerah, terdapat
                            pengalihan urusan pemerintahan bidang perhubungan yang menjadi kewenangan Pemerintah Daerah
                            Provinsi. Sehingga kewenangan Daerah provinsi dalam urusn pemerintahan di bidang perhubungan
                            berdasarkan Undang-Undang Nomor 23 Tahun 20t4 tentang Pemerintahan Daerah mengalami perubahan.
                        </p>
                        <p>Perubahan kewenangan tersebut meliputi perubahan kewenangan yang sebelumnya merupakan Daerah
                            provinsi beralih menjadi kewenangan Pemerintah Pusat, maupun kewenangan baru Pemerintah Daerah
                            provinsi yang sebelumnya kewenangan Pemerintah Daerah kabupaten/kota. Pelaksanaan pengelolaan
                            jembatan timbang dan uji tipe kendaraan bermotor menjadi kewenangan Pemerintah Pusat. Adapun
                            pengelolaan terminal Tipe B dan terminal angkutan barang yang sebelumnya merupakan kewenangan
                            Pemerintah Daerah kabupaten/kota beralih menjadi kewenangan Pemerintah Daerah provinsi.
                            Pergeseran kewenangan tersebut berimplikasi pada perubahan pelaksanaan tugas Pemerintah Daerah
                            Provinsi Jawa Barat.</p>
                        <p>Penyelenggaraan perhubungan di Daerah Provinsi Jawa Barat merupakan kegiatan yang sangat penting
                            dan strategis dalam memperlancar roda perekonomian, memperkokoh persatuan dan kesatuan, serta
                            mempengaruhisemua aspek kehidupan di Jawa Barat. Pentingnya sektor perhubungan tercermin dengan
                            semakin meningkatnya kebutuhan akan jasa angkutan bagi mobilitas orang dan barang dari dan ke
                            seluruh pelosok Jawa Barat, bahkan dari dan ke luar negeri serta berperan sebagai penunjang,
                            pendorong dan penggerak bagi pertumbuhan daerah yang berpotensi namun belum berkembang dalam
                            upaya peningkatan dan pemerataan</p>
                        <p>pembangunan serta hasilnya melalui keterkaitan antar moda dan intra moda untuk menjangkau dan
                            menghubungkan / konektivitas seluruh wilayah Jawa Barat dengan mobilitas tinggi, yang meliputi
                            penyelenggaraan perhubungan darat, perkeretaapian, perhubungan laut dan Angkutan Sungai, Danau
                            dan Penyeberangan, serta perhubungan udara.</p>
                        <p>Penyelenggaraan urusan Perhubungan tersebut sebagaimana telah ditetapkan dengan Peraturan Daerah
                            Provinsi Jawa Barat Nomor 9 Tahun 2017 tentang Penyelenggaraan Urusan Pemerintahan Daerah
                            Provinsi Jawa Barat yang didalamnya memuat urusan yang bersifat wajib dan urusan yang bersifat
                            pilihan. Dalam pasal 7 ayat (4) huruf i Perda Jawa Barat No. 9 Tahun 2017 tersebut disebutkan
                            bahwa Perhubungan termasuk Urusan Pemerintahan Wajib yang tidak berkaitan dengan pelayanan
                            dasar. Dan dalam pasal 8 ayat (1) ditegaskan bahwa Setiap bidang Urusan Pemerintahan Wajib
                            sebagaimana dimaskud dalam pasal 7, meliputi sub urusan dan rincian sub urusan yang menjadi
                            kewenangan Daerah Provinsi. Pada lampiran Perda Jawa Barat No. 9 Tahun 2017, untuk Bidang
                            Perhubungan Sub Urusan Daerah Provinsi terdiri dari :</p>
                        <ol>
                            <li>Lalu Lintas dan Angkutan Jalan (LLAJ)</li>
                            <li>Pelayaran</li>
                            <li>Penerbangan</li>
                            <li>Perkeretaapian</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
