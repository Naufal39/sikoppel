@extends('layouts/main')

@section('isihalaman')
    <!-- Carousel Start -->
    @if ($posts->count())
        <div class="container-fluid header-carousel px-0 mb-5">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/harbor.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7 text-start">
                                        <h4 class="display-1 text-white animated slideInRight mb-3">{{ $posts[0]->title }}
                                        </h4>
                                        <p class="mb-5 animated slideInRight">{{ $posts[0]->excerpt }}</p>
                                        <a href="../berita/{{ $posts[0]->slug }}"
                                            class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/harbor2.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-lg-7 text-end">
                                        <h1 class="display-1 text-white animated slideInRight mb-3">{{ $posts[1]->title }}
                                        </h1>
                                        <p class="mb-5 animated slideInRight">{{ $posts[1]->excerpt }}</p>
                                        <a href="../berita/{{ $posts[1]->slug }}"
                                            class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    @else
        BELUM ADA POST
    @endif


    {{-- modal --}}
    <div class="modal modal-video fade" id="welcomeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">WELCOME TO SIKOPPEL</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9" id="welcomeVid">
                        <video controls autoplay>
                            <source src="vid/welcomevid1.mp4" type="video/mp4">
                            <source src="vid/welcomevid1.ogg" type="video/ogg">
                            <iframe src="" allow="autoplay" frameborder="0"></iframe>
                            Browsermu tidak mendukung tag ini, upgrade donk!
                        </video>
                        {{-- <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay"></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            {{-- <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-6 mb-3">Reliable & High-Quality Service</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                </div> --}}
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-buildings-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Selayang Pandang</h4>
                            <p class="mb-4">Profile Dinas Perhubungan.</p>
                            <p class="mb-4">Profile UPTD PPP Pelabuhan Laut.</p>
                            {{-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-newspaper text-dark"></i>
                        </div>
                        <h5 class="mb-3">Publikasi</h4>
                            <p class="mb-4">Temukan berita dan informasi terbaru disini.</p>
                            {{-- <a class="btn btn-light px-3" href="/berita">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="fa fa-ship text-dark mt-4"></i>
                        </div>
                        <h5 class="mb-3">Data dan Informasi</h4>
                            <p class="mb-4">Data dan Informasi setiap Kabupaten dan Kota ada disini.</p>
                            {{-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-chat-quote text-dark"></i>
                        </div>
                        <h5 class="mb-3">Konsultasi</h4>
                            <p class="mb-4">Tanyakan bila ada pertanyaan.</p>
                            {{-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img style="height: 7cm;" class="img-fluid" src="img/Dokumen1.jpg">
                        </div>
                        <div class="col-6">
                            <img style="height: 7cm;" class="img-fluid" src="img/data.png">
                        </div>
                        <div class="col-6">
                            <img style="height: 7cm;" class="img-fluid" src="img/kapal.jpg">
                        </div>
                        <div class="col-6">
                            <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="fa fa-ship text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">25</h1>
                                <small class="fs-5 text-white">Kapal Bajak Laut</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Data Terserah</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Data 1</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Data 2</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Data 3</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->


    <!-- Features Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Selayang Pandang</h5>
                        <p class="mb-0">
                            Profil UPTD <br>
                            Dasar Hukum <br>

                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Berita dan Isu</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5" style="margin-top: 10%;">
                        <div class="icon-box-primary mb-4">
                            <i class="fa fa-ship text-dark"></i>
                        </div>
                        <h5 class="mb-3">Data dan Informasi</h5>
                        <p class="mb-0">
                            Informasi Kelengkapan Data <br>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-file-earmark-text text-dark"></i>
                        </div>
                        <h5 class="mb-3">Konsultasi</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Features End -->


    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">UPTD PPPP LAUT</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">UPTD Pengelolaan Prasarana Perhubungan Pelabuhan
                            Laut mempunyai tugas pokok menyelenggarakan sebagian kegiatan teknis operasional di bidang
                            Pengelolaan Prasarana Perhubungan Pelabuhan Laut, meliputi operasi pelabuhan laut dan fasilitas
                            pelabuhan laut, serta pelaksanaan tugas pokok dan fungsi UPTD Pengelolaan Pengelolaan Prasarana
                            Perhubungan Pelabuhan Laut.</p>
                        {{-- <div class="row g-5 pt-2 mb-5"> --}}
                        <div class="row">
                            <p style="text-align: justify;">Dalam menyelenggarakan tugas pokok, UPTD Pengelolaan Prasarana
                                Perhubungan Pelabuhan Laut mempunyai fungsi:</p>
                            <ol type="a">
                                <li>penyelenggaraan penyusunan bahan kebijakan teknis operasional Pengelolaan Prasarana
                                    Perhubungan Pelabuhan Laut;</li>
                                <li>penyelenggaraan Pengelolaan Prasarana Perhubungan Pelabuhan Laut meliputi operasi
                                    pelabuhan laut dan fasilitas pelabuhan laut;</li>
                                <li>penyelenggaraan evaluasi dan pelaporan UPTD; dan</li>
                                <li>penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                            </ol>
                            {{-- <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-person-plus text-dark"></i>
                                </div>
                                <h5 class="mb-3">Informasi 1</h5>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-check-all text-dark"></i>
                                </div>
                                <h5 class="mb-3">Informasi 2</h5>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </div> --}}
                        </div>
                        {{-- <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a> --}}
                        <audio controls>
                            <source src="audio/Hawaii Five O.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100 align-items-end">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                                <button type="button" class="btn-play" data-bs-toggle="modal" src="vid/uptdlaut.mp4"
                                    data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-primary p-5">
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Preparation</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Result</span>
                                        <span class="text-white">95%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Equipments</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Video Profile</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="vid/uptdlaut.mp4" type="video/mp4" />
                            Browsermu tidak mendukung tag ini, upgrade donk!
                        </video>
                        <!-- <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                        allowscriptaccess="always" allow="autoplay"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Appoinment Start -->
    {{-- <div class="container-fluid py-5 rounded" style="background-image: url(../img/bg1.jpg); background-size: contain;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4 text-light">We Ensure You Will Always Get The Best Result</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-light fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-light">Office Address</h5>
                            <span>Jl. Brigjen Darsono No. 16, Kedawung, Kab. Cirebon</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-light fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-light">Office Time</h5>
                            <span>Mon-Fri 08am-5pm, Sat Sun Closed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4 text-light">Online Appoinment</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Pelayanan 1</option>
                                    <option value="">Pelayanan 2</option>
                                    <option value="">Pelayanan 3</option>
                                    <option value="">Pelayanan 4</option>
                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Appoinment Start -->


    <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="d-flex justify-content-center img-fluid w-50" style="margin-left: 25%"
                        src="img/pa_kadis1.jpg" alt="">
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3">Ir. A. Koswara, M.P</h1>
                    <p class="mb-1">Kepala Dinas</p>
                    <p class="mb-5">Dinas Perhubungan Provinsi Jawa Barat</p>
                    <h3 class="mb-3">Biography</h3>
                    <p class="mb-4">Kepala Dinas Perhubungan Provinsi Jawa Barat Mempunyai Tugas Pokok memimpin,
                        mengkoordinasikan, membina, mengendalikan, dan menyelenggarakan urusan pemerintahan di bidang
                        perhubungan, yang menjadi kewenangan provinsi, melaksanakan tugas dekonsentrasi sampai dengan
                        dibentuk Sekretariat Gubernur sebagai Wakil Pemerintah Pusat serta melaksanakan tugas pembantuan
                        sesuai bidang tugasnya.</p>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="https://www.instagram.com/kang_kos/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="https://www.youtube.com/@dishubjabar"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/zoro.jpg" alt="" style="height:250px;">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Roronoa Zoro</h5>
                            <span>Assistant</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/sanji.jpg" alt="" style="height:250px;">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Sanji</h5>
                            <span>Assistant</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/usop.jpg" alt="" style="height: 250px;;">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">God Usoop</h5>
                            <span>Assistant</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/shank.jpg" alt="" style="height: 250px;">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Shanks</h5>
                            <span>Assistant</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- PROFILE PICTURE --}}
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-4">Tentang SIKOPPEL</h1>
                    <p class="text-white mb-5">SIKOPPEL adalah Sistem Informasi Konsultasi Pengelolaan Pelabuhan Laut,
                        dimana di sistem informasi ini para pengguna dapat mengakses fitur utama yaitu Konsultasi langsung,
                        Mengakses berita terbaru, Perizinan, dan Data dan Informasi</p>
                    <a href="" class="btn btn-primary py-3 px-5">More</a>
                </div>
                <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white p-5">
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Dengan adanya SIKOPPEL diharapkan dapat mewujudkan pelayanan prima
                                    kepada masyarakat dalam arti pelayanan yang cepat, tepat, adil dan akuntabel, merupakan
                                    harapan bagi setiap institusi pelayanan publik.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/kauptd.jpg" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Pepi Taufik, S.H., M.H</h5>
                                        <span class="text-primary">Kepala UPTD PPP Pelabuhan Laut</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Dengan adanya SIKOPPEL diharapkan dapat mewujudkan pelayanan prima
                                    kepada masyarakat dalam arti pelayanan yang cepat, tepat, adil dan akuntabel, merupakan
                                    harapan bagi setiap institusi pelayanan publik.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial.jpg" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">H. Amat Wiluyo, S.Sos., M.Si</h5>
                                        <span class="text-primary">Kepala Sub Bagian Tata Usaha</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Dengan adanya SIKOPPEL diharapkan dapat mewujudkan pelayanan prima
                                    kepada masyarakat dalam arti pelayanan yang cepat, tepat, adil dan akuntabel, merupakan
                                    harapan bagi setiap institusi pelayanan publik.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial.jpg" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Dian Ferdiansyah, S.Sos</h5>
                                        <span class="text-primary">Analis Kebijakan Ahli Muda</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Dengan adanya SIKOPPEL diharapkan dapat mewujudkan pelayanan prima
                                    kepada masyarakat dalam arti pelayanan yang cepat, tepat, adil dan akuntabel, merupakan
                                    harapan bagi setiap institusi pelayanan publik.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial.jpg" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Raden Imam Suhendar, S.Sos</h5>
                                        <span class="text-primary">Analis Kebijakan Ahli Muda</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
