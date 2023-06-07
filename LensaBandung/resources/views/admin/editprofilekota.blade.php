<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profile Kota</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

     <!-- ======= Header ======= -->
     <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('homeAdmin')}}" class="logo d-flex align-items-center">
          <img src="{{asset('assets/img/logo.png')}}" alt="" />
          <span class="d-none d-lg-block">LensaBandung</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span> </a
            ><!-- End Notification Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
            >
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>
            </ul>
            <!-- End Notification Dropdown Items -->
          </li>
          <!-- End Notification Nav -->

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span> </a
            ><!-- End Messages Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
            >
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-1.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-2.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-3.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>
            </ul>
            <!-- End Messages Dropdown Items -->
          </li>
          <!-- End Messages Nav -->

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

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endguest
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('homeAdmin')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="components-nav" href="{{route('detailAdmin')}}">
            <i class="bi bi-menu-button-wide"></i><span>Pengaduan</span>
          </a>
          
        </li><!-- End Components Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('profile')}}">
            <i class="bi bi-menu-button-wide"></i><span>Profile</span>
          </a>
          
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('kritikSaran')}}">
            <i class="bi bi-menu-button-wide"></i><span>Kritik dan Saran</span>
          </a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('pengguna')}}">
            <i class="bi bi-menu-button-wide"></i><span>Daftar Pengguna</span>
          </a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-target="#components-nav" href="{{route('kota')}}">
            <i class="bi bi-menu-button-wide"></i><span>Edit Profile Kota</span>
          </a>
          
        </li>
      </ul>
  
    </aside><!-- End Sidebar-->

    <main id="main" class="main mb-3">
      <div class="pagetitle">
        <h1>Profil</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('homeAdmin')}}">Home</a></li>
            <!-- <li class="breadcrumb-item">Users</li> -->
            <li class="breadcrumb-item active">Edit Profile Kota</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

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
  
    <!-- City Profile Section -->
    <section id="profil-kota" class="profil-kota mt-5">
      <div class="container mt-1">
          <div class="row">
              <div class="col-md-6">
                
              </div>
              <div class="col-md-6">
                <form action="{{route('updateProfile')}}" method="post" role="form" enctype="multipart/form-data">
                  @csrf
                  <textarea class="form-control" method="" placeholder="Leave a comment here" id="deskripsi" name="deskripsi"></textarea>
                  <label for="deskripsi">Masukkan Deskripsi Kota</label><br>
                  <button type="submit" class="btn btn-primary">Edit</button>
                </form>

                  </div>
                  </div>
                </form>
                  
              </div>
            </div>
      </div>
    </section>
  
      <!-- Fenomena Section -->
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
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>

</body>

</html>