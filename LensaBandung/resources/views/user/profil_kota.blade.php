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
        <i class="bi bi-phone"></i> 082234231000
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
    <div class="container mt-5">
        {{-- Carousel --}}
        <div class="col text-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://static.dw.com/image/44565755_605.jpg" class="d-block w-100" alt="..." style="width:50%; height:50%;">
                    </div>
                    <div class="carousel-item">
                      <img src="https://bobobox.com/blog/wp-content//uploads/2022/10/WhatsApp-Image-2022-10-23-at-5.53.18-AM.jpeg" class="d-block w-100" alt="..." style="width:50%; height:50%;">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.javatravel.net/wp-content/uploads/2021/12/Jembatan-Pasupati-Bandung.jpg" class="d-block w-100" alt="..." style="width:50%; height:50%;">
                    </div>
                  </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
  </section>

  {{-- City Profile Section --}}
  <section id="profil-kota" class="profil-kota mt-5">
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-6">
              <img src="{{ asset('assets/img/gedungsate.jpg') }}" alt="Gambar" class="img-fluid">
            </div>
            <div class="col-md-6">
              <h3><strong>Kota Bandung</strong></h3>
              <p style="text-align:justify;">Kota Bandung merupakan ibu kota provinsi Jawa Barat, terletak di antara 107 derajat bujur timur dan 6 derajat 55 menit lintang selatan. Secara geografis, kota ini memiliki lokasi yang strategis dan baik untuk komunikasi, ekonomi, serta keamanan. Kota Bandung memiliki ketinggian 768 meter di atas permukaan laut dengan titik tertinggi di bagian utara mencapai 1.050 meter dan titik terendah di bagian selatan sekitar 675 meter di atas permukaan laut. Kota Bandung memiliki keindahan panorama yang bervariasi, dengan bagian selatan yang cenderung datar dan bagian utara yang berbukit-bukit. Terdapat variasi jenis tanah di kota Bandung, di mana jenis andosol tersebar di bagian tengah dan barat, jenis alluvial kelabu di bagian selatan dan timur, dan lapisan tanah alluvial hasil letusan gunung Takuban Perahu. Iklim di kota Bandung dipengaruhi oleh iklim pegunungan yang lembab dan sejuk, dengan suhu rata-rata 23,5 derajat Celsius, curah hujan rata-rata 200,4 mm, dan jumlah hari hujan rata-rata 21,3 hari per bulan pada tahun 1998.</p>
                {{-- <br>
                <h3><strong>Visi & Misi</strong></h3> --}}
            </div>
          </div>
    </div>
  </section>

    {{-- Fenomena Section --}}
    <section id="profil-kota" class="profil-kota">
        <div class="container mt-1 mb-3">
            <h2 style="margin-bottom: 50px;"><strong>Fenomena Sosial</strong></h2>
            <div class="row">
                <div class="col-md-4">
                  <div style="text-align: center; margin-bottom: 120px;">
                    <i class="fas fa-cloud-sun fa-3x mb-3" style="color: #1e6cb5;"></i>
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">Bencana Alam</h4>
                    <p style="font-size: 16px; line-height: 1.5;">Kota Bandung merupakan salah satu kota di Indonesia yang rentan terhadap bencana alam, terutama pada musim hujan. Beberapa jenis bencana alam yang dapat terjadi di Bandung antara lain banjir, tanah longsor, dan erosi.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div style="text-align: center; margin-bottom: 120px;">
                    <i class="fas fa-car fa-3x mb-3" style="color: #912bda;"></i>
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">Kemacetan</h4>
                    <p style="font-size: 16px; line-height: 1.5;">Kemacetan lalu lintas merupakan masalah yang cukup serius di Kota Bandung. Jumlah kendaraan yang terus bertambah setiap tahunnya, infrastruktur jalan yang tidak memadai, serta kurangnya penggunaan transportasi umum dan alternatif lainnya menjadi penyebab utama kemacetan di Kota Bandung.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div style="text-align: center; margin-bottom: 120px;">
                    <i class="fas fa-people-robbery fa-3x mb-3" style="color: #d84218;"></i>
                     <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">Pencurian</h4>
                    <p style="font-size: 16px; line-height: 1.5;">Seperti halnya di kota-kota besar lainnya di Indonesia, tindak kejahatan pencurian juga terjadi di Kota Bandung. Beberapa faktor yang menyebabkan terjadinya tindak kejahatan tersebut antara lain kepadatan penduduk dan aktivitas ekonomi yang tinggi, kurangnya pengamanan pada tempat-tempat umum seperti pusat perbelanjaan, dan kurangnya kesadaran masyarakat akan pentingnya keamanan.</p>
                  </div>
                </div>

                <div class="col-md-4">
                    <div style="text-align: center; margin-bottom: 30px;">
                      <i class="fas fa-person-circle-exclamation fa-3x mb-3" style="color: #FABE58;"></i>
                      <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">Tindakan Asusila</h4>
                      <p style="font-size: 16px; line-height: 1.5;">Tindakan asusila merupakan tindakan yang sangat merugikan korban dan masyarakat pada umumnya, dan terjadi tidak hanya di Kota Bandung tetapi di seluruh dunia. Kota Bandung sendiri tidak luput dari tindakan tersebut. Beberapa faktor yang menyebabkan terjadinya tindakan asusila di Kota Bandung antara lain adanya kesenjangan sosial-ekonomi, serta pengaruh dari media dan teknologi.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div style="text-align: center; margin-bottom: 30px;">
                      <i class="fas fa-pills fa-3x mb-3" style="color: #005307;"></i>
                      <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">Zat & Obat Terlarang</h4>
                      <p style="font-size: 16px; line-height: 1.5;">
Seperti kota-kota besar lainnya di Indonesia, penggunaan zat dan obat terlarang juga terjadi di Kota Bandung. Beberapa faktor yang mempengaruhi terjadinya penggunaan zat dan obat terlarang di Kota Bandung antara lain adanya faktor sosial seperti tekanan ekonomi, masalah keluarga, pergaulan bebas, dan pengaruh teman sebaya.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div style="text-align: center; margin-bottom: 30px;">
                      <i class="fas fa-dice fa-3x mb-3" style="color: #714b0a;"></i>
                      <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">Perjudian</h4>
                      <p style="font-size: 16px; line-height: 1.5;">Perjudian merupakan kegiatan yang ilegal di Indonesia, termasuk di Kota Bandung. Namun, masih terdapat tempat-tempat yang menjadi sarang perjudian seperti tempat permainan kartu dan mesin slot ilegal yang terkadang sulit diawasi oleh pihak keamanan.</p>
                    </div>
                  </div>
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
              Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan <br>
              Citarum, Kec. Bandung Wetan,<br>
              Kota Bandung, Jawa Barat 40115 <br><br>
              <strong>Telepon:</strong> 082234231000<br>
              <strong>Email:</strong> lensabandung@gmail.com<br>
            </p>
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