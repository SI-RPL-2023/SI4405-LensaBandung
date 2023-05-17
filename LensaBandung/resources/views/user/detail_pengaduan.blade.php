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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



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
              <strong>Telepon:</strong> 082234231000<br>
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
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
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
        <h2 class="mb-5">Detail Pengaduan</h2>
    </div>

    <!-- Card -->
    <div class="card w-50 container">
      <div class="card-body">
        <h4 class="card-title">                      
          @switch($data->kategori)
            @case(2)
              Bencana Alam
              @break
            @case(3)
              Kemacetan  
            @break
            @case(4)
              Pencurian
            @case(5)
              Tindak Asusila
            @break
          @endswitch
        </h4>
        <a href="{{asset('foto_pengaduan/'.$data->foto)}}" class="glightbox"><img src="{{asset('foto_pengaduan/'.$data->foto)}}" class="menu-img img-fluid" alt="" width="400cm"></a>
        <p class="card-text mt-3">Nama Pelapor: {{$data->nama_pelapor}}</p>
        <p class="card-text mt-2">Lokasi Kejadian: {{$data->lokasi_kejadian}}</p>
        <p class="card-text mt-2">Deskripsi: {{$data->detail_kejadian}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="container mt-5">
        <h3>
            Komentar
        </h3>
        <hr>
    </div>

    @foreach ($komentar as $item)
      
    
    <div class="card w-100 container my-3">
        <div class="card-body bg-light">
            <h6 class="card-title"><strong>{{$item->nama_komentator}}</strong></h6>
            <p class="card-text">{{$item->komentar}}</p>
        </div>
    </div>
  @endforeach

    <div class="container form-group mt-5">
      <form action="{{url('detail-pengaduan', $data['id'])}}" method="post" role="form" enctype="multipart/form-data">
        @csrf
        <textarea name="komentar" class="form-control" placeholder="Tulis komentar!" id="komentar" cols="15" rows="5"></textarea>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>  
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

  <!-- DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#example').DataTable({
            scrollX: true,
        });
    });
  </script>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>