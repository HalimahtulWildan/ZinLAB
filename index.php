<!doctype html>
<html lang="en">

<head>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./CSS/style.css">
</head>


<body>
    <!--Header atau topbar-->
    <header>
         <section id="topbar" class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-dark text-white topbar-transparent">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-start">
             <span class="px-3"><i class="bi bi-phone "></i> +62 8888 </span>
          <i class="bi bi-clock"></i> Mon-Sat: 11:00 AM - 23:00 PM
            </div>
            <div class="col-md-6 text-end">
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
            </div>
          </div>
        </div>
      </section>
    

        <!--Awal Navbar-->
        <nav class="navbar navbar-expand-lg navbar-info bg-info text-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2 class="fw-bold mb-2 mb-lg-0 mb-sm-0"></h2>
                    <img src="img/Logo PMWI (3).png" alt="image" width="27px" height="37px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan perizinan">Alur Perizinan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#asisten laboratorium">Asisten Laboratorium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ruangan laboratorium">Ruangan Laboratorium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="login_page.php">
                                <i class="bi bi-person "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Akhir navbar--> 
    </header>
    <!--Selesai Header-->

<!--banner, atau gambar slide-->
    <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="img/IMG_0384.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Halo, selamat Datang | <b>ZINLAB</b>!</h5>
                    <p>SISTEM INFORMASI PERIZINAN LABORATORIUM FIKOM UMI</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="img/IMG_0388.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Startup Laboratory FIKOM UMI</h5>
                    <p>Ayo Mengikuti Praktikum, jangan izin terus!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="img/IMG_0384.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>PRAKTIKUM LIVE</h5>
                    <p>Sampai Jumpa di laboratorium, kalau ngak harus izin dlu gih.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <main id="main">

        <!--  Section Tentang  -->
        <section id="tentang" class="about mt-5">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2">Tentang</h2>

                <!--deskripsi-->
                <p class="text-center w-responsive mx-auto mb-1"><b>ZINLAB</b> FIKOM UMI merupakan sistem layanan perizinan mengikuti praktikum menjadi Lebih Jelas, Transparan, Cepat dan Mudah.</p>
                <div class="row  pt-5 pb-5">

                    <div class="col-lg-5 align-items-stretch video-box center-icon">
                        <img src="img/Logo_Lab.png" alt="img" width="90%" height="80%">
                        <a href="https://youtu.be/dHYglU0jogg" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
                        <div class="content">
                            <h3>Video Tutorial Mata Kuliah Praktikum</strong></h3>
                            <p>
                                Video tutorial terdiri dari 12 mata kuliah wajib yang telah disediakan oleh Asisten <b>ZINLAB FIKOM UMI.</b>  
                                dimana praktikan akan mudah mengakses praktikum secara online.  
                            </p>
                            <p class="font-italic">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, consequuntur.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, ipsum!</li>
                                <li><i class="bx bx-check-double"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, eveniet!.</li>
                                <li><i class="bx bx-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, veniam!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir section Section -->

        
        <section id="layanan perizinan" class="layanan perizinan">
            <section id="tentang" class="about mt-5">
            <div class="container layanan perizinan pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Layanan Perizinan</h2>

                <!--deskripsi section-->
                <p class="text-center w-responsive mx-auto mb-5"><b>ZINLAB</b> dengan Alur perizinan yang cukup mudah bukan, 
                    dengan begitu kamu juga bisa tahu loh mengenai informasi terkait Laboratorium FIKOM UMI.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/IMG_0384.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Mengisi Form</h5>
                                <p class="card-text">mengajukan perizinan dapat dilakukan dengan cara mengisi form perizinan setelah melakukan pendaftaran akun.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/IMG_0384.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Mengisi </h5>
                                <p class="card-text">Isi surat yang ditanda tangani dengan materai 10.000, ttd orang tua, jumlah izin, lalu kirim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img/IMG_0384.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Menunggu</h5>
                                <p class="card-text">Setelah mengisi surat perizinan yang konkrit, praktikan bisa menunggu sign yang beranda kamu ya!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--asisten laboratorium-->
        <section id="asisten laboratorium" >
            <div class="container-fluid pt-5 pb-5 bg-light">
                <div class="container text-center">
                  <h2 class="display-3" id="asisten laboratorium">Asisten Laboratorium</h2>
                  <p>
                    Asisten Laboratorium Terpadu ZINLAB ditangani oleh asisten yang berposisi pada bidang nya masing-masing
                  </p>
                  <div class="row pt-4 gx-4 gy-4">
                    <div class="col-md-4 text-center asisten">
                      <img
                        src="img/IMG_6990.jpg" width="200px" height="200px"
                        class="rounded-circle mb-3"
                      />
                      <h4>Rahmadani</h4>
                      <p>Desain Grafis Asisten</p>
                      <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                      </p>
                    </div>
                    <div class="col-md-4 text-center asisten">
                      <img
                        src="img/IMG_0384.jpg" width="200px" height="200px"
                        class="rounded-circle mb-3"
                      />
                      <h4>Aulia Putri Utami</h4>
                      <p>Basis Data Asisten</p>
                      <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                      </p>
                    </div>
                    <div class="col-md-4 text-center tim">
                      <img
                        src="img/IMG_0384.jpg" width="200px" height="200px"
                        class="rounded-circle mb-3"
                      />
                      <h4>Reyna Aprilia</h4>
                      <p>Mobile Developer</p>
                      <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      <!-- akhir asisten laboratorium-->


     <!--Ruangan laboratorium-->
        <section id="ruangan laboratorium" class="ruangan laboratorium">
            <div class="container">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Ruangan Laboratorium</h2>
                <!--Section Description-->
                <p class="text-center w-responsive mx-auto mb-5"> Ruangan Laboratorium ZINLAB UMI, terdiri dari Laboratorium STARTUP, NETWORK, IOT, MULTIMEDIA.</p>
                <!-- Mulai, Gambar Ruangan Lab -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="img/potrait1.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"/>
                        <img src="img/landscape2.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape"/>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/landscape3.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds"/>
                        <img src="img/potrait1.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"/>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/potrait2.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea"/>
                        <img src="img/landscape4.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park"/>
                    </div>
                </div>
            </div>
        </section>

   <!--Kontak-->
        <section id="kontak">
            <div class="container mb-5">
                <section class="mb-4">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Kontak</h2>
                    <p class="text-center w-responsive mx-auto mb-5">Silahkan Menghubungi kontak dibawah, jika perizinan kamu belum di balas dalam jangka waktu 2x24 jam WITA. <b>HUBUNGI DILUAR JAM KERJA!</b></p>
                    <div class="row">
                        <div class="col-md-6 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Nama Lengkap</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Email</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="subject" class="">Subjek</label>
                                            <input type="text" id="subject" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="md-form">
                                            <label for="message">Pesan Kamu</label>
                                            <textarea type="text" id="message" name="message" rows="4"
                                                class="form-control md-textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <br>
                            </form>
                            <div class="text-center text-md-left">
                                <a class="btn btn-primary"
                                    onclick="document.getElementById('contact-form').submit();">Kirim</a>
                            </div>
                            <div class="status"></div>
                        </div>
                       
                        <div class="col-md-2 text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433.92546550615066!2d119.44854419250608!3d-5.135917002484495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd3165008369%3A0x7af75b8baf265f2b!2sFakultas%20Ilmu%20Komputer%20UMI!5e0!3m2!1sid!2sid!4v1677432560455!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </section>
            </div>
        </section>
         <!--Selesaimi-->


        <!-- Footer -->
        <footer class="text-center text-lg-start bg-primary text-white">
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Halimahtul Wildan</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Akhir Footer -->


        <!-- Bootstrap Bundle dan Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>

</html>