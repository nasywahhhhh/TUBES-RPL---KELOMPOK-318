
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="events-id" content="uRXCrJFKxYJdmoD763X7xZNa5dq1S1j5Ulk1u7Rn"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/owl.carousel.min.css">
        <link rel="stylesheet" href="https://yellowfitkitchen.com/frontend/css/owl.theme.default.min.css">
        <title>Schedule Feater Catering</title>
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Favicon -->
        <!-- Menu-->
        <link href="img/favicon.ico" rel="icon">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/style1.css" rel="stylesheet">
        <script type="text/javascript">
            var onloadCallback = function() {
                grecaptcha.enterprise.render('g-recaptcha', {
                    'sitekey': '6LdF0J0kAAAAAMO-4HtmllEu1IfmvIIq98SjAqla',
                });
            };
        </script>
        <meta name="description" content="Program YellowFit Menawarkan Solusi Mudah Bagi Masyarakat Indonesia Untuk Diet Dan Hidup Sehat | Jaminan Uang Kembali 100% | Nutritionist approved | Affordable Price | Free Delivery Fee | Rasa Dijamin Lebih Enak | Konsultasi Gratis">
        <noscript>
            <img height="1" width="1" src="https://www.facebook.com/tr?id=306444486952151&ev=PageView&noscript=1"/>
        </noscript>
        <style>
            .first_button {
                animation: shake 0.82s cubic-bezier(.36, .07, .19, .97) both infinite;
                transform: translate3d(0, 0, 0);
                backface-visibility: hidden;
                perspective: 1000px;
            }

            @keyframes shake {
                10%, 90% {
                    transform: translate3d(-1px, 0, 0);
                }

                20%, 80% {
                    transform: translate3d(2px, 0, 0);
                }

                30%, 50%, 70% {
                    transform: translate3d(-4px, 0, 0);
                }

                40%, 60% {
                    transform: translate3d(4px, 0, 0);
                }
            }
        </style>
    </head>
    <body>
        <!-- BEGIN: Header-->
        <!-- Navbar -->
        <x-navbar/>

      <div class="schedule-image">
        <div class="banner-text-pricelist text-white text-center">
          <h1 class="fst-italic text-white">Schedule</h1>
        </div>
      </div>
  </div>
</div>
<!-- END: Header-->
        <!-- MODAL -->
        <x-modal/>
        <div class="banner-menuminggudepan">
            <div class="container mt-5 ps-5 pe-5">
                <div class="row justify-content-between">
                    <div class="col-lg-6 text-white mb-3">
                    <div class="col-lg-4">
                    </div>
                </div>
                <div class="carousel-ordermd">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="jadwal">
                            @foreach ($jadwal as $data)
                                <div>
                                    <span class="bg-warning d-block mb-3 p-2 text-center rounded fw-bold">{{date_format(date_create($data->waktu),"l, j F Y");}}</span>
                                    <h6 class="text-warning">LUNCH :</h6>
                                    <p class="text-white">{{$data->lunch}}</p>
                                    <h6 class="text-warning">DINNER :</h6>
                                    <p class="text-white">{{$data->dinner}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-white">
                    <div class="modal-header modal-ordermd">
                        <h3 class="modal-title fw-bolder" id="exampleModalLabel"></h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="listcontact" class="modal-body">
                        <div class="contactdetail"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
    <x-footer/>
    <!-- Footer End -->
        <script src="https://yellowfitkitchen.com/frontend/js/bootstrap.min.js"></script>
        <script src="https://yellowfitkitchen.com/frontend/js/theme.js"></script>
        <script src="https://yellowfitkitchen.com/frontend/js/tambahan.js"></script>
        <script src="https://yellowfitkitchen.com/app-assets/vendors/js/jquery/jquery.min.js"></script>
        <script src="https://yellowfitkitchen.com/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
        <script src="https://yellowfitkitchen.com/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://yellowfitkitchen.com/frontend/js/owl.carousel.min.js"></script>
        </script>
    </body>
</html>
