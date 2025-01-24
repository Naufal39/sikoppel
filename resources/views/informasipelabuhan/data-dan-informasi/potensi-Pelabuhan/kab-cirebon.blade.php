@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Potensi dan Pemanfaatan Pelabuhan</h1>
            <h5 class="display-5 text-white mb-3 animated slideInDown">Kabupaten Cirebon</h5>
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
                    <p>ANALISA DATA DI KABUPATEN CIREBON</p>
                    <p></p>
                </div>
                <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#potensiperikanan" type="button" role="tab" aria-controls="home"
                            aria-selected="true">POTENSI PERIKANAN DAN KELAUTAN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#potensipariwisata"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">POTENSI
                            PARIWISATA</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#potensiperindustrian" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">POTENSI PERINDUSTRIAN DAN PERDAGANGAN</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent" style="text-align: justify; color:black">
                    <div class="tab-pane fade show active" id="potensiperikanan" role="tabpanel" aria-labelledby="home-tab"
                        style="color:black;">
                        <p>Kondisi perikanan dan kelautan di Kabupaten Cirebon menunjukkan potensi besar yang terus
                            dikembangkan melalui berbagai program dan inovasi. Berikut adalah penjabaran lengkap mengenai
                            sektor ini:</p>
                        <ol>
                            <li><strong> Perikanan Tangkap</strong></li>
                        </ol>
                        <p>Kabupaten Cirebon memiliki garis pantai sepanjang 79 km dengan lebih dari 17.900 nelayan.
                            Perikanan tangkap merupakan salah satu sektor utama, dengan komoditas seperti rajungan, udang,
                            dan ikan-ikan ekonomis lainnya yang menjadi andalan. Untuk mendukung keberlanjutan, pemerintah
                            setempat telah menyalurkan alat tangkap ramah lingkungan seperti <em>bubu rajungan</em> dan
                            <em>trammel net</em>. Langkah ini bertujuan untuk melestarikan ekosistem laut dan meningkatkan
                            hasil tangkapan.</p>
                        <ol start="2">
                            <li><strong> Perikanan Budidaya</strong></li>
                        </ol>
                        <p>Budidaya ikan di tambak juga berkembang pesat, terutama di wilayah pesisir seperti Desa
                            Jatimerta. Program budi daya ikan bandeng yang berkelanjutan menjadi unggulan, dengan bantuan
                            benih, pakan, dan pupuk yang diberikan kepada kelompok pembudidaya. Selain meningkatkan hasil
                            produksi, program ini juga menjadi solusi untuk memulihkan ekosistem perairan. Hasil panen
                            bandeng berukuran besar di kawasan ini mampu meningkatkan nilai jual ikan secara signifikan.</p>
                        <ol start="3">
                            <li><strong> Dukungan Infrastruktur dan Program</strong></li>
                        </ol>
                        <p>Pemerintah Kabupaten Cirebon melalui Dinas Ketahanan Pangan dan Perikanan (DKPP) aktif mendukung
                            nelayan dengan program-program inovatif. Salah satunya adalah pengembangan "fish apartment,"
                            yang bertujuan menciptakan habitat ikan di perairan dan mencegah eksploitasi berlebihan. Selain
                            itu, penggunaan Dana Alokasi Khusus (DAK) untuk memenuhi kebutuhan alat tangkap nelayan
                            mencerminkan pendekatan partisipatif yang berbasis kebutuhan komunitas lokal.</p>
                        <ol start="4">
                            <li><strong> Tantangan yang Dihadapi</strong></li>
                        </ol>
                        <p>Meskipun potensi besar, sektor ini menghadapi tantangan seperti penggunaan alat tangkap tidak
                            ramah lingkungan oleh sebagian nelayan, yang dapat merusak ekosistem laut. Selain itu,
                            keterbatasan teknologi dan infrastruktur modern untuk mengelola hasil tangkapan secara efisien
                            juga menjadi kendala. Dukungan lebih lanjut diperlukan untuk meningkatkan kapasitas produksi dan
                            distribusi.</p>
                        <ol start="5">
                            <li><strong> Nilai Ekonomi</strong></li>
                        </ol>
                        <p>Produksi perikanan tangkap dan budidaya memberikan kontribusi ekonomi yang signifikan. Data
                            menunjukkan bahwa sektor ini terus tumbuh dengan meningkatnya hasil tangkapan dan budidaya di
                            wilayah tersebut. Perikanan di Cirebon tidak hanya memenuhi kebutuhan lokal tetapi juga
                            mendukung pasar regional.</p>
                        <p>Kabupaten Cirebon memiliki potensi besar di sektor perikanan dan kelautan. Dengan garis pantai
                            yang luas, keanekaragaman hayati, dan inovasi dalam pengelolaan sumber daya laut, sektor ini
                            berpeluang menjadi pilar ekonomi yang berkelanjutan. Namun, keberhasilan ini memerlukan sinergi
                            antara pemerintah, masyarakat, dan sektor swasta untuk memastikan keberlanjutan ekosistem laut
                            dan peningkatan kesejahteraan nelayan. Program ramah lingkungan dan partisipasi aktif dari
                            komunitas nelayan menjadi kunci menuju pengelolaan yang lebih baik.</p>
                        <p>Di Kabupaten Cirebon, terdapat Pelabuhan Perikanan Pantai (PPP) Bondet yang merupakan salah satu
                            pelabuhan perikanan utama di wilayah ini. Pelabuhan ini terletak di Kecamatan Gunung Jati dan
                            difungsikan untuk mendukung aktivitas perikanan tangkap skala kecil hingga menengah. PPP Bondet
                            memiliki fasilitas dasar seperti tempat pelelangan ikan (TPI) dan area pendaratan ikan untuk
                            mendukung nelayan setempat. Pelabuhan ini berperan penting dalam mengelola hasil tangkapan dari
                            pesisir Kabupaten Cirebon yang terkenal dengan potensi rajungan dan ikan ekonomis lainnya</p>
                        <p>Selain <strong>Pelabuhan Perikanan Pantai (PPP) Bondet</strong>, Kabupaten Cirebon juga memiliki
                            beberapa pelabuhan perikanan lain yang mendukung aktivitas nelayan lokal:</p>
                        <ol>
                            <li><strong> Pelabuhan Perikanan Pantai (PPP) Gebang</strong></li>
                        </ol>
                        <ul>
                            <li><strong>Lokasi</strong>: Desa Gebang Mekar, Kecamatan Gebang.</li>
                            <li><strong>Kondisi</strong>: Area pelabuhan ini menjadi pusat kegiatan nelayan di bagian timur
                                Kabupaten Cirebon. Rencana pengembangan sebagai kawasan wisata bahari juga mencakup
                                revitalisasi fasilitas perikanan seperti tempat pelelangan ikan (TPI), pasar ikan, dan
                                fasilitas pendukung lainnya. PPP Gebang memiliki potensi besar untuk dikembangkan, mengingat
                                posisinya yang strategis di dekat jalur Pantura.</li>
                        </ul>
                        <ol start="2">
                            <li><strong> Tempat Pendaratan Ikan (TPI) Citemu</strong></li>
                        </ol>
                        <ul>
                            <li><strong>Lokasi</strong>: Kecamatan Mundu.</li>
                            <li><strong>Kondisi</strong>: TPI ini melayani pendaratan ikan dari nelayan tradisional dan
                                menjadi salah satu pusat distribusi hasil laut di sekitar Kecamatan Mundu. Infrastruktur di
                                lokasi ini masih sederhana, tetapi aktivitas perikanan tetap berjalan dengan baik.</li>
                        </ul>
                        <ol start="3">
                            <li><strong> Pelabuhan Perikanan Desa Bungko</strong></li>
                        </ol>
                        <ul>
                            <li><strong>Lokasi</strong>: Kecamatan Kapetakan.</li>
                            <li><strong>Kondisi</strong>: Desa Bungko dikenal sebagai salah satu sentra nelayan di Kabupaten
                                Cirebon. Meskipun belum menjadi pelabuhan besar, daerah ini memiliki TPI kecil yang melayani
                                kebutuhan nelayan setempat. Beberapa komoditas unggulan seperti rajungan banyak diproduksi
                                dari daerah ini.</li>
                        </ul>
                        <p>Kawasan pesisir Kabupaten Cirebon menawarkan potensi perikanan yang besar dengan aktivitas yang
                            tersebar di berbagai lokasi. Namun, sebagian besar pelabuhan dan TPI menghadapi kendala seperti:
                        </p>
                        <ul>
                            <li><strong>Keterbatasan Infrastruktur</strong>: Jalan akses, fasilitas cold storage, dan
                                dermaga masih memerlukan pengembangan.</li>
                            <li><strong>Minimnya Investasi</strong>: Pelabuhan di Kabupaten Cirebon cenderung bergantung
                                pada usaha tradisional tanpa dukungan investasi besar dari pemerintah atau swasta.</li>
                        </ul>
                        <p>Dengan rencana pengembangan yang lebih strategis, seperti integrasi dengan kawasan wisata bahari
                            di Gebang, pelabuhan-pelabuhan ini dapat meningkatkan daya saing sektor perikanan lokal dan
                            memberikan dampak ekonomi yang lebih besar bagi masyarakat pesisir.</p>
                        <p>Produksi perikanan di Kabupaten Cirebon mencakup dua jenis utama, yaitu <strong>perikanan
                                tangkap</strong> dan <strong>perikanan budidaya</strong>, yang keduanya mengalami fluktuasi
                            selama lima tahun terakhir.</p>
                        <ol>
                            <li><strong>Produksi Perikanan Tangkap</strong></li>
                        </ol>
                        <p>Produksi perikanan tangkap di Kabupaten Cirebon mencapai rata-rata sekitar 6.000&ndash;7.000 ton
                            per tahun. Pusat utama aktivitas ini berada di berbagai tempat pelelangan ikan (TPI) seperti di
                            Desa Bungko dan Gebang. Komoditas utama hasil perikanan tangkap meliputi rajungan, ikan layang,
                            dan ikan kembung. Rajungan menjadi produk unggulan karena memiliki nilai ekonomi tinggi dan
                            banyak diekspor ke pasar internasional.</p>
                        <ol>
                            <li><strong>Produksi Perikanan Budidaya</strong></li>
                        </ol>
                        <p>Budidaya ikan dan udang di tambak juga berkembang pesat, dengan rata-rata produksi tahunan
                            mencapai lebih dari 20.000 ton. Budidaya ini didominasi oleh ikan bandeng dan udang vaname.
                            Bandeng menjadi salah satu produk unggulan karena tingginya permintaan domestik, sementara udang
                            vaname diekspor ke berbagai negara.</p>
                        <p>Produksi budidaya laut juga berkontribusi signifikan, terutama untuk komoditas seperti kerang
                            hijau dan ikan bawal bintang. Pada tahun 2021, produksi dari budidaya tambak mencapai 18.495
                            ton, dengan kontribusi besar dari Kecamatan Gebang dan Mundu.</p>
                        <ol>
                            <li><strong>Produk Unggulan Perikanan</strong></li>
                        </ol>
                        <ul>
                            <li><strong>Rajungan</strong>: Diprioritaskan untuk ekspor, terutama ke Amerika Serikat dan
                                Eropa. Produk rajungan dari Cirebon terkenal berkualitas tinggi.</li>
                            <li><strong>Udang Vaname</strong>: Salah satu komoditas unggulan dengan pasar domestik dan
                                internasional yang stabil.</li>
                            <li><strong>Bandeng</strong>: Banyak dipasarkan untuk kebutuhan lokal dan regional.</li>
                            <li><strong>Kerang Hijau</strong>: Mulai menjadi ikon perikanan dari kawasan pesisir Kabupaten
                                Cirebon.</li>
                        </ul>
                        <ol>
                            <li><strong>Tantangan dan Peluang</strong></li>
                        </ol>
                        <ul>
                            <li><strong>Tantangan</strong>:</li>
                            <ul>
                                <li>Infrastruktur pendukung seperti cold storage masih minim.</li>
                                <li>Keterbatasan teknologi di sektor perikanan budidaya menyebabkan potensi belum tergarap
                                    maksimal.</li>
                            </ul>
                            <li><strong>Peluang</strong>:</li>
                            <ul>
                                <li>Potensi pengembangan hilirisasi produk perikanan, seperti fillet bandeng, nugget ikan,
                                    dan produk berbasis udang, memberikan nilai tambah ekonomi.</li>
                                <li>Dukungan program pemerintah untuk penggunaan alat tangkap ramah lingkungan meningkatkan
                                    keberlanjutan sumber daya laut.</li>
                            </ul>
                        </ul>
                        <p>Kabupaten Cirebon memiliki potensi besar di sektor perikanan, baik tangkap maupun budidaya.
                            Dengan peningkatan investasi, perbaikan infrastruktur, dan penerapan teknologi modern, sektor
                            ini dapat menjadi pilar utama dalam mendorong pertumbuhan ekonomi lokal dan meningkatkan
                            kesejahteraan masyarakat pesisir.</p>
                    </div>

                    <div class="tab-pane fade" id="potensipariwisata" role="tabpanel" aria-labelledby="profile-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Kondisi pariwisata di Kabupaten Cirebon saat ini masih menghadapi
                                berbagai tantangan meskipun memiliki potensi besar, terutama dalam wisata religi, budaya,
                                dan sejarah. Salah satu daya tarik utama adalah Makam Sunan Gunung Jati, yang tetap menjadi
                                tujuan favorit wisatawan. Selain itu, destinasi seperti Kampung Seni Gegesik, Kawasan Batik
                                Trusmi, dan Batu Lawang menawarkan pengalaman unik bagi pengunjung</span><span
                                style='font-size:16px;'>.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Namun, sektor ini masih terkendala infrastruktur yang kurang
                                memadai, seperti jalan rusak di kawasan wisata, minimnya penerangan jalan umum, dan
                                fasilitas pendukung yang belum optimal. Masalah ini terutama dirasakan di area seperti
                                Kawasan Batik Trusmi, yang seharusnya menjadi salah satu unggulan</span><span
                                style='font-size:16px;'>.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Meskipun Bandara Internasional Jawa Barat (BIJB) di Majalengka
                                telah beroperasi, dampaknya terhadap pariwisata Cirebon belum signifikan. Pemerintah
                                Kabupaten Cirebon sedang berupaya untuk memaksimalkan promosi, meningkatkan kualitas
                                destinasi, serta memanfaatkan peluang dari keberadaan BIJB untuk mendongkrak jumlah
                                kunjungan wisata</span><span style='font-size:16px;'>.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Pemerintah daerah juga memprioritaskan program pengembangan wisata
                                lokal untuk mendorong pertumbuhan ekonomi melalui UMKM dan sektor terkait lainnya. Dengan
                                pembenahan infrastruktur dan promosi yang lebih gencar, pariwisata diharapkan dapat menjadi
                                penggerak ekonomi yang lebih kuat di masa depan</span><span style='font-size:16px;'>.</span>
                        </p>
                        <table style="border: none;width:100.0%;border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <td
                                        style="width: 9.62%;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:11px;color:black;'>NO.</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:11px;color:black;'>KABUPATEN</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:11px;color:black;'>JENIS WISATA</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:11px;color:black;'>NAMA TEMPAT</span></strong>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:11px;color:black;'>TAHUN</span></strong></p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA KULINER</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KAMPUNG SABIN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>TALAGA LANGIT</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>3</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>OBYEK SUNAN GUNUNG JATI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>4</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>SYEK MAGELUNG SAKTI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>5</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>MBAH KUWU SANGKAN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>6</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BANYU PANAS</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>7</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA CAGAR ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BELAWA</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>8</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUYUT TRUSMI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>9</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>NYIMAS GANDASARI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>10</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>SIWALK SETU PATOK</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>11</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>CIMANDUNG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>12</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA BELANJA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>PASAR BATIK TRUSMI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>13</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BATU LAWANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>14</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>MANGROVE CAPLOK BARONG AMBULU</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>15</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WATERBOOM SPLASH JUNGLE APITA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>16</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG KIKI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>17</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WATERPARK TAMAN KOTA CIPERNA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>18</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>PETILASAN SUNAN BONANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>19</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SEGAR SEJATI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>20</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG HEGAR</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>21</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SIMPATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>22</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SERIBU WAJAN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>23</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG TIRTA MAS
                                                GEMILANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>24</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG ZAM ZAM</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>25</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG JEMPOL WATERBOOM</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>26</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA KULINER</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KAMPUNG SABIN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>27</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>TALAGA LANGIT</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>28</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>OBYEK SUNAN GUNUNG JATI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>29</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>SYEK MAGELUNG SAKTI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>30</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>MBAH KUWU SANGKAN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>31</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BANYU PANAS</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>32</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA CAGAR ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BELAWA</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>33</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUYUT TRUSMI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>34</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>NYIMAS GANDASARI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>35</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>SIWALK SETU PATOK</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>36</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>CIMANDUNG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>37</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA BELANJA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>PASAR BATIK TRUSMI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>38</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BATU LAWANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>39</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>EKOWISATA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>MANGROVE CAPLOK BARONG AMBULU</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>40</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WATERBOOM SPLASH JUNGLE APITA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>41</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG KIKI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>42</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WATERPARK TAMAN KOTA CIPERNA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>43</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZIARAH</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>PETILASAN SUNAN BONANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>44</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SEGAR SEJATI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>45</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG HEGAR</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>46</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SIMPATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>47</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SERIBU WAJAN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>48</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG TIRTA MAS
                                                GEMILANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>49</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG ZAM ZAM</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>50</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG JEMPOL WATERBOOM</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>51</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUATAN</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KAMPUNG SABIN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>52</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>TALAGA LANGIT</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>53</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>OBYEK SUNAN GUNUNG JATI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>54</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>SYEK MAGELUNG SAKTI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>55</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>MBAH KUWU SANGKAN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>56</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BANYU PANAS</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>57</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>CIKUYA BELAWA</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>58</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUYUT TRUSMI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>59</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>NYIMAS GANDASARI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>60</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>TAMAN WISATA SIWALK SETU PATOK</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>61</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>CIMANDUNG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>62</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUATAN</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>PASAR BATIK TRUSMI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>63</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BATU LAWANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>64</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>MANGROVE CAPLOK BARONG AMBULU</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>65</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM/WB</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WATERBOOM SPLASH JUNGLE APITA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>66</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG KIKI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>67</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM/WB</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WATERPARK TAMAN KOTA CIPERNA</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>68</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUDAYA</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>PETILASAN SUNAN BONANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>69</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SEGAR SEJATI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>70</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG HEGAR</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>71</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SIMPATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>72</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG SERIBU WAJAN</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>73</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM/WB</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG TIRTA MAS
                                                GEMILANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>74</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG ZAM ZAM</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>75</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM/WB</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KOLAM RENANG JEMPOL WATERBOOM</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>76</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>WISATA ZONA MANGROVE KASIH
                                                SAYANG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>77</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUKIT MANEUNGTEUNG</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>78</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>BUATAN</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>TAMAN RADEN BENADI</span></p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 9.62%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>79</span></p>
                                    </td>
                                    <td
                                        style="width: 21.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 21.08%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>KM/WB</span></p>
                                    </td>
                                    <td
                                        style="width: 38.32%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:11px;color:black;'>GARDEN CIBERES WISATA ALAM</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width: 9.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:11px;color:black;'>2023</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style='font-size:16px;'>&nbsp;</span></strong></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style='font-size:16px;'>Tren Kunjungan Wisatawan (2022-2023)</span></strong></p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Wisatawan Mancanegara</span></strong><span
                                    style='font-size:16px;'>: Hampir tidak ada kunjungan signifikan selama periode ini.
                                    Hanya 10 kunjungan tercatat sepanjang 2022 (terutama pada bulan April dan Desember) dan
                                    nol kunjungan sepanjang 2023. Hal ini menunjukkan minimnya daya tarik bagi wisatawan
                                    internasional atau dampak dari kondisi tertentu seperti pasca-pandemi.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Wisatawan Nusantara</span></strong><span
                                    style='font-size:16px;'>:</span>
                                <ul style="margin-bottom:0cm;margin-top:0cm;" type="circle">
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>2022: Jumlah kunjungan cukup
                                            fluktuatif, dengan puncak pada bulan Mei (78.529 pengunjung) dan Oktober (61.171
                                            pengunjung).</span></li>
                                    <li
                                        style="margin-top: 0cm;margin-right: 0cm;margin-bottom: 8pt;font-size:15px;font-family: Aptos, sans-serif;text-align: justify;">
                                        <span style='font-size:16px;line-height:      107%;'>2023: Kunjungan lebih stabil,
                                            dengan kenaikan tajam pada bulan April (98.172 pengunjung) dan Desember (85.741
                                            pengunjung).</span></li>
                                </ul>
                            </li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span></p>
                        <table style="border: none;width:100.0%;border-collapse:collapse;">
                            <tbody>
                                <tr>
                                    <td
                                        style="width: 12.56%;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:13px;color:black;'>TAHUN</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <strong><span style='font-size:13px;color:black;'>BULAN</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <strong><span style='font-size:13px;color:black;'>WISATAWAN
                                                    MANCANEGARA</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <strong><span style='font-size:13px;color:black;'>WISATAWAN
                                                    NUSANTARA</span></strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>JANUARI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>56.497</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>FEBRUARI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>29.931</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>MARET</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>27.726</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>APRIL</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>9</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>10.046</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>MEI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>78.529</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>JUNI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>26.676</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>JULI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>25.761</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>AGUSTUS</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>27.460</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>SEPTEMBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>29.612</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>OKTOBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>61.171</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>NOVEMBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>25.247</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2022</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>DESEMBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>36.241</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>JANUARI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>49.784</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>FEBRUARI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>38.066</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>MARET</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>25.127</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>APRIL</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>98.172</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>MEI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>71.682</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>JUNI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>75.426</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>JULI</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>62.795</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>AGUSTUS</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>41.867</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>SEPTEMBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>38.348</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>OKTOBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>46.908</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>NOVEMBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>49.993</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 12.56%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>2023</span></p>
                                    </td>
                                    <td
                                        style="width: 18.84%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:13px;color:black;'>DESEMBER</span></p>
                                    </td>
                                    <td
                                        style="width: 36.38%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 32.2%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:13px;color:black;'>85.741</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span></p>
                    </div>

                    <div class="tab-pane fade" id="potensiperindustrian" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Kabupaten Cirebon menunjukkan keberagaman pada produk unggulan
                                yang diproduksi secara lokal, yang terdiri dari berbagai kategori seperti kerajinan rotan,
                                batik, makanan ringan, mebel kayu, dan batu alam. Setiap produk memiliki volume produksi
                                yang signifikan, dengan data tahunan yang menggambarkan tren produksi sebagai
                                berikut:</span></p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Kerajinan Rotan</span></strong><span
                                    style='font-size:16px;'>: Merupakan produk unggulan utama dengan produksi yang
                                    mencapai <strong>120.052 ton pada tahun 2022</strong>, meskipun tidak semua nilai
                                    produksi tercatat dalam data.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Batik</span></strong><span
                                    style='font-size:16px;line-height:     107%;'>: Memiliki nilai strategis baik dari
                                    aspek budaya maupun ekonomi, dengan produksi mencapai <strong>42.442 kodi pada
                                        2022</strong>. Produk ini juga mendukung citra Kabupaten Cirebon sebagai salah satu
                                    sentra batik nasional.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Produk Makanan Ringan dan Roti</span></strong><span
                                    style='font-size:16px;'>: Dengan produksi yang tinggi (<strong>46.595 ton pada
                                        2022</strong>), sektor ini berpotensi besar mendukung industri pariwisata dengan
                                    penjualan kepada wisatawan.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Meubel dan Kerajinan Kayu</span></strong><span
                                    style='font-size:16px;'>: Produksi yang konsisten setiap tahun, seperti
                                    <strong>1.188.351 pcs meubel kayu pada 2022</strong>, menunjukkan sektor ini tetap
                                    menjadi andalan untuk ekspor dan pasar domestik.</span></li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Namun, sebagian besar data tahun 2022 tidak mencatat nilai
                                produksi, yang dapat menjadi kendala dalam memahami kontribusi ekonomi langsung dari
                                masing-masing sektor. Hal ini mencerminkan tantangan dalam pengelolaan data ekonomi secara
                                komprehensif.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Sementara untuk UMKM di Kabupaten Cirebon menunjukkan fokus pada
                                sektor makanan, perdagangan, dan jasa. Data tahun 2021-2022 menunjukkan:</span></p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Makanan</span></strong><span
                                    style='font-size:16px;line-height:     107%;'>: Merupakan sektor dominan dengan
                                    <strong>18.069 unit usaha</strong>, menandakan pentingnya sektor ini dalam mendukung
                                    perekonomian lokal.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Perdagangan dan Jasa</span></strong><span
                                    style='font-size:16px;'>: Masing-masing menyumbang <strong>10.113 unit dan 1.379
                                        unit</strong>, menunjukkan adanya ekosistem ekonomi yang seimbang antara produksi
                                    dan distribusi.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <strong><span style='font-size:16px;'>Batik dan Rotan</span></strong><span
                                    style='font-size:16px;'>: Dengan masing-masing <strong>400 unit dan 18 unit
                                        usaha</strong>, sektor ini sangat penting bagi pelestarian budaya dan nilai tambah
                                    lokal, meskipun jumlah unit usaha relatif kecil dibandingkan sektor makanan.</span></li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Keberadaan UMKM di berbagai sektor ini menjadi tulang punggung
                                ekonomi daerah, dengan fokus pada pelestarian budaya dan pemanfaatan sumber daya lokal
                                seperti rotan dan batik.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>Kabupaten Cirebon memiliki potensi besar di sektor produksi
                                lokal dan UMKM, terutama melalui kerajinan rotan, batik, dan makanan ringan. Namun,
                                tantangan dalam pengelolaan data dan diversifikasi sektor perlu segera diatasi. Dengan
                                pengembangan strategi yang fokus pada inovasi dan infrastruktur pendukung, Kabupaten Cirebon
                                dapat memperkuat posisi ekonominya sebagai pusat produksi dan budaya di tingkat nasional
                                maupun internasional.</span></p>
                        <p><span style='font-size:16px;'><br>&nbsp;</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                            <strong><span style='font-size:16px;'>Data Produksi dan Nilai Produksi untuk Produk Unggulan
                                    di Kabupaten Cirebon</span></strong></p>
                        <table style="border: none; width: 100%; border-collapse: collapse; margin-left: calc(0%);">
                            <thead>
                                <tr>
                                    <td
                                        style="width: 5.12%; border: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: top; text-align: center;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>No.</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Nama Kabupaten</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Unit Usaha</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Produksi</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Satuan</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Nilai Produksi</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Satuan</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Tahun</span></strong></p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL/ KERAJINAN ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>112.633</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL KAYU</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.113.523</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>3</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>EMPING MELINJO</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.154</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>4</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTI DAN MAKANAN RINGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>33.433</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>5</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATU ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>5.170.777</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>M2</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>6</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>SANDAL KARET</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>37.720</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>7</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.024</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>8</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONVEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>6.445.882</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>9</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN KULIT KERANG</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>332.000</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2018</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL/ KERAJINAN ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>184.612</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>11</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL KAYU</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.754.242</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>12</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>EMPING MELINJO</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.154</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>13</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTI DAN MAKANAN RINGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>215.169</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>14</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATU ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>5.170.777</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>M2</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>15</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>SANDAL KARET</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>37.720</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>16</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.033</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>17</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONVEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10.384.184</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>18</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN KULIT KERANG</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>332.000</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2019</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>19</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL/ KERAJINAN ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>185.862</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2.314.593.630</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>20</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL KAYU</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.783.395</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>393.207.251</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>21</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>EMPING MELINJO</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.154</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>23.122.114</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>22</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTI DAN MAKANAN RINGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>217.130</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>408.751.343</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>23</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATU ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>5.170.777</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>M2</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>182.813.030</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>24</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>SANDAL KARET</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>50.561</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>4.455.850</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>25</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.104</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>84.039.409</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>26</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONVEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10.683.576</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.234.864</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>27</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN KULIT KERANG</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>332.000</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>12.855.000</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>28</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL/ KERAJINAN ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>118.278</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2.349.312.534</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>29</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL KAYU</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.170.789</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>394.386.873</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>30</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>EMPING MELINJO</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.159</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>23.468.946</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>31</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTI DAN MAKANAN RINGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>39.156</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>414.882.613</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>32</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATU ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>4.170.755</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>M2</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>172.513.020</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>33</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>SANDAL KARET</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>50.561</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>4.455.850</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>34</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.272</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>85.300.000</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>35</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONVEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10.843.830</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.361.569</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>36</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN KULIT KERANG</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>332.000</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>12.855.000</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>37</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL/ KERAJINAN ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>120.052</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>38</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEUL KAYU</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.188.351</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>39</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>EMPING MELINJO</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.163</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>40</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTI DAN MAKANAN RINGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>46.595</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>TON</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>41</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATU ALAM</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>46.595</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>M2</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>SANDAL KARET</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>50.561</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>43</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>42.442</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KODI</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>44</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONVEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>11.049.862</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 5.12%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>45</span></p>
                                    </td>
                                    <td
                                        style="width: 18.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 23.94%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN KULIT KERANG</span></p>
                                    </td>
                                    <td
                                        style="width: 11.14%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>332.000</span></p>
                                    </td>
                                    <td
                                        style="width: 8.44%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PCS</span></p>
                                    </td>
                                    <td
                                        style="width: 13.7%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 10.72%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>RIBU RUPIAH</span></p>
                                    </td>
                                    <td
                                        style="width: 8.02%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                            <strong><span style='font-size:16px;'>Data Jumlah UMKM berdasarkan Jenis Usaha di Kabupaten
                                    Cirebon</span></strong></p>
                        <table style="border: none;width:100.0%;border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>No</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Nama Kabupaten</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Jenis Usaha</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Jumlah UMKM</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 15pt;vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>Satuan</span></strong></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: top;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;line-height:normal;'>
                                            <strong><span style='font-size:16px;'>tahun</span></strong></p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MAKANAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>18.069</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PERDAGANGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10.113</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>3</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONFEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>737</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>4</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>JASA</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.379</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>5</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PERTANIAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>48</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>6</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PERIKANAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>7</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PETERNAKAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>11</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>8</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>400</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>9</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>18</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEL</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>12</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>11</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>GERABAH</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>12</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>88</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>13</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>OLAHAN BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>14</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>OLAHAN PERTANIAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>3</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2021</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>15</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MAKANAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>18.069</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>16</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PERDAGANGAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>10.113</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>17</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KONFEKSI</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>737</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>18</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>JASA</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1.379</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>19</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PERTANIAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>48</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>20</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PERIKANAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>21</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>PETERNAKAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>11</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>22</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BATIK</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>400</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>23</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>ROTAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>18</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>24</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>MEUBEL</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>12</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>25</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>GERABAH</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>0</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>26</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KERAJINAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>88</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>27</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>OLAHAN BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>1</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 6.2884%; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>28</span></p>
                                    </td>
                                    <td
                                        style="width: 26.78%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>KABUPATEN CIREBON</span></p>
                                    </td>
                                    <td
                                        style="width: 27.24%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>OLAHAN PERTANIAN</span></p>
                                    </td>
                                    <td
                                        style="width: 17.3%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>3</span></p>
                                    </td>
                                    <td
                                        style="width: 11.92%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 15pt;vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;line-height:  normal;'>
                                            <span style='font-size:16px;color:black;'>BUAH</span></p>
                                    </td>
                                    <td
                                        style="width: 10.4294%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 15pt; vertical-align: bottom;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:right;line-height:normal;'>
                                            <span style='font-size:16px;color:black;'>2022</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;'>&nbsp;</span></p>
                        <p><span style='font-size:16px;'><br>&nbsp;</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
