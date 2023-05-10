<!doctype html>
  <html lang="en">
    <head>
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
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/webstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


      <title>LensaBandung</title>
      <style type="text/css">
		body{
      background-image: color white;
      background-size: cover;  
      padding: 0 10px;
		}

	</style>
    </head>
    <body>
   

<br/>
<br/>
<br/>


    <!-- Card Login -->
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-10 ">
                     <div class="card  " style="margin-top:70px; width: 100%;">
                      <div class="card-body p-4">
                              <h4 class="card-title text-center">Profile</h4>
                              <br>
                              <form method="POST" action="{{route('updateProfileku')}}">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-3 col-form-label"><b>Email</b></label>
                                    <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                  <div class="mb-3 row">
                                      <label for="nama" class="col-sm-3 col-form-label"><b>Nama</b></label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama" name="nama">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="no_hp" class="col-sm-3 col-form-label"><b>Nomor Handphone</b></label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="no_hp" name="no_hp">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="mb-3 row">
                                      <label for="password" class="col-sm-3 col-form-label"><b>Kata Sandi</b></label>
                                      <div class="col-sm-9">
                                      <input type="password" class="form-control" id="password" name="password">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="password2" class="col-sm-3 col-form-label"><b>Konfirmasi Kata Sandi</b></label>
                                      <div class="col-sm-9">
                                      <input type="password" class="form-control" id="password2" name="password2">
                                      </div>
                                  </div>

                                  <Center> <button type="submit" name="simpan" class="btn btn-dark" style= "width:140px">Simpan</button>
                                  &emsp;
                                 <a href="{{route('home')}}" class="btn btn-dark" style="width:140px">Cancel</a></Center>
                              </form>       
                      </div>
                  </div> 
              </div>
          </div>
      </div>
    <!-- End Card Login  -->

      
    </body>
  </html>