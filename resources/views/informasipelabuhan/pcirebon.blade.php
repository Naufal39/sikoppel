@extends('layouts/main')

@section('isihalaman')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Pelabuhan Cirebon</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Pelabuhan Cirebon</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <p style="text-align: justify; color: black; font-family: Arial, Helvetica, sans-serif;">
                    Status Pelabuhan Cirebon sendiri saat ini berdasarkan Kepurusan Menteri Perhubungan KP. 432 Tahun 2017 Tentang Rencana Induk Pelabuhan Nasional adalah Pelabuhan Pengumpul. Oleh karenanya Pelabuhan Cirebon diharapkan dapat menjadi gerbang utama dalam mendukung perkembangan perekonomian Jawa Barat yang merupakan sasaran penanaman modal paling besar baik modal asing maupun modal dalam negeri, mengingat Provinsi ini memiliki ragam jenis indrustri yang sangat banyak mulai dari indrusti makanan sampai indrusti tekstil, indrustri barang, pertanian, logam mulia, kimia mesin, peralatan, pabrik semen, pupuk. Selain itu juga di sekitar Cirebon sendiri terdapat pabrik semen, pabrik tekstil, makanan ternak, pabrik jala, dan yang paling utama adalah pengrajin rotan.
                </p>
                <img src="img/cirebon/1.jpg" alt="Pelabuhan Cirebon">
                <br>
                <img style="margin-top: 50px; max-height: 20%; max-widht" src="img/cirebon/2.jpg" alt="Pelabuhan Cirebon">

                {{-- tab --}}
                <ul class="nav nav-pills mb-3 justify-content-center mt-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <table class="table table-bordered" style="margin-top: 30px;">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <th>Nama Dermaga</th>
                                    <th>Konstruksi</th>
                                    <th>Volume</th>
                                    <th>Satuan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tr style="text-align: center;">
                                <th>1</th>
                                <td>Muarajati I & III</td>
                                <td>Beton</td>
                                <td>355</td>
                                <td>m2</td>
                                <td>Kedalaman -6 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>2</th>
                                <td>Muarajati II</td>
                                <td>Shite Pile Beton</td>
                                <td>248</td>
                                <td>m2</td>
                                <td>Kedalaman -6 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>3</th>
                                <td>Linggarjati</td>
                                <td>Shite Pile Beton</td>
                                <td>131</td>
                                <td>m2</td>
                                <td>Kedalaman -6 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>4</th>
                                <td>Pelita I - III</td>
                                <td>Beton</td>
                                <td>111</td>
                                <td>m2</td>
                                <td>Kedalaman -6 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>5</th>
                                <td>Surya Mantri I - IV</td>
                                <td>Beton</td>
                                <td>68</td>
                                <td>m2</td>
                                <td>Kedalaman -3 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>6</th>
                                <td>Sumadikun</td>
                                <td>Beton</td>
                                <td>67</td>
                                <td>m2</td>
                                <td>Kedalaman -3 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>7</th>
                                <td>Perniagaan I - IV</td>
                                <td>Beton</td>
                                <td>44</td>
                                <td>m2</td>
                                <td>Kedalaman -3 m LWS</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>8</th>
                                <td>Pelra</td>
                                <td>Kayu</td>
                                <td>150</td>
                                <td>m2</td>
                                <td>Kedalaman -2 m LWS</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aliquid nobis ab atque laboriosam asperiores iusto nisi, accusantium velit nihil.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et iste at rem non eaque natus, ullam praesentium cupiditate tenetur dicta id dolore atque labore excepturi explicabo similique eveniet ipsum. Accusantium!
                    </div>
            </div> 
            {{-- end tab --}}
        </div>        
    </div>
    <!-- End Isi Berita -->
    
    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Informasi 1</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Informasi 2</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5" style="margin-top: 10%;">
                        <div class="icon-box-primary mb-4">
                            <i class="fa fa-ship text-dark"></i>
                        </div>
                        <h5 class="mb-3">informasi 3</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-file-earmark-text text-dark"></i>
                        </div>
                        <h5 class="mb-3">Informasi 4</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">PELABUHAN CIREBON</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
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
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100 align-items-end">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                                <button type="button" class="btn-play" data-bs-toggle="modal"
                                    src="vid/uptdlaut.mp4" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-primary p-5">
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Data 1</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Data 2</span>
                                        <span class="text-white">95%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Data 3</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <h3 class="modal-title" id="exampleModalLabel">Video Profile Pelabuhan Cirebon</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <video controls>
                            <source src="vid/pcirebon.mp4" type="video/mp4" />
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
@endsection