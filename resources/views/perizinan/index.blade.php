@extends('layouts.main')

@section('isihalaman')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Perizinan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Perizinan</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="d-flex align-items-start mx-5 my-5">
  <div class="overflow-auto" style="height: 100%; width: 650px;">
    <div class="nav flex-column nav-pills me-3 border border-3 border-secondary" style="font-size:12px" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link border border-1 border-secondary" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">A.	STANDAR USAHA TALLY MANDIRI</button>
      <button class="nav-link border border-1 border-secondary" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">B.	STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL</button>
      <button class="nav-link border border-1 border-secondary" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">C.	STANDAR USAHA PERANTARA JUAL BELI ATAU SEWA KAPAL</button>
      <button class="nav-link border border-1 border-secondary" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">D.	STANDAR USAHA SALVAGE DAN ATAU PEKERJAAN BAWAH AIR</button>
      <button class="nav-link border border-1 border-secondary" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
      <button class="nav-link border border-1 border-secondary" id="v-pills-perizinan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-perizinan" type="button" role="tab" aria-controls="v-pills-perizinan" aria-selected="false">Perizinan</button>
    </div>
  </div>  


    <div style="max-width: 80%" class="tab-content" id="v-pills-tabContent">
      {{-- STANDAR USAHA TALLY MANDIRI --}}
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
        <dl class="row" style="color: darkslategray;">
          <h3 class="mb-4">A.	STANDAR USAHA TALLY MANDIRI</h3>
            <dt class="col-sm-3 text-truncate">Persyaratan Umum</dt>
            <dd class="col-sm-9">
              <ol type="a">
                <li style="margin-bottom: 0%">Persyaratan yang disesuaikan dengan ketentuan Lembaga OSS;</li>
                <li style="margin-bottom: 0%">Memiliki bukti kepemilikan tempat usaha/sewa minimal selama 2 (dua) tahun, peralatan kantor, sarana dan prasarana internet, serta peralatan keselamatan;</li>
                <li>Durasi waktu pemenuhan perizinan berusaha sesuai dengan ketentuan lembaga OSS.</li>
              </ol>
            </dd>
            
              <dt class="col-sm-3 text-truncate">Persyaratan Khusus</dt>
                <dd class="col-sm-9">
                  <p style="margin-bottom:0%">Pelaku usaha Penanaman Modal Dalam
                    Negeri melakukan pemenuhan persyaratan,
                    yaitu:
                    </p>
                  <ol type="a">
                    <li style="margin-bottom: 0%">Memiliki tenaga ahli
                      berkewarganegaraan Indonesia di bidang
                      Tally Mandiri, sebagai berikut:
                      <ul>
                        <li>Paling sedikit 1 (satu) orang dengan kualifikasi Ahli Nautika Tk III, atau D III ahli kepelabuhanan dan Pelayaran atau transportasi laut atau sederajat, untuk perusahaan yang melakukan kegiatan Tally Mandiri di pelabuhan utama dan pelabuhan pengumpul;</li>
                        <li>Tenaga ahli disesuaikan dengan kondisi pelabuhan setempat, untuk perusahaan yang melakukan kegiatan Tally Mandiri di pelabuhan pengumpan.</li>
                        <li>Dengan pengalaman 5 (lima) tahun di bidang pelayaran atau tally yang dibuktikan dengan Surat Keterangan Kerja dari perusahaan yang bergerak di bidang pelayaran atau Tally Mandiri.</li>
                      </ul>  
                    </li>
                    <li style="margin-bottom: 0%">Memiliki sistem manajemen usaha;</li>
                    <li style="margin-bottom: 0%">Memiliki peralatan, termasuk peralatan teknologi informasi yang digunakan;</li>
                    <li>Surat rekomendasi dari penyelenggara pelabuhan setempat terhadap keseimbangan penyediaan dan permintaan usaha tally mandiri berdasarkan jumlah perusahaan tally mandiri dan jumlah kunjungan kapal yang berkegiatan di pelabuhan setempat.</li>
                  </ol>
                </dd>
              </dl>
            </dd>
          </dl>
          <a href="dokumen/PERIZINAN STANDAR USAHA TALLY MANDIRI.pdf"><button type="button" class="btn btn-primary"><i class="bi bi-filetype-pdf"></i>DOWNLOAD PDF</button></a>
        </div>
        {{-- END STANDAR USAHA TALLY MANDIRI --}}

        {{-- STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL --}}
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
        <dl class="row" style="color: darkslategray;">
          <h3 class="mb-4">B.	STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL</h3>
            <dt class="col-sm-3 text-truncate">Persyaratan Umum</dt>
            <dd class="col-sm-9">
              <ol type="a">
                <li style="margin-bottom: 0%">Persyaratan yang disesuaikan dengan ketentuan Lembaga OSS;
                  </li>
                <li style="margin-bottom: 0%">Memiliki bukti kepemilikan tempat usaha/sewa minimal selama 2 (dua) tahun, peralatan kantor, sarana dan prasarana internet, serta peralatan keselamatan;</li>
                <li>Durasi waktu pemenuhan perizinan berusaha sesuai dengan ketentuan lembaga OSS.</li>
              </ol>
            </dd>
            
              <dt class="col-sm-3 text-truncate">Persyaratan Khusus</dt>
                <dd class="col-sm-9">
                  <p style="margin-bottom:0%">Pelaku usaha melakukan pemenuhan persyaratan, yaitu:
                    </p>
                  <ol type="a">
                    <li style="margin-bottom: 0%">Memiliki tenaga ahli
                      berkewarganegaraan Indonesia di bidang
                      Tally Mandiri, sebagai berikut:
                      <ul>
                        <li>Tenaga ahli Warga Negara Indonesia: sekurang-kurangnya 1 (satu) orang S-1 (sarjana strata satu) Teknik Perkapalan atau Teknik Sistem Perkapalan yang sederajat dengan pengalaman kerja sekurang-kurangnya 5 (lima) tahun;</li>
                        <li>Sekurang-kurangnya 1 (satu) orang tenaga ahli mesin/ mesin kapal/ kelistrikan kapal berijazah D-III (Diploma tiga) atau yang sederajat dengan pengalaman kerja sekurang-kurangnya 5 (lima) tahun; dan</li>
                        <li>Sekurang-kurangnya 1 (satu) orang tenaga ahli pengelasan dengan sertifikat khusus dengan pengalaman kerja sekurang-kurangnya 5 (lima) tahun.</li>
                      </ul>  
                    </li>
                    <li style="margin-bottom: 0%">Memiliki dan/atau menguasai peralatan dan/atau perlengkapan Perawatan dan Perbaikan Kapal sesuai dengan kebutuhan kegiatannya sesuai dengan standar dan ketentuan yang berlaku;</li>
                    <li style="margin-bottom: 0%">Memiliki dan/atau menguasai peralatan dan/atau perlengkapan keselamatan kerja sesuai dengan standar;</li>
                    <li style="margin-bottom: 0%">Peralatan Perawatan dan Perbaikan Kapal sebagaimana yang dimaksud pada butir 3 (tiga) minimal berupa:
                      <ul>
                        <li>Kompresor</li>
                        <li>Genset</li>
                        <li>Peralatan Pengecekan Mesin</li>
                        <li>Mesin Bor</li>
                        <li>Gerinda Tangan</li>
                        <li>Mesin Las</li>
                        <li>Peralatan Pengecatan</li>
                        <li>Peralatan Pengecekan Komunikasi; dan</li>
                        <li>Peralatan Pengecekan Navigasi</li>
                      </ul>
                    <li>Surat rekomendasi dari penyelenggara pelabuhan setempat tentang keseimbangan penyediaan dan permintaan usaha Perawatan dan Perbaikan Kapal berdasarkan jumlah kunjungan kapal yang berkegiatan di pelabuhan setempat</li>
                    </li>
                
                  </ol>
                </dd>
              </dl>
            </dd>
          </dl>
          <a href="dokumen/PERIZINAN STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL.pdf"><button type="button" class="btn btn-primary"><i class="bi bi-filetype-pdf"></i>DOWNLOAD PDF</button></a>
      </div>
      {{-- END STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL --}}
      
      {{-- STANDAR USAHA PERANTARA JUAL BELI ATAU SEWA KAPAL --}}
      <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
         <dl class="row" style="color: darkslategray;">
          <h3 class="mb-4">C.	STANDAR USAHA PERANTARA JUAL BELI ATAU SEWA KAPAL</h3>
            <dt class="col-sm-3 text-truncate">Persyaratan Umum</dt>
            <dd class="col-sm-9">
              <ol type="a">
                <li style="margin-bottom: 0%">Persyaratan yang disesuaikan dengan ketentuan Lembaga OSS;
                  </li>
                <li style="margin-bottom: 0%">Memiliki bukti kepemilikan tempat usaha/sewa minimal selama 2 (dua) tahun, peralatan kantor, sarana dan prasarana internet, serta peralatan keselamatan;</li>
                <li>Durasi waktu pemenuhan perizinan berusaha sesuai dengan ketentuan lembaga OSS.</li>
              </ol>
            </dd>
            
              <dt class="col-sm-3 text-truncate">Persyaratan Khusus</dt>
                <dd class="col-sm-9">
                  <p style="margin-bottom:0%">Pelaku usaha melakukan pemenuhan persyaratan, yaitu:
                    </p>
                  <ol type="a">
                    <li style="margin-bottom: 0%">Tenaga ahli Warga Negara Indonesia yaitu tenaga ahli kenotariatan, Keuangan, hukum arbitrase, hukum kemaritiman internasional dan bersertifikat kompetensi profesi di bidang Ship Broker dengan pengalaman 5 (lima) tahun dibidang Perantara Jual Beli Dan/atau Sewa Kapal yang dibuktikan dengan Surat Keterangan Kerja dari perusahaan yang bergerak di bidang Perantara Jual Beli Dan/atau Sewa Kapal atau bidang pelayaran;</li>
                    <li style="margin-bottom: 0%">Tenaga ahli sebagaimana disebutkan dalam ayat 1 (satu) merupakan pilihan sesuai dengan kebutuhanusaha Perantara Jual Beli Dan/atau Sewa Kapal;</li>
                    <li style="margin-bottom: 0%">Memiliki sistem manajemen usaha;;</li>
                    <li style="margin-bottom: 0%">Peralatan Perawatan dan Perbaikan Kapal sebagaimana yang dimaksud pada butir 3 (tiga) minimal berupa:
                      <ul>
                        <li>Kompresor</li>
                        <li>Genset</li>
                        <li>Peralatan Pengecekan Mesin</li>
                        <li>Mesin Bor</li>
                        <li>Gerinda Tangan</li>
                        <li>Mesin Las</li>
                        <li>Peralatan Pengecatan</li>
                        <li>Peralatan Pengecekan Komunikasi; dan</li>
                        <li>Peralatan Pengecekan Navigasi</li>
                      </ul>
                    <li style="margin-bottom: 0%">Surat rekomendasi dari penyelenggara pelabuhan setempat tentang keseimbangan penyediaan dan permintaan usaha Perawatan dan Perbaikan Kapal berdasarkan jumlah kunjungan kapal yang berkegiatan di pelabuhan setempat;</li>
                    <li style="margin-bottom: 0%">Memiliki atau menguasai kendaraan operasional minimal roda 4 (empat) yang dibuktikan dengan bukti. kepemilikan atau sewa yang sah;</li>
                    <li style="margin-bottom: 0%">Memiliki sistem peralatan perangkat lunak dan keras serta sistem informasi dan komunikasi yang terintegrasi dengan sistem informasi perhubungan laut</li>
                    </li>
                
                  </ol>
                </dd>
              </dl>
            </dd>
          </dl>
          <a href="dokumen/PERIZINAN USAHA PERANTARA JUAL BELI ATAU SEWA KAPAL.pdf"><button type="button" class="btn btn-primary"><i class="bi bi-filetype-pdf"></i>DOWNLOAD PDF</button></a>
      </div>
      {{-- END STANDAR USAHA PERANTARA JUAL BELI ATAU SEWA KAPAL --}}
      
      {{-- STANDAR USAHA SALVAGE DAN ATAU PEKERJAAN BAWAH AIR --}}
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
        <dl class="row" style="color: darkslategray;">
          <h3 class="mb-4">D.	STANDAR USAHA SALVAGE DAN ATAU PEKERJAAN BAWAH AIR</h3>
            <dt class="col-sm-3 text-truncate">Persyaratan Umum</dt>
            <dd class="col-sm-9">
              <ol type="a">
                <li style="margin-bottom: 0%">Persyaratan yang disesuaikan dengan ketentuan Lembaga OSS;
                  </li>
                <li>Durasi waktu pemenuhan perizinan berusaha sesuai dengan ketentuan lembaga OSS.</li>
              </ol>
            </dd>
            
              <dt class="col-sm-3 text-truncate">Persyaratan Khusus</dt>
                <dd class="col-sm-9">
                  <p style="margin-bottom:0%">Pelaku usaha melakukan pemenuhan persyaratan, yaitu:
                    </p>
                  <ol type="a">
                    <li style="margin-bottom: 0%">Sertifikat Standar Usaha Salvage dan/atau PBA dari OSS;</li>
                    <li style="margin-bottom: 0%">memiliki 1 (satu) orang tenaga ahli berkewarganegaraan Indonesia yang memiliki kemampuan merencanakan dan melaksanakan salvage dan/ atau pekerjaan bawah air;</li>
                    <li style="margin-bottom: 0%">memiliki paling sedikit 1 (satu) tim penyelam yang terdiri atas 4 (empat) orang tenaga penyelam yang memiliki kompetensi dan sertifikat yang relevan;</li>
                    <li style="margin-bottom: 0%">Memiliki peralatan kerja yang terdiri atas:
                      <ul>
                        <li>1 (satu) set alat las dan potong bawah air</li>
                        <li>1 (satu) set pompa salvage dan/ atau pekerjaan bawah air</li>
                        <li>1 (satu) set alat survei</li>
                        <li>1 (satu) set kompresor selam tekanan rendah; dan</li>
                        <li>1 (satu) set kompresor selam tekanan tinggi.</li>
                      </ul>
                    <li style="margin-bottom: 0%">Memiliki 4 (empat) set alat selam Self Contained Underwater Breathing Apparatus (SCUBA) atau 1 (satu) set alat selam Surface Supplied Breathing Apparatus (SSBA);</li>
                    <li style="margin-bottom: 0%">Untuk kegiatan salvage memiliki paling sedikit 1 (satu) unit kapal kerja jenis crane barge atau tug boat berbendera Indonesia; dan</li>
                    <li style="margin-bottom: 0%">untuk kegiatan pekerjaan bawah air memiliki paling sedikit 1 (satu) unit kapal kerja jenis pipe cable laying barge vessel atau tug boat berbendera Indonesia</li>
                    </li>
                
                  </ol>
                </dd>
              </dl>
            </dd>
          </dl>
          <a href="dokumen/PERIZINAN STANDAR USAHA SALVAGE.pdf"><button type="button" class="btn btn-primary"><i class="bi bi-filetype-pdf"></i>DOWNLOAD PDF</button></a>
      </div>
      {{-- END STANDAR USAHA SALVAGE DAN ATAU PEKERJAAN BAWAH AIR --}}

      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
      
      <div class="tab-pane fade" id="v-pills-perizinan" role="tabpanel" aria-labelledby="v-pills-perizinan-tab" tabindex="0">gggggggggg</div>

    </div>
  </div>

    
@endsection