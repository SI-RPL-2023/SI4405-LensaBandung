<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LensaBandung</title>



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/TemplateMedilab/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/TemplateMedilab/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/TemplateMedilab/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>LensaBandung</h3>
            <p>
              Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan <br>
              Citarum, Kec. Bandung Wetan,<br>
              Kota Bandung, Jawa Barat 40115 <br><br>
              <strong>Telepon:</strong> +62 82234231000<br>
              <strong>Email:</strong> lensabandung@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('home')}}">LensaBandung</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('profilKota')}}">Profile Kota</a></li>
          <li><a class="nav-link scrollto" href="{{route('riwayatPengaduan')}}">Pengaduan</a></li>   
          <li><a class="nav-link scrollto" href="{{route('kontak')}}">Kontak Penting</a></li>
   
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @guest
            @if (Route::has('login'))
                <a class="appointment-btn scrollto" href="{{ route('login') }}"><span class="d-none d-md-inline">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
                <a class="appointment-btn scrollto" href="{{ route('register') }}"><span class="d-none d-md-inline">{{ __('Register') }}</a>
            @endif
        @else
            <a id="navbarDropdown" class="appointment-btn scrollto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <a class="dropdown-item" href="{{ route('profileku') }}">
                  {{ __('Edit Profile') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="postingan-pengaduan" class="postingan-pengaduan mt-5">
    <div class="container-fluid mt-5">
        <h2 class="text-center mb-5">Form Pengaduan</h2>
    </div>
    {{-- Form Starts Here --}}
    <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

        <div class= "data-aos="fade-up" data-aos-delay="100">

            <form action="{{route('storePengaduan')}}" method="post" role="form" enctype="multipart/form-data">
              @csrf
              <div class="row">
                    <div class="form-group">
                        <label>Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6 form-group mt-3">
                        <label>Pilih Kategori</label>
                        <br>
                        {{-- <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" required> --}}
                        <select name="kategori" id="kategori">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="2">Bencana Alam</option>
                            <option value="3">Kemacetan</option>
                            <option value="4">Pencurian</option>
                            <option value="5">Tindakan Asusila</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group mt-3">
                        <label>Tanggal Kejadian</label>
                        <input type="date" class="form-control" name="tanggal_kejadian" id="tanggal_kejadian" placeholder="" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                        <label>Lokasi Kejadian</label>
                        <input type="text" class="form-control" name="lokasi_kejadian" id="lokasi_kejadian" placeholder="Nama Desa, Kecamatan, Kabupaten" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Deskripsi Peristiwa</label>
                        <textarea class="form-control" name="detail_kejadian" id="detail_kejadian" rows="5" placeholder="Ceritakan kronologi peristiwa dengan detail!" required></textarea>
                    </div>
                    <div>
                        <label>Upload Gambar</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

        {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            </div>
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form> --}}

            </div><!-- End Contact Form -->

        </div>

      </div>
  </section>

 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>LensaBandung</h3>
        <p>
        Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan,  <br>
        Citarum, Kec. Bandung Wetan,<br>
        Kota Bandung, Jawa Barat 40115 <br><br>
          <strong>Telepon:</strong> +62 82234231000<br>
          <strong>Email:</strong> lensabandung@gmail.com<br>
        </p>
      </div>

      

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>LensaBandung</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
 </a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/TemplateMedilab/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/TemplateMedilab/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/TemplateMedilab/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/TemplateMedilab/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/TemplateMedilab/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/TemplateMedilab/assets/js/main.js')}}"></script>

</body>

</html>