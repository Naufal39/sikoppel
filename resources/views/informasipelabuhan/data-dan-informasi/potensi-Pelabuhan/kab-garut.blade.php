@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Potensi dan Pemanfaatan Pelabuhan</h1>
            <h5 class="display-5 text-white mb-3 animated slideInDown">Kabupaten Garut</h5>
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
                    <p>ANALISA DATA DI KABUPATEN GARUT</p>
                    <p>Kabupaten Garut memiliki potensi pengelolaan pelabuhan yang dapat mendukung pengembangan ekonomi
                        wilayah, khususnya terkait hinterland dan ketersediaan potensi muatan. Wilayah hinterland Garut
                        mencakup sektor pertanian, peternakan, dan pariwisata yang berkembang. Komoditas utama seperti hasil
                        bumi (kopi, sayuran, dan buah-buahan), produk kerajinan, dan tekstil menjadi andalan yang berpotensi
                        diangkut melalui pelabuhan jika infrastruktur terkait dikembangkan lebih lanjut.</p>
                    <p>Dari sisi potensi muatan, Garut memiliki keunggulan pada distribusi hasil pertanian dan produk olahan
                        makanan lokal yang terkenal di pasar nasional maupun internasional. Namun, saat ini belum terdapat
                        pelabuhan besar yang beroperasi penuh di kabupaten ini. Fokus pengembangan pelabuhan di Garut masih
                        terkendala pada infrastruktur aksesibilitas yang memadai serta kesiapan fasilitas untuk mendukung
                        angkutan logistik.</p>
                    <p>Sebagai bagian dari strategi pembangunan, pemerintah Garut dan Jawa Barat telah mengkaji kebutuhan
                        investasi infrastruktur untuk membuka akses lebih luas ke pasar regional, seperti pelabuhan terdekat
                        di pantai selatan. Pengembangan pelabuhan di Garut akan sangat tergantung pada koordinasi lintas
                        sektoral dan dukungan dari pemerintah pusat untuk memastikan kesiapan regulasi dan permodalan</p>
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
                        <p><strong>&nbsp; &nbsp; &nbsp; A. Produksi Kelautan dan Perikanan</strong></p>
                        <p>Kabupaten Garut memiliki potensi besar di sektor perikanan dan kelautan, terutama pada budidaya
                            perikanan air tawar. Dengan luas lahan potensial mencapai 26.000 hektar, pemanfaatannya saat ini
                            baru sekitar 11.500 hektar (54,8%). Komoditas unggulan di sektor ini meliputi ikan mas, nila,
                            lele, gurame, dan udang galah. Produksi perikanan pada tahun 2018 mencapai 66.111 ton, yang
                            terdiri dari 38.348 ton dari kolam air tenang, 26.483 ton dari mina padi, dan 920 ton dari
                            tambak. Lebih dari 80% produksi didominasi oleh ikan mas dan nila, sementara sisanya berasal
                            dari lele, gurame, dan udang.</p>
                        <p>Dalam tiga tahun terakhir, produksi perikanan Kabupaten Garut menunjukkan tren positif, meskipun
                            angka pasti untuk tahun terkini masih memerlukan verifikasi lebih lanjut. Infrastruktur
                            pendukung sektor ini mencakup tiga Balai Budidaya Ikan (BBI) di Bayongbong, Talun, dan
                            Pameungpeuk, serta dua pasar ikan yang berlokasi di Tarogong Kaler dan Bayongbong.</p>
                        <p>Kabupaten Garut juga memiliki potensi perikanan laut yang dapat dikembangkan, terutama dengan
                            keberadaan sungai sepanjang 1.290 km dan rawa/danau seluas 258 hektar. Dari sisi perikanan laut,
                            data rinci produksi masih terbatas, namun daerah ini terus mengembangkan sistem tambak dan
                            perikanan budidaya lainnya untuk memenuhi permintaan domestik dan ekspor. Selain itu, Garis
                            pantai yang panjang memberikan peluang untuk pengembangan perikanan tangkap dan budi daya laut.
                            Komoditas utama yang memiliki nilai ekonomi tinggi meliputi lobster, udang, dan rumput laut.
                            Produksi lobster masih mengandalkan hasil tangkapan alami, dengan harga per kilogram berkisar
                            Rp400.000 hingga Rp500.000. Lokasi utama produksi lobster mencakup wilayah Pameungpeuk,
                            Caringin, Cibalong, dan Mekarmukti.</p>
                        <p>Komoditas utama dari sektor kelautan dan perikanan di Kabupaten Garut mencakup berbagai produk
                            yang bernilai ekonomi tinggi, terutama dari perikanan tangkap dan budi daya. Berikut adalah
                            beberapa komoditas unggulannya:</p>
                        <p><strong>&nbsp; &nbsp; &nbsp; 1.Lobster</strong></p>
                        <p>Lobster menjadi salah satu komoditas unggulan dengan harga tinggi, mencapai
                            Rp400.000&ndash;Rp500.000 per kilogram. Produksi lobster di Garut masih bergantung pada
                            tangkapan alami dari kawasan pesisir seperti Pameungpeuk, Caringin, dan Mekarmukti. Namun, belum
                            ada budi daya intensif untuk lobster karena habitatnya masih alami</p>
                        <p><strong>&nbsp; &nbsp; &nbsp; 2.Udang</strong></p>
                        <p>Udang menjadi salah satu komoditas penting dari perairan pantai selatan Garut. Kawasan ini
                            dikenal memiliki kualitas perairan yang mendukung pengembangan udang, baik dari hasil tangkap
                            maupun potensi budi daya di masa depan</p>
                        <p><strong>&nbsp; &nbsp; &nbsp; 3.Ikan Laut</strong></p>
                        <p>Perikanan tangkap menghasilkan berbagai jenis ikan laut seperti tuna, tongkol, dan cakalang.
                            Hasil tangkapan ini dipasarkan untuk konsumsi lokal maupun luar daerah, mendukung kebutuhan
                            protein masyarakat</p>
                        <p><strong>&nbsp; &nbsp; &nbsp; 4.Rumput Laut</strong></p>
                        <p>Rumput laut juga merupakan komoditas yang berpotensi untuk dikembangkan di pesisir selatan Garut.
                            Produk ini memiliki pasar yang luas, baik untuk bahan makanan maupun kebutuhan industri farmasi
                            dan kosmetik.</p>
                        <p>Pemerintah Kabupaten Garut terus mendorong peningkatan produksi melalui pelatihan, penyediaan
                            peralatan, dan pembukaan akses pasar yang lebih luas. Sentra perikanan juga diperkuat melalui
                            program kolaborasi dengan Kementerian Kelautan dan Perikanan untuk mengembangkan kawasan pesisir
                            secara berkelanjutan Selain itu, pengembangan sektor ini terus didukung oleh pemerintah daerah
                            melalui program-program seperti penyediaan fasilitas pakan ikan, pengolahan hasil perikanan,
                            serta pengembangan benih dan indukan berkualitas. Hal ini bertujuan untuk meningkatkan daya
                            saing produk perikanan Garut di pasar nasional maupun internasional.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp;<strong>B.</strong>&nbsp;<strong>Kondisi Pelabuhan Perikanan</strong>
                        </p>
                        <p>Kabupaten Garut memiliki beberapa pelabuhan perikanan yang penting untuk mendukung kegiatan
                            perikanan dan kelautan. Hingga saat ini, terdapat empat pelabuhan perikanan/pangkalan pendaratan
                            ikan (PPI) utama di Garut, yaitu PPI Santolo, PPI Rancabuaya, PPI Cilauteureun, dan PPI
                            Cimarimuara. Berikut adalah rincian kondisi terkini dari pelabuhan-pelabuhan tersebut:</p>
                        <ol>
                            <li><strong>PPI Santolo</strong></li>
                        </ol>
                        <p>Terletak di Pantai Santolo, Kecamatan Cikelet. Pelabuhan ini merupakan PPI tipe D, yang melayani
                            kapal kecil dengan kapasitas hingga 3 Gross Tonnage (GT). Pelabuhan ini menjadi pusat aktivitas
                            nelayan setempat, namun memiliki keterbatasan kapasitas untuk mendukung kapal yang lebih besar,
                            sehingga hasil tangkapan terbatas</p>
                        <p><strong>&nbsp; &nbsp; &nbsp; &nbsp;2.PPI Rancabuaya</strong></p>
                        <p>Berlokasi di Pantai Rancabuaya. Pelabuhan ini memiliki fungsi yang sama dengan PPI Santolo, namun
                            infrastrukturnya masih sederhana. Kapal-kapal yang berlabuh juga terbatas pada ukuran kecil,
                            sehingga upaya untuk meningkatkan kapasitas pelabuhan menjadi perhatian</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp;<strong>3.</strong>&nbsp;<strong>PPI Cilauteureun</strong></p>
                        <p>Terletak di Kecamatan Cikelet, muara Sungai Cilauteureun. PPI ini memiliki karakteristik muara
                            yang terlindung dari ombak besar, menjadikannya tempat yang relatif aman bagi kapal kecil.
                            Namun, pelabuhan ini menghadapi tantangan sedimentasi tinggi, yang dapat menghambat operasional.
                        </p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp;<strong>4.</strong>&nbsp;<strong>PPI Cimarimuara</strong></p>
                        <p>Salah satu pelabuhan lain di kawasan pesisir Garut yang melayani aktivitas perikanan lokal.
                            Informasi lebih rinci mengenai kondisi fisik dan infrastruktur pelabuhan ini masih terbatas.</p>
                        <p>Kapasitas terbatas dari pelabuhan-pelabuhan ini menjadi kendala utama dalam mendukung nelayan
                            untuk meningkatkan hasil tangkapan. Pelabuhan yang ada saat ini hanya mampu melayani kapal kecil
                            dengan peralatan tradisional, yang memengaruhi jarak dan hasil tangkapan. Himpunan Nelayan
                            Seluruh Indonesia (HNSI) telah mengusulkan pengembangan pelabuhan menjadi tipe C atau lebih
                            tinggi untuk memungkinkan kapal besar beroperasi, meningkatkan hasil tangkapan, dan mendukung
                            ekonomi lokal Pengembangan pelabuhan perikanan di Garut diharapkan dapat meningkatkan
                            kesejahteraan nelayan sekaligus memaksimalkan potensi sumber daya laut di wilayah ini.</p>
                    </div>

                    <div class="tab-pane fade" id="potensipariwisata" role="tabpanel" aria-labelledby="profile-tab">
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Pariwisata di Kabupaten Garut saat ini
                                menunjukkan perkembangan yang signifikan, baik dari segi jumlah destinasi maupun tingkat
                                kunjungan wisatawan. Garut memiliki lebih dari 20 destinasi wisata utama yang mencakup
                                wisata alam, budaya, dan edukasi. Beberapa lokasi wisata unggulan meliputi Situ Bagendit,
                                Situ Cangkuang, Pantai Rancabuaya, Gunung Papandayan, dan Taman Satwa Cikembulan. Selain
                                itu, wilayah ini juga terkenal dengan wisata kuliner khas seperti dodol Garut dan kerajinan
                                kulit.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Pada tahun 2024, jumlah kunjungan wisatawan
                                domestik mencapai 3.874.395 orang, sementara wisatawan mancanegara berjumlah 281 orang.
                                Meski angka ini cukup besar, kunjungan masih berada di bawah target karena kendala
                                infrastruktur seperti jalan yang kurang memadai dan penerangan jalan yang minim. Pemerintah
                                Kabupaten Garut terus berupaya memperbaiki akses menuju destinasi wisata untuk meningkatkan
                                kenyamanan dan keamanan wisatawan</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Dari segi pendapatan asli daerah (PAD), sektor
                                pariwisata di Garut juga menunjukkan peningkatan. Pada tahun 2023, PAD dari pariwisata
                                mencapai Rp 2,8 miliar, naik dari tahun sebelumnya. Upaya promosi dan pengelolaan destinasi
                                seperti Situ Bagendit dan Taman Satwa Cikembulan telah berhasil menarik banyak pengunjung,
                                terutama pada musim liburan, dengan kunjungan harian yang bisa mencapai 5.000 orang per hari
                                di beberapa lokasi</span><span style='font-size:16px;line-height:107%;'>&nbsp;Dengan potensi
                                besar dan dukungan pemerintah, sektor pariwisata di Kabupaten Garut diharapkan terus
                                berkembang, meningkatkan jumlah kunjungan wisatawan sekaligus memberikan dampak positif bagi
                                ekonomi lokal.</span></p>
                        <table style="width:100.0%;border:solid windowtext 1.0pt;">
                            <thead>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-size:16px;line-height:107%;'>Objek
                                                    Wisata</span></strong></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <strong><span style='font-size:16px;line-height:107%;'>2021 (Jumlah
                                                    Kunjungan)</span></strong></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <strong><span style='font-size:16px;line-height:107%;'>2022 (Jumlah
                                                    Kunjungan)</span></strong></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <strong><span style='font-size:16px;line-height:107%;'>2023 (Jumlah
                                                    Kunjungan)</span></strong></p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style='font-size:16px;line-height:107%;'>Kawah Kamojang</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>150,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>200,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>230,000</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style='font-size:16px;line-height:107%;'>Gunung Papandayan</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>250,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>350,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>420,000</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style='font-size:16px;line-height:107%;'>Pantai Santolo</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>120,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>180,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>210,000</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style='font-size:16px;line-height:107%;'>Pantai Sayang Heulang</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>80,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>130,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>160,000</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style='font-size:16px;line-height:107%;'>Situ Bagendit</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>100,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>140,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>170,000</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <span style='font-size:16px;line-height:107%;'>Taman Satwa Cikembulan</span>
                                        </p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>90,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>120,000</span></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <span style='font-size:16px;line-height:107%;'>140,000</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="width:23.0%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                            <strong><span style='font-size:16px;line-height:107%;'>Total
                                                    Kunjungan</span></strong></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <strong><span
                                                    style='font-size:16px;line-height:107%;'>1,040,000</span></strong></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <strong><span
                                                    style='font-size:16px;line-height:107%;'>1,820,000</span></strong></p>
                                    </td>
                                    <td
                                        style="width:25.12%;border:solid windowtext 1.0pt;padding:.75pt .75pt .75pt .75pt;height:1.0cm;">
                                        <p
                                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'>
                                            <strong><span
                                                    style='font-size:16px;line-height:107%;'>2,330,000</span></strong></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <strong><span style='font-size:16px;line-height:107%;'>Sumber Data:</span></strong></p>
                        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;line-height:     107%;'>Statistik Objek Daya Tarik Wisata oleh
                                    BPS Garut.</span></li>
                            <li
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                                <span style='font-size:16px;line-height:     107%;'>Laporan tahunan sektor pariwisata dari
                                    Dinas Pariwisata Kabupaten Garut</span></li>
                        </ul>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Berdasarkan data terkini, sektor pariwisata di
                                Kabupaten Garut menunjukkan pertumbuhan yang signifikan. Garut memiliki lebih dari 80 objek
                                wisata yang tersebar di seluruh wilayahnya, mencakup wisata alam, budaya, dan buatan.
                                Beberapa destinasi unggulan meliputi Kawah Kamojang, Pantai Santolo, Pantai Sayang Heulang,
                                serta wisata alam pegunungan di sekitar Gunung Papandayan.</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Dalam tiga tahun terakhir, jumlah kunjungan
                                wisatawan terus meningkat, meskipun sempat mengalami penurunan akibat pandemi COVID-19 pada
                                2020. Pada 2021, kunjungan mulai meningkat dengan total lebih dari 1,2 juta wisatawan,
                                sementara pada 2022, angkanya naik signifikan hingga mencapai lebih dari 2 juta wisatawan.
                                Tren ini terus berlanjut pada 2023 dengan peningkatan yang diperkirakan mencapai lebih dari
                                15% dibandingkan tahun sebelumnya</span></p>
                        <p
                            style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:justify;'>
                            <span style='font-size:16px;line-height:107%;'>Garut juga fokus mengembangkan fasilitas wisata
                                ramah lingkungan dan memperkuat promosi digital untuk menarik wisatawan domestik maupun
                                internasional. Ketersediaan data menunjukkan distribusi kunjungan cukup merata di berbagai
                                objek wisata utama, terutama pada destinasi yang menawarkan pengalaman unik seperti wisata
                                kawah, pemandian air panas, dan pantai.</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
