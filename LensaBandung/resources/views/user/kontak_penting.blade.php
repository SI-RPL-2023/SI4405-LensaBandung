<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <style>
      div.dataTables_wrapper {
      width: 800px;
      margin: 0 auto;
  }
  </style>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <title>LensaBandung</title>
  <!-- Bootstrap 5 -->
  <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"/>


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

 {{-- CSS --}}
 <link href="{{asset('/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">lensabandung@gmail.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
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
          <li><a class="nav-link scrollto" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('profilKota')}}">Profile Kota</a></li>
          <li><a class="nav-link scrollto" href="{{route('riwayatPengaduan')}}">Pengaduan</a></li>
          <li><a class="nav-link scrollto" href="#">Kontak Penting</a></li>       
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

    <section id="kontak-penting" class="kontak-penting mt-5">

        <div class="container">
            <h4 class="mt-5"><strong>Kontak Penting di Kota Bandung</strong></h4>
            <p class="text-justify">Halaman yang ada di situs ini berisi tentang nomor-nomor telepon penting yang dapat dihubungi saat terjadi situasi darurat di Kota Bandung.
            Nomor-nomor ini bisa membantu untuk memanggil bantuan seperti pemadam kebakaran, kepolisian, rumah sakit, ambulance, dan PMI. Dengan adanya daftar nomor telepon ini, diharapkan dapat membantu masyarakat untuk memperoleh bantuan dengan lebih cepat dan mudah saat terjadi situasi darurat. Semoga informasi yang terdapat dalam halaman ini bermanfaat bagi Anda.</p> <br>
            <div class="row">
                <div class="col-9">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="text-center">
                                <th class="bg-info">Nama Layanan</th>
                                <th class="bg-info">Nomor Telepon</th>
                            </tr>
                            <tr class="text-center">
                                <th colspan="2" class="bg-dark text-white">Polisi</th>
                            </tr>
                            <tr>
                                <td>Polda Jabar</td>
                                <td>022-7800166, 7804777</td>
                            </tr>
                            <tr>
                                <td>Polrestabes Bandung</td>
                                <td>022-4203500, 4244444</td>
                            </tr>
                            <tr>
                                <td>Polres Kota Cimahi</td>
                                <td>022-6652095, 6640444</td>
                            </tr>
                            <tr>
                                <td>Polres Kabupaten Bandung</td>
                                <td>022-85871965</td>
                            </tr>
                            <tr class="text-center">
                                <th colspan="2" class="bg-dark text-white">Dinas Pemadam Kebakaran</th>
                            </tr>
                            <tr>
                                <td>Pemadam Kebakaran</td>
                                <td>022-113 / 022-7207113</td>
                            </tr>
                            <tr class="text-center">
                                <th colspan="2" class="bg-dark text-white">Ambulance</th>
                            </tr>
                            <tr>
                                <td>Ambulance</td>
                                <td>119 ext 0 (u se indonesia) <br>
                                    Whatsapp 08112442119</td>
                            </tr>
                            <tr class="text-center">
                                <th colspan="2" class="bg-dark text-white">Rumah Sakit</th>
                            </tr>
                            <tr>
                                <td>RSUP Hasan Sadikin</td>
                                <td>022-2034953-55</td>
                            </tr>
                            <tr>
                                <td>- Instalasi Gawat Darurat</td>
                                <td>022-2551198, 2551191</td>
                            </tr>
                            <tr>
                                <td>Paviliun Parahyangan</td>
                                <td>022-2031440, 2035986</td>
                            </tr>
                            <tr>
                                <td>Paviliun Anggrek</td>
                                <td>022-2034545</td>
                            </tr>
                            <tr>
                                <td>RSUD Ujung Berung (C) Kota Bandung</td>
                                <td>022-7800017, 7811794</td>
                            </tr>
                            <tr>
                                <td>RSUD Astana Anyar</td>
                                <td>022-5201139</td>
                            </tr>
                            <tr>
                                <td>RSU Sartika Asih</td>
                                <td>022-5229544</td>
                            </tr>
                            <tr>
                                <td>RSU Advent</td>
                                <td>022-2034386-9</td>
                            </tr>
                            <tr>
                                <td>RSU Santo Borromeus</td>
                                <td>022-2552000</td>
                            </tr>
                            <tr>
                                <td>RSU Santo Yusuf</td>
                                <td>022-7208172</td>
                            </tr>
                            <tr>
                                <td>RSU Muhammadiyah</td>
                                <td>022-7301062, 7312167</td>
                            </tr>
                            <tr>
                                <td>RSU Al-Islam</td>
                                <td>022-7562046, 7565588</td>
                            </tr>
                            <tr>
                                <td>RSU Pindad</td>
                                <td>022-7321964</td>
                            </tr>
                            <tr>
                                <td>RSU Cibabat Cimahi</td>
                                <td>022-6652025</td>
                            </tr>
                            <tr>
                                <td>RSUD Soreang (C)</td>
                                <td>022-5896590</td>
                            </tr>
                            <tr>
                                <td>RSUD Majalaya (C)</td>
                                <td>022-5950035</td>
                            </tr>
                            <tr>
                                <td>RSU Lanud Sulaiman</td>
                                <td>022-5409608</td>
                            </tr>
                            <tr>
                                <td>RSU Al-Ichsan</td>
                                <td>022-5940872, 5941719</td>
                            </tr>
                            <tr>
                                <td>RSU Rajawali</td>
                                <td>022-6011913, 6031087</td>
                            </tr>
                            <tr>
                                <td>RSU Limijati</td>
                                <td>022-420770</td>
                            </tr>
                            <tr>
                                <td>RS Dustira Cimahi</td>
                                <td>022-6633967</td>
                            </tr>
                            <tr>
                                <td>RSU Kebonjati</td>
                                <td>022-6140658</td>
                            </tr>
                            <tr>
                                <td>RS Cahya Kawaluyan</td>
                                <td>022-6803700, 6803701</td>
                            </tr>
                            <tr>
                                <td>RSU Bungsu</td>
                                <td>022-4231550, 4217371</td>
                            </tr>
                            <tr>
                                <td>RSU Immanuel</td>
                                <td>022-5201656, 5201051</td>
                            </tr>
                            <tr>
                                <td>RS Mata Cicendo</td>
                                <td>022-4231281</td>
                            </tr>
                            <tr>
                                <td>RS Bedah Halmahera</td>
                                <td>022-4206061</td>
                            </tr>
                            <tr>
                                <td>RS Paru Dr. H.A Rotinsulu</td>
                                <td>022-2034446</td>
                            </tr>
                            <tr>
                                <td>RS Bina Sehat</td>
                                <td>022-5207964</td>
                            </tr>
                            <tr>
                                <td>RS Santosa</td>
                                <td>022-4248222</td>
                            </tr>
                            <tr>
                                <td>RS Ibu & Anak Pasteur</td>
                                <td>022-6072525, 60804422</td>
                            </tr>
                            <tr>
                                <td>RS Melinda</td>
                                <td>022-4222788</td>
                            </tr>
                            <tr>
                                <td>RS AMC</td>
                                <td>022-7781630</td>
                            </tr>
                            <tr>
                                <td>RS Hermina Arcamanik</td>
                                <td>022-87242525</td>
                            </tr>
                            <tr class="text-center">
                                <th colspan="2" class="bg-dark text-white">PMI</th>
                            </tr>
                            <tr>
                                <td>PMI Daerah Jawa Barat</td>
                                <td>022-2500095</td>
                            </tr>
                            <tr>
                                <td>Informasi & Layanan Transfusi darah</td>
                                <td>022-4207051, 4207052</td>
                            </tr>
                            <tr>
                                <td>Siaga P3K dan Layanan Bencana</td>
                                <td>022-4213858</td>
                            </tr>
                            <tr>
                                <td>Cabang Kabupaten Bandung di Soreang</td>
                                <td>022-5891313</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br> <br>

            <p>
            Jika Anda menghadapi situasi darurat, segera hubungi nomor-nomor
            tersebut dan berikan informasi yang diperlukan dengan jelas.
            </p>

            <p>
            Ingatlah untuk tetap tenang dan mengikuti petunjuk yang diberikan oleh
            pihak berwenang.
            </p>
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
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

  <!-- Bootstrap 5 JS -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}

{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
</body>

</html>