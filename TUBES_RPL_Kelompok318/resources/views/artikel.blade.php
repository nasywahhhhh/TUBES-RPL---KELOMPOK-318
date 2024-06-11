
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="events-id" content="cOV8wYZKR0BSv0JCstqe4Bg9OSLjXIjepBxWDe8G" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/bootstrap.min.css" />
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/owl.carousel.min.css">
     <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/owl.theme.default.min.css">

    <!-- Favicon -->
    <!-- Price-->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/bootstrap.min.css" />

    <title>Feater Catering Kitchen Diet & Healthy Catering No.1 Di Indonesia</title>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
</head>

<body>
  <style>
    /* Custom CSS untuk memberikan margin bawah pada navbar */
    .mb-navbar {
      margin-bottom: 20px;
    }

    /* Custom CSS untuk menambahkan margin di atas dan bawah pada jumbotron */
    .jumbotron {
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .jumbotron {
      margin-top: 100px; /* Adjust this value as needed */
    }
    body {
      background-color: #262D3F;
    }
    .whitext {
      color: #FEA116;
  }
  </style>
</head>
<br><br><br><br><br><br>
<body>
  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Jumbotron with Our Menu title -->
  <div class="row justify-content-center mb-4"> <!-- Menambahkan kelas justify-content-center dan mb-4 untuk memberikan margin bawah -->
    <div class="col text-center">
      <h1 class="display-4 mt-4" style="color: #FEA116; font-weight: bold;">ARTICLE</h1> <!-- Menambahkan kelas mt-4 untuk memberikan margin atas -->
    </div>
  </div>
  <section class="container mb-ourproducts rounded" style="background-color: #0F172B">

  <!-- MODAL -->
 

  <!--Article-->
  <div class="main-article">
  <div class="text-white latest-article">
    <div class="container px-lg-5 pt-lg-5">
      <h5 class="whitext">LATEST ARTICLE</h5>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tips Diet untuk Menurunkan Berat Badan</h5>
              <p class="card-text">Oleh dr. Wahyu Ika Wardhani, MBiomed, MGizi, SpGK.</p> <br>
              <a href="https://rs.ui.ac.id/umum/berita-artikel/artikel-populer/tips-diet-untuk-menurunkan-berat-badan" class="btn btn-primary">SEE MORE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">7 Rekomendasi Olahraga Menurunkan Berat Badan</h5>
              <p class="card-text">Oleh Tim Medis Siloam Hospital.</p>
              <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/olahraga-untuk-menurunkan-berat-badan" class="btn btn-primary">SEE MORE</a>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pentingnya Olahraga dan Pola Makan Sehat</h5>
              <p class="card-text">Oleh dr. Verury Verona Handayani.</p>
              <a href="https://www.halodoc.com/artikel/alasan-pentingnya-olahraga-dan-pola-makan-sehat-untuk-diet" class="btn btn-primary">SEE MORE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">9 Makanan Rendah Kalori yang Kaya Nutrisi</h5>
              <p class="card-text">Oleh Tim Medis Siloam Hospital.</p>
              <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/makanan-rendah-kalori-untuk-diet" class="btn btn-primary">SEE MORE</a>
            </div>
          </div>
        </div>
      </div>
    <br><br><br>
    </section>

    <br>
    <!-- Footer -->
    <x-footer style="background-color: #0F172B;"></x-footer>

            @if($artikel->count() > 0)
            @foreach ($artikel as $data)
            <div class="col-lg-4">
                <div class="card h-100 bg-transparent border-0">
                <a href="//{{$data->url}}" target="_blank" class="text-decoration-none text-white">
                    <img src="/images/{{$data->gambar}}" class="card-img-top" alt="FeaterCatering tips and trick article" width="236" height="236">
                    <div class="card-body">

                    <h6 class="card-title text-white">{{$data->nama}}</h6>
                    <div class="card-footer">
                        <span><small class="card-text">16 hours ago</small></span>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            @else
            @endif
          </div>
        </div>
    </div>
  </div>
</div>

       


        <!-- Back to Top
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        -->
      </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
