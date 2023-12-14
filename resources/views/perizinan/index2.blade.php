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

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="row g-4" style="height: 70%">
                <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-buildings-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3">A. STANDAR USAHA TALLY MANDIRI</h4>
                            {{-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                                augue.</p> --}}
                            <a class="btn btn-light px-3" data-bs-toggle="modal" data-bs-target="#tallymandiri">Read
                                More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-newspaper text-dark"></i>
                        </div>
                        <h5 class="mb-3">STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL</h4>
                            <a class="btn btn-light px-3" data-bs-toggle="modal" data-bs-target="#usahaPerbaikanKapal">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="fa fa-ship text-dark mt-4"></i>
                        </div>
                        <h5 class="mb-3">Data dan Informasi</h4>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-chat-quote text-dark"></i>
                        </div>
                        <h5 class="mb-3">Konsultasi</h4>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4" style="height: 70%">
              <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="icon-box-primary mb-4">
                          <i class="bi bi-buildings-fill text-dark"></i>
                      </div>
                      <h5 class="mb-3">A. STANDAR USAHA TALLY MANDIRI</h4>
                          {{-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                              augue.</p> --}}
                          <a class="btn btn-light px-3" data-bs-toggle="modal" data-bs-target="#tallymandiri">Read
                              More<i class="bi bi-chevron-double-right ms-1"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item">
                      <div class="icon-box-primary mb-4">
                          <i class="bi bi-newspaper text-dark"></i>
                      </div>
                      <h5 class="mb-3">Publikasi</h4>
                          <p class="mb-4">Temukan berita dan informasi terbaru disini.</p>
                          <a class="btn btn-light px-3" href="/berita">Read More<i
                                  class="bi bi-chevron-double-right ms-1"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item">
                      <div class="icon-box-primary mb-4">
                          <i class="fa fa-ship text-dark mt-4"></i>
                      </div>
                      <h5 class="mb-3">Data dan Informasi</h4>
                          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                              augue.</p>
                          <a class="btn btn-light px-3" href="">Read More<i
                                  class="bi bi-chevron-double-right ms-1"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="service-item">
                      <div class="icon-box-primary mb-4">
                          <i class="bi bi-chat-quote text-dark"></i>
                      </div>
                      <h5 class="mb-3">Konsultasi</h4>
                          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                              augue.</p>
                          <a class="btn btn-light px-3" href="">Read More<i
                                  class="bi bi-chevron-double-right ms-1"></i></a>
                  </div>
              </div>
          </div>

          <div class="row g-4 mt-4" style="height: 70%">
            <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-buildings-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">A. STANDAR USAHA TALLY MANDIRI</h4>
                        {{-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                            augue.</p> --}}
                        <a class="btn btn-light px-3" data-bs-toggle="modal" data-bs-target="#tallymandiri">Read
                            More<i class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-newspaper text-dark"></i>
                    </div>
                    <h5 class="mb-3">Publikasi</h4>
                        <p class="mb-4">Temukan berita dan informasi terbaru disini.</p>
                        <a class="btn btn-light px-3" href="/berita">Read More<i
                                class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="fa fa-ship text-dark mt-4"></i>
                    </div>
                    <h5 class="mb-3">Data dan Informasi</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                            augue.</p>
                        <a class="btn btn-light px-3" href="">Read More<i
                                class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-chat-quote text-dark"></i>
                    </div>
                    <h5 class="mb-3">Konsultasi</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                            augue.</p>
                        <a class="btn btn-light px-3" href="">Read More<i
                                class="bi bi-chevron-double-right ms-1"></i></a>
                </div>
            </div>
        </div>

        </div>
    </div>
    <!-- Service End -->

    {{-- MODAL Service --}}

    {{-- A. STANDAR USAHA TALLY MANDIRI --}}
    <div class="modal fade" id="tallymandiri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">A. STANDAR USAHA TALLY MANDIRI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dl class="row" style="color: darkslategray;">
                        <dt class="col-sm-3 text-truncate">Persyaratan Umum</dt>
                        <dd class="col-sm-9">
                            <ol type="a">
                                <li style="margin-bottom: 0%">Persyaratan yang disesuaikan dengan ketentuan Lembaga OSS;
                                </li>
                                <li style="margin-bottom: 0%">Memiliki bukti kepemilikan tempat usaha/sewa minimal selama 2
                                    (dua) tahun, peralatan kantor, sarana dan prasarana internet, serta peralatan
                                    keselamatan;</li>
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
                                        <li>Paling sedikit 1 (satu) orang dengan kualifikasi Ahli Nautika Tk III, atau D III
                                            ahli kepelabuhanan dan Pelayaran atau transportasi laut atau sederajat, untuk
                                            perusahaan yang melakukan kegiatan Tally Mandiri di pelabuhan utama dan
                                            pelabuhan pengumpul;</li>
                                        <li>Tenaga ahli disesuaikan dengan kondisi pelabuhan setempat, untuk perusahaan yang
                                            melakukan kegiatan Tally Mandiri di pelabuhan pengumpan.</li>
                                        <li>Dengan pengalaman 5 (lima) tahun di bidang pelayaran atau tally yang dibuktikan
                                            dengan Surat Keterangan Kerja dari perusahaan yang bergerak di bidang pelayaran
                                            atau Tally Mandiri.</li>
                                    </ul>
                                </li>
                                <li style="margin-bottom: 0%">Memiliki sistem manajemen usaha;</li>
                                <li style="margin-bottom: 0%">Memiliki peralatan, termasuk peralatan teknologi informasi
                                    yang digunakan;</li>
                                <li>Surat rekomendasi dari penyelenggara pelabuhan setempat terhadap keseimbangan penyediaan
                                    dan permintaan usaha tally mandiri berdasarkan jumlah perusahaan tally mandiri dan
                                    jumlah kunjungan kapal yang berkegiatan di pelabuhan setempat.</li>
                            </ol>
                        </dd>
                    </dl>
                    </dd>
                    </dl>
                    <a href="dokumen/PERIZINAN STANDAR USAHA TALLY MANDIRI.pdf"><button type="button"
                            class="btn btn-primary"><i class="bi bi-filetype-pdf"></i>DOWNLOAD PDF</button></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END A. STANDAR USAHA TALLY MANDIRI --}}

    {{-- B.	STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL --}}
    <div class="modal fade" id="usahaPerbaikanKapal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">B. STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <dl class="row" style="color: darkslategray;">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END B.	STANDAR USAHA PERAWATAN DAN PERBAIKAN KAPAL --}}


    {{-- END MODAL SERVICE --}}
@endsection
