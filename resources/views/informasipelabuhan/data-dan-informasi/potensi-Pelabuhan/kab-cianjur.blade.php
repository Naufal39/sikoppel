@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Potensi dan Pemanfaatan Pelabuhan</h1>
            <h5 class="display-5 text-white mb-3 animated slideInDown">Kabupaten Cianjur</h5>
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
                    <p>ANALISA DATA DI KABUPATEN CIANJUR</p>
                    <p>Potensi pengelolaan pelabuhan di Kabupaten Cianjur dapat dianalisis berdasarkan beberapa aspek
                        seperti letak geografis, sektor ekonomi, serta peran strategis pelabuhan untuk mendukung pertumbuhan
                        wilayah.</p>
                </div>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#potensikelautan" type="button" role="tab" aria-controls="home"
                            aria-selected="true">POTENSI KELAUTAN DAN PERIKANAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#potensipariwisata"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">POTENSI
                            PARIWISATA</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent" style="text-align: justify; color:black">
                    <div class="tab-pane fade show active" id="potensikelautan" role="tabpanel" aria-labelledby="home-tab"
                        style="color:black;">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Kabupaten
                                Cianjur memiliki berbagai potensi di sektor kelautan dan perikanan yang signifikan, terutama
                                di wilayah pesisir seperti Kecamatan Cidaun. Berikut adalah beberapa data utama:</span>
                        </p>
                        <ol style="margin-bottom:0cm;margin-top:0cm;" start="1" type="1">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;line-height:107%;'>Tambak
                                        Udang Berkelanjutan</span></strong><span
                                    style='font-size:16px;line-height:     107%;'>&nbsp;Di
                                    Cidaun, terdapat klaster tambak udang berkelanjutan yang dikelola bersama oleh
                                    Kementerian Kelautan dan Perikanan (KKP) serta Perum Perhutani. Area tambak seluas 4
                                    hektare menghasilkan udang vaname sekitar 30 ton dalam panen perdana, senilai Rp2
                                    miliar. Program ini mengubah lahan tidak produktif menjadi sumber ekonomi bagi
                                    masyarakat sekitar, meningkatkan pendapatan petani hingga tiga kali lipat</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;line-height:107%;'>Pelabuhan
                                        Perikanan Jayanti</span></strong><span
                                    style='font-size:16px;line-height:107%;'>&nbsp;Pelabuhan
                                    Perikanan Jayanti menjadi pusat aktivitas perikanan di Cianjur. Saat ini, berbagai
                                    fasilitas sedang ditingkatkan, termasuk tempat pemasaran ikan yang lebih higienis,
                                    fasilitas rantai dingin, dan pasokan air bersih. Hal ini bertujuan untuk meningkatkan
                                    efisiensi serta mendukung standar internasional</span>
                            </li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;line-height:107%;'>Kegiatan
                                        Nelayan Tradisional</span></strong><span
                                    style='font-size:16px;line-height:     107%;'>&nbsp;Wilayah
                                    pantai seperti Pantai Jayanti menjadi lokasi utama aktivitas nelayan tradisional. Para
                                    nelayan berharap peningkatan dukungan infrastruktur dan teknologi untuk menunjang
                                    pekerjaan mereka. Inisiatif seperti bantuan sarana dan prasarana juga
                                    diusulkan</span><span style='font-size:16px;line-height:107%;'>.</span>
                            </li>
                        </ol>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Potensi ini
                                menunjukkan bahwa sektor kelautan dan perikanan di Cianjur memiliki peluang besar untuk
                                mendukung ekonomi lokal, terutama melalui budidaya, perikanan tangkap, dan pengembangan
                                infrastruktur pelabuhan. Untuk pengembangan lebih lanjut, pendekatan berkelanjutan dan
                                kolaborasi dengan pemerintah dan masyarakat lokal menjadi kunci.</span>
                        </p>
                        <ol style="list-style-type: upper-alpha;margin-left: 8px;">
                            <li><strong><span style='line-height:107%;font-size:16px;'>Produksi
                                        Kelautan dan Perikanan</span></strong>
                                <ul style="list-style-type: disc;">
                                    <li><span style='font-size:16px;'>Komoditas utama dari
                                            sektor kelautan dan perikanan di Kabupaten Cianjur adalah <strong>udang
                                                vaname</strong>. Komoditas ini diproduksi secara signifikan melalui klaster
                                            tambak udang berkelanjutan yang berlokasi di Kecamatan Cidaun. Tambak ini
                                            merupakan hasil inisiatif dari Kementerian Kelautan dan Perikanan (KKP) bekerja
                                            sama dengan Perum Perhutani. Dalam setiap siklus panen, tambak ini mampu
                                            memproduksi rata-rata 30 ton udang dengan kualitas ekspor.</span></li>
                                    <li><span style='font-size:16px;'>Potensi pengembangan
                                            budidaya udang vaname di Cianjur didukung oleh ketersediaan lahan tambak seluas
                                            sekitar 110 hektare serta kondisi alam yang cocok untuk aktivitas ini. Selain
                                            menjadi sumber pendapatan utama bagi masyarakat setempat, tambak ini juga
                                            menciptakan lapangan kerja dan meningkatkan kesejahteraan masyarakat pesisir
                                            melalui kegiatan padat karya</span><span style='font-size:16px;'>.</span></li>
                                    <li><span style='font-size:16px;'>Program ini tidak
                                            hanya fokus pada produksi, tetapi juga memastikan keberlanjutan melalui
                                            pelatihan dan pengelolaan lingkungan, seperti penggunaan instalasi pengolahan
                                            air limbah (IPAL). Dengan pengelolaan yang baik, Cianjur memiliki peluang besar
                                            untuk meningkatkan produktivitas udang vaname dan memperluas pasar, termasuk
                                            pasar ekspor</span></li>
                                    <li><span style='font-size:16px;'>Berikut data
                                            produksi komoditas utama sektor kelautan dan perikanan, khususnya udang vaname
                                            di Kabupaten Cianjur untuk tiga tahun terakhir:</span>
                                        <ol style="list-style-type: lower-roman;">
                                            <li><span style='font-size:16px;'>Tahun 2020:
                                                    Produksi tambak udang vaname dimulai akhir tahun, dengan hasil total
                                                    sekitar 32 ton pada siklus pertama.</span></li>
                                            <li><span style='font-size:16px;'>Tahun 2021:
                                                    Produksi tambak di Cidaun mencapai 32 ton per siklus, dengan peningkatan
                                                    pemahaman budidaya yang berkelanjutan</span></li>
                                            <li><span style='font-size:16px;'>Tahun 2022:
                                                    Pada siklus ketiga, tambak menghasilkan 32,5 ton udang vaname,
                                                    menunjukkan stabilitas dan keberlanjutan produktivitas</span></li>
                                            <li><span style='font-size:16px;'>Tambak udang
                                                    ini dikelola oleh kelompok masyarakat lokal dan dilengkapi sistem IPAL
                                                    untuk menjaga lingkungan tetap lestari. Program ini juga berkontribusi
                                                    pada peningkatan ekonomi dan penyerapan tenaga kerja setempat.</span>
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="2" style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style='line-height:107%;font-size:16px;'>Kondisi
                                            Pelabuhan Perikanan</span></strong>
                                </li>
                            </ol>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Di Kabupaten
                                Cianjur, terdapat Pelabuhan Perikanan Jayanti sebagai fasilitas utama dalam mendukung
                                aktivitas kelautan dan perikanan. Kondisi saat ini menunjukkan bahwa pelabuhan ini memiliki
                                beberapa tantangan, namun juga mengalami peningkatan fasilitas melalui berbagai proyek
                                revitalisasi:</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ul style="margin-bottom:0cm;list-style-type: disc;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <span style='line-height:107%;font-size:16px;'>Kondisi
                                        Infrastruktur:</span>
                                </li>
                            </ul>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:36.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Revitalisasi
                                yang dilakukan mencakup peninggian talud, rehabilitasi tangga pendaratan (landing stairs),
                                serta pembangunan sediment trap untuk mencegah sedimentasi di kolam pelabuhan, sehingga
                                kapal dapat bersandar lebih mudah. Masih terdapat kendala operasional, seperti terbatasnya
                                fasilitas bongkar muat, kurangnya pengolahan hasil tangkapan, serta tidak optimalnya Tempat
                                Pelelangan Ikan (TPI)</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ul style="margin-bottom:0cm;list-style-type: disc;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <span style='line-height:107%;font-size:16px;'>Manfaat
                                        Revitalisasi:</span>
                                </li>
                            </ul>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:36.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Pelabuhan ini
                                diharapkan menjadi pusat kegiatan perikanan tangkap di Kabupaten Cianjur, mengingat
                                banyaknya masyarakat nelayan di wilayah pesisir kabupaten ini. Pemerintah juga mengarahkan
                                pelabuhan ini untuk mematuhi standar internasional dalam penanganan hasil tangkapan dan
                                kebersihan, guna mendukung keberlanjutan dan daya saing hasil perikanan</span><span
                                style='font-size:16px;line-height:107%;'>.</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ul style="margin-bottom:0cm;list-style-type: disc;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <span style='line-height:107%;font-size:16px;'>Akses
                                        dan Perencanaan:</span>
                                </li>
                            </ul>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:36.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Pelabuhan
                                Jayanti termasuk dalam Rencana Induk Pelabuhan Perikanan Nasional (RIPPN), menjadikannya
                                prioritas untuk pengembangan lebih lanjut</span><span
                                style='font-size:16px;line-height:107%;'>. Dibutuhkan
                                perbaikan akses jalan menuju pelabuhan serta edukasi bagi nelayan terkait penanganan hasil
                                tangkapan agar potensi pelabuhan ini bisa dimanfaatkan maksimal</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Pelabuhan Perikanan Jayanti di
                                Kabupaten Cianjur memiliki peran penting bagi aktivitas&nbsp;</span><span
                                style='font-size:16px;line-height:107%;'>perikanan</span><span
                                style='font-size:16px;'>&nbsp;lokal, meskipun masih
                                menghadapi berbagai kendala dalam operasionalnya. Berikut detail terbaru mengenai kondisi
                                pelabuhan ini:</span>
                        </p>
                        <ul style="list-style-type: disc;">
                            <li><span style='line-height:107%;font-size:16px;'>Fasilitas:
                                    PPI Jayanti memiliki fasilitas seperti dermaga, tempat pelelangan ikan (TPI), dan area
                                    penyimpanan sementara. Namun, fasilitas ini dianggap belum memadai oleh banyak nelayan,
                                    terutama terkait kapasitas dan kualitasnya. Revitalisasi yang dilakukan pemerintah
                                    mencakup perbaikan dermaga dan pembangunan fasilitas tambahan untuk meningkatkan
                                    efisiensi</span></li>
                            <li><span style='line-height:107%;font-size:16px;'>Masalah
                                    Operasional:</span>
                                <ol style="list-style-type: circle;">
                                    <li><span style='line-height:107%;font-size:16px;'>Bongkar
                                            Muat: Kegiatan bongkar muat sering terhambat karena keterbatasan ruang dan
                                            fasilitas.</span></li>
                                    <li><span style='line-height:107%;font-size:16px;'>Penanganan
                                            Hasil Tangkapan: Belum optimal, sehingga kualitas ikan yang dipasarkan sering
                                            mengalami penurunan.</span></li>
                                    <li><span style='line-height:107%;font-size:16px;'>Akses
                                            Transportasi: Jalur ke pelabuhan masih kurang memadai, menyulitkan distribusi
                                            hasil tangkapan</span><span style='line-height:107%;font-size:16px;'>.</span>
                                    </li>
                                </ol>
                            </li>
                            <li><span style='line-height:107%;font-size:16px;'>Revitalisasi:</span>
                                <ol style="list-style-type: circle;">
                                    <li><span style='line-height:107%;font-size:16px;'>Fokus
                                            pada perbaikan fasilitas pendaratan ikan dan pembangunan industri pengolahan
                                            hasil tangkapan.</span></li>
                                    <li><span style='line-height:107%;font-size:16px;'>Penyediaan
                                            akses jalan yang lebih baik ke pelabuhan untuk mendukung aktivitas pemasaran dan
                                            distribusi</span></li>
                                </ol>
                            </li>
                            <li><span style='line-height:107%;font-size:16px;'>Pengelolaan
                                    dan Dukungan Pemerintah:</span>
                                <ol style="list-style-type: circle;">
                                    <li><span style='line-height:107%;font-size:16px;'>Pelabuhan
                                            dikelola oleh Pemerintah Provinsi Jawa Barat dengan dukungan dari pemerintah
                                            pusat.</span></li>
                                    <li><span style='line-height:107%;font-size:16px;'>Ada
                                            rencana untuk memperluas fasilitas, termasuk pembangunan fasilitas penunjang
                                            seperti pengolahan ikan dan penyimpanan dingin</span><span
                                            style='line-height:107%;font-size:16px;'>.</span>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Dengan revitalisasi yang sedang
                                berlangsung, diharapkan pelabuhan ini dapat mendukung nelayan lokal lebih baik serta
                                meningkatkan kontribusi sektor perikanan terhadap ekonomi Kabupaten Cianjur.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span>
                        </p>
                        <div
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                            <ol start="100" style="margin-bottom:0cm;list-style-type: upper-roman;margin-left: 8px;">
                                <li
                                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;'>
                                    <strong><span style='line-height:107%;font-size:16px;'>Kondisi
                                            Armada Kapal Perikanan</span></strong>
                                </li>
                            </ol>
                        </div>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Berdasarkan data terbaru,
                                jumlah kapal perikanan yang terdaftar di Kabupaten Cianjur mencakup lebih dari 300 unit yang
                                terdiri dari berbagai jenis kapal, mulai dari perahu tanpa motor hingga kapal bermotor kecil
                                dan menengah. Kapal ini tersebar di sepanjang wilayah pesisir, terutama di kecamatan seperti
                                Cidaun, yang merupakan pusat kegiatan perikanan laut.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Mayoritas kapal digunakan untuk
                                perikanan tradisional dengan alat tangkap sederhana, seperti jaring insang, pancing, dan
                                bubu. Kondisi kapal cukup beragam; banyak yang memerlukan pemeliharaan atau peremajaan agar
                                bisa beroperasi dengan lebih efisien dan aman. Kapal-kapal ini juga disesuaikan dengan jenis
                                penangkapan ikan setempat, yang sebagian besar fokus pada sumber daya laut dangkal dan
                                berdekatan dengan pantai.</span>
                        </p>
                        <p><span style='font-size:16px;'>Upaya peningkatan keberlanjutan
                                dilakukan oleh pemerintah melalui dukungan kepada nelayan, seperti pemberian bantuan alat
                                tangkap dan program pelatihan. Namun, keterbatasan infrastruktur pelabuhan perikanan dan
                                sarana penunjang lainnya masih menjadi tantangan utama di daerah ini</span></p>
                    </div>

                    <div class="tab-pane fade" id="potensipariwisata" role="tabpanel" aria-labelledby="profile-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Kabupaten
                                Cianjur memiliki potensi pariwisata yang terus berkembang, dengan sejumlah tempat wisata
                                unggulan yang menarik wisatawan domestik maupun mancanegara. Berdasarkan data terkini,
                                Cianjur memiliki lebih dari 70 objek wisata yang tersebar di berbagai wilayah, mencakup
                                wisata alam, budaya, dan religi. Objek wisata populer seperti Kebun Raya Cibodas, Situs
                                Gunung Padang, dan Taman Bunga Nusantara menjadi daya tarik utama. Selain itu, potensi
                                wisata alam di kawasan pesisir dan pegunungan menambah keanekaragaman destinasi wisata di
                                daerah ini</span><span style='font-size:16px;line-height:107%;'>.</span>
                        </p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Jumlah
                                kunjungan wisatawan ke Kabupaten Cianjur juga menunjukkan peningkatan yang signifikan. Pada
                                tahun terakhir, tercatat sekitar 1,6 juta wisatawan berkunjung ke berbagai objek wisata di
                                Cianjur. Pemerintah daerah terus mendukung perkembangan sektor ini dengan memperbaiki
                                infrastruktur, seperti akses jalan ke lokasi wisata, dan meningkatkan promosi wisata,
                                termasuk di tingkat internasional</span><span
                                style='font-size:16px;line-height:107%;'>.</span>
                        </p>
                        <p><span style='font-size:16px;'>Sebagai langkah strategis,
                                pengembangan pariwisata di Cianjur juga melibatkan kerja sama dengan berbagai pihak,
                                termasuk investor dan masyarakat lokal, untuk menjaga keberlanjutan lingkungan sekaligus
                                mendukung peningkatan ekonomi. Dengan demikian, sektor pariwisata di Cianjur diproyeksikan
                                terus memberikan kontribusi signifikan terhadap pendapatan daerah dan kesejahteraan
                                masyarakat</span><span
                                style="font-size:16px;font-family:&quot;Times New Roman&quot;,serif;"></span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
