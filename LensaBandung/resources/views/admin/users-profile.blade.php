<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>LensaBandung - Admin</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

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
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
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
          <a class="nav-link" data-bs-target="#components-nav" href="{{route('profile')}}">
            <i class="bi bi-menu-button-wide"></i><span>Profile</span>
          </a>
          
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('kritikSaran')}}">
            <i class="bi bi-menu-button-wide"></i><span>Kritik dan Saran</span>
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
            <li class="breadcrumb-item active">Profil Walikota</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row justify-content-center">
          <div class="col-xl-9">
            <div class="card">
              <div
                class="card-body profile-card pt-4 d-flex flex-column align-items-center"
              >
              <a href="{{asset('foto_pengaduan/'.$data->foto)}}" class="glightbox">
                <img
                  src="{{asset('foto_pengaduan/'.$data->foto)}}"
                  alt="Profile"
                  class="rounded-circle"
                /></a>
                <h2>{{$data->nama_lengkap}}</h2>
                <h3>{{$data->jabatan}}</h3>
                <h6>{{$data->awal_menjabat}} - {{$data->akhir_menjabat}}</h6>
                <div class="social-links mt-2">
                  <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
                  <a
                    href="https://www.facebook.com/ema.sumarna.56"
                    class="facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a
                    href="https://www.instagram.com/sumarnaema/"
                    class="instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="linkedin"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-10">
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-overview"
                    >
                      Overview
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-edit"
                    >
                      Edit Profil
                    </button>
                  </li>

                  {{-- <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-change-password"
                    >
                      Ubah Kata Sandi
                    </button>
                  </li> --}}
                </ul>
                <div class="tab-content pt-2">
                  <div
                    class="tab-pane fade show active profile-overview"
                    id="profile-overview"
                  >
                    <h5 class="card-title">Tentang</h5>
                    <p class="small fst-italic">
                      {{$data->tentang}}
                    </p>

                    <h5 class="card-title">Detail Profil</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                      <div class="col-lg-9 col-md-8">{{$data->nama_lengkap}}</div>
                    </div>

                    <!-- <div class="row">
                      <div class="col-lg-3 col-md-4 label">Company</div>
                      <div class="col-lg-9 col-md-8">
                        Lueilwitz, Wisoky and Leuschke
                      </div>
                    </div> -->

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jabatan</div>
                      <div class="col-lg-9 col-md-8">{{$data->jabatan}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Kebangsaan</div>
                      <div class="col-lg-9 col-md-8">{{$data->kebangsaan}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Lahir</div>
                      <div class="col-lg-9 col-md-8">{{$data->lahir}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Awal Menjabat</div>
                      <div class="col-lg-9 col-md-8">{{$data->awal_menjabat}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Akhir Menjabat</div>
                      <div class="col-lg-9 col-md-8">{{$data->akhir_menjabat}}</div>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade profile-edit pt-3"
                    id="profile-edit"
                  >
                    <!-- Profile Edit Form -->
                    <form action="{{route('updateWalikota')}}" method="post" role="form" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                        <label
                          for="profileImage"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Foto Profil</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input type="file" name="foto" id="foto" class="form-control">

                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="fullName"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Nama Lengkap</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="nama_lengkap"
                            type="text"
                            class="form-control"
                            id="nama_lengkap"
                            value="Ema Sumarna"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="about"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Tentang</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <textarea
                            name="tentang"
                            class="form-control"
                            id="tentang"
                            style="height: 100px"
                          >
Dr. Drs. H. Ema Sumarna, M.Si. merupakan seorang birokrat berkebangsaan Indonesia. Kini beliau menjabat sebagai Pelaksana Harian Wali Kota Bandung untuk menggantikan sementara posisi Yana Mulyana</textarea
                          >
                        </div>
                      </div>


                      <div class="row mb-3">
                        <label
                          for="Job"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Jabatan</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="jabatan"
                            type="text"
                            class="form-control"
                            id="jabatan"
                            value="Walikota Bandung"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Country"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Kebangsaan</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="kebangsaan"
                            type="text"
                            class="form-control"
                            id="kebangsaan"
                            value="Indonesia"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Birth"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Lahir</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="lahir"
                            type="text"
                            class="form-control"
                            id="lahir"
                            value="7 Desember 1996"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Start"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Awal Menjabat</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="awal_menjabat"
                            type="text"
                            class="form-control"
                            id="awal_menjabat"
                            value="April 2023"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="End"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Akhir Menjabat</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="akhir_menjabat"
                            type="text"
                            class="form-control"
                            id="akhir_menjabat"
                            value="September 2023"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Simpan Perubahan
                        </button>
                      </div>
                    </form>
                    <!-- End Profile Edit Form -->
                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    {{-- <form>
                      <div class="row mb-3">
                        <label
                          for="currentPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Kata sandi sekarang</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="password"
                            type="password"
                            class="form-control"
                            id="currentPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="newPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Kata sandi baru</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="newpassword"
                            type="password"
                            class="form-control"
                            id="newPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="renewPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Konfirmasi kata sandi baru</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="renewpassword"
                            type="password"
                            class="form-control"
                            id="renewPassword"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Simpan
                        </button>
                      </div>
                    </form> --}}
                    <!-- End Change Password Form -->
                  </div>
                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy;  <strong><span>LensaBandung</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
