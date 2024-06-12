
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="events-id" content="f6kbF0uPfWorwOWvsynRE7pwH03u4AYIstu5WZn6" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title> MenuFeater Catering</title>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Favicon -->
    <!-- Menu-->
    <link href="img/favicon.ico" rel="icon">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
  </head>

  <body>
    <x-navbar/>

      <!-- END: Header-->

<!-- MODAL -->
<x-modal/>
<div class="banner-image-menu">
  <div class="banner-text-menu text-white text-center">
    <h1 class="text-italic text-white">KAMI SIAP MENERIMA KONSULTASI & PEMESANAN ANDA</h1>
  </div>
</div>
<div class="main-menu">
  <div class="container">
    <h2 class="text-center fw-bolder text-white">MENU KAMI</h2>
    <div class="product-menu">
      <div class="row row-cols-1 row-cols-lg-3">
        <?php $kategoriindex=0; $indikator=0; ?>
          @foreach ($menu as $k)
            <div class="col mt-5">
                <div data-aos="fade-up" class="card h-100 bg-transparent">
                <div id="carousel{{$kategoriindex}}" class="carousel menu slide" data-bs-ride="carousel">
                    <!-- Carousel indicators -->

                    <?php $x=0 ?>
                    @foreach ($k as $data)
                            <div class="carousel-item @if($x === 0) active @endif">
                                <img src="images/{{$data->gambar}}" class="img-fluid card-img-top" alt="{{$data->kategori}}" />
                                <div class="card-body mb-5">
                                <h4 class="card-title text-warning text-center">
                                    {{$data->kategori}}
                                </h4>
                                <p class="card-text text-center text-white">
                                    {{$data->nama}}
                                </p>
                                </div>
                            </div>
                            <?php $x++ ?>
                        @endforeach


                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{$kategoriindex}}" data-bs-slide="prev" >
                    <span class="bi bi-arrow-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{$kategoriindex}}" data-bs-slide="next">
                    <span class="bi bi-arrow-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                </div>
            </div>
            <?php $kategoriindex++ ?>
          @endforeach
      </div>
    </div>
  </div>
</div>
<!-- Footer Start -->
<x-footer/>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
 <script src="https://yellowfitkitchen.com/frontend/js/bootstrap.min.js"></script>
    <script src="https://yellowfitkitchen.com/frontend/js/theme.js"></script>
    <script src="https://yellowfitkitchen.com/frontend/js/tambahan.js"></script>
    <script src="https://yellowfitkitchen.com/app-assets/vendors/js/jquery/jquery.min.js"></script>
    <script src="https://yellowfitkitchen.com/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="https://yellowfitkitchen.com/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://yellowfitkitchen.com/frontend/js/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        autoplay:true,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            300:{ items:1, nav:false },
            600:{ items:1, nav:false },
            900:{ items:2 },
            1000:{ items:2 },
        }
    })
    AOS.init();
    </script>
    {{-- <script>
        $('.item-kategori:first').addClass('active')
    </script> --}}
      </body>
</html>
