<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>TOP UP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon" /> -->
    <link rel="icon" type="image/x-icon" href="/img/logo.png"/>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!--FONT AWESOME-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- Google Web Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap"
      rel="stylesheet"

    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.4.16/css/sweetalert2.min.css"> -->


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        .tipegame {
            display: none;
        }
    </style>


  </head>

  <body>

    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 shadow">
        <a href="{{ url('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-6">
            <img src="img/logo.png" class="pl-1">
            <h2 class="m-2 text-primary">Digital Store</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-lg-0 justify-content-center">
                <div class="input-group mb-3 h-25 mt-3 mx-5">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search Game" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    {{-- <div id="searchResults" class="search-results"></div> --}}
                    <div class="input-group-append mr-5">
                      <button class="btn btn-outline-info btn-primary" type="button">Search</button>
                    </div>
                    <div id="searchResults" class="search-results mt-0 flex-column align-items-center position-absolute"></div>
                </div>
                <a href="{{ url('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                <a href="{{ url('login') }}" class="login-form nav-item btn btn-primary py-4 px-lg-5 d-lg-block">LOGIN</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">TOP UP</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="{{ url('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              TOP UP
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

  <!-- Product Start -->
  <form id="topupForm_{{ $topup_item }}" method="POST" action="{{ route('topup_form') }}">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="section-header text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 400px;">
                            <h2 class="mb-3" style="font-size: 40px;">{{ $game['namagame'] }}</h2>
                            <input type="hidden" name="namagame" id="namagame" value="{{ $game['namagame'] }}" />

                            <h2 class="mb-3 tipegame" style="font-size: 40px; display: none;">{{ $game['tipegame'] }}</h2>
                            <input type="hidden" name="tipegame" id="tipegame" value="{{ $game['tipegame'] }}" />

                            <img class="img-fluid w-100" src="{{ asset($game['foto_game']) }}">
                        </div>
                    </div>
                    <div class="col-lg-7 text-start wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-start mb-3 pb-3">
                            <!-- @yield('form') -->
                        </div>
                    </div>
                    <div class="col-lg-12 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-secondary border-2 active" data-bs-toggle="pill" href="#tab-1">ALL</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-secondary border-2" data-bs-toggle="pill" href="#tab-2"><?= $genesis?></a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-secondary border-2" data-bs-toggle="pill" href="#tab-3"><?= $welkin ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($topup_item as $index => $item)
                                @csrf
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset($item['foto_item']) }}" alt="{{ $item['item'] }}">
                                        </div>
                                        <div class="text-center p-4">
                                            <p class="d-block h6 mb-2">{{ $item['item'] }}</p>
                                            <input type="hidden" value="{{ $item['item'] }}" name="item[{{ $index }}]">
                                            <span class="text-primary me-1">Rp.{{ number_format($item['promo']) }}</span>
                                            <input type="hidden" name="promo[{{ $index }}]" value="{{ $item['promo'] }}">
                                            <span class="text-body text-decoration-line-through">Rp.{{ number_format($item['harga']) }}</span>
                                        </div>
                                        <div class="d-grid gap-2 col-12 mx-auto">
                                            <button type="submit" class="btn btn-primary fw-medium enter topuppay" name="submit_topup" value="{{ $index }}" >Beli</button>
                                            <!-- <script>
                                              document.getElementById('topupForm_{{ $topup_item }}').addEventListener('submit', function(event) {
                                                Swal.fire({
                                                title: "Confirmation",
                                                text: "Are you sure with Your Choice?",
                                                imageUrl: "{{ asset($item['foto_item']) }}",
                                                imageWidth: 500,
                                                imageHeight: 250,
                                                // imageAlt: "",
                                                showConfirmButton: true,
                                                showDenyButton: true,
                                                confirmButtonText: "Yes",
                                                denyButtonText: `No`,
                                                confirmButtonColor: "#00ff55",
                                                cancelButtonColor: "#999999",
                                                reverseButtons: true
                                              }).then((event) => {
                                                if (!result.isConfirmed) {
                                                  Swal.fire("Canceled", "", "info");
                                                }
                                              })

                                                // if (!confirmBeli) {
                                                //     event.preventDefault();
                                                // }
                                              });
                                            </script> -->
                                          </div>
                                    </div>
                                </div>
                        @endforeach
                        </div>
                    </div>

                      <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            @foreach ($topup_item as $index => $item)
                                @if (Str::contains($item['item'], ['Genesis', 'Diamond', 'Shard','Tanium']))
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item">
                                            <div class="position-relative bg-light overflow-hidden">
                                                <img class="img-fluid w-100" src="{{ asset($item['foto_item']) }}" alt="{{ $item['item'] }}">
                                            </div>
                                            <div class="text-center p-4">
                                                <p class="d-block h6 mb-2">{{ $item['item'] }}</p>
                                                <input type="hidden" value="{{ $item['item'] }}" name="item[{{ $index }}]">
                                                <span class="text-primary me-1">Rp.{{ number_format($item['promo']) }}</span>
                                                <input type="hidden" name="promo[{{ $index }}]" value="{{ $item['promo'] }}">
                                                <span class="text-body text-decoration-line-through">Rp.{{ number_format($item['harga']) }}</span>
                                            </div>
                                            <div class="d-grid gap-2 col-12 mx-auto">
                                                <button type="submit" class="btn btn-primary fw-medium enter topuppay" name="submit_topup" value="{{ $index }} " onclick="showPaymentOptions()">Beli</button>
                                              </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            @foreach ($topup_item as $item)
                                @if (Str::contains($item['item'], ['Welkin', 'Weekly', 'Pass']))
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item">
                                            <div class="position-relative bg-light overflow-hidden">
                                                <img class="img-fluid w-100" src="{{ asset($item['foto_item']) }}" alt="{{ $item['item'] }}">
                                            </div>
                                            <div class="text-center p-4">
                                                <p class="d-block h6 mb-2">{{ $item['item'] }}</p>
                                                <input type="hidden" value="{{ $item['item'] }}" name="item[{{ $index }}]">
                                                <span class="text-primary me-1">Rp.{{ number_format($item['promo']) }}</span>
                                                <input type="hidden" name="promo[{{ $index }}]" value="{{ $item['promo'] }}">
                                                <span class="text-body text-decoration-line-through">Rp.{{ number_format($item['harga']) }}</span>
                                            </div>
                                            <div class="d-grid gap-2 col-12 mx-auto">
                                                <button type="submit" class="btn btn-primary fw-medium enter topuppay" name="submit_topup" value="{{ $index }}">Beli</button>
                                              </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
          document.getElementById("topupForm_{{ $topup_item }}").addEventListener("click", function(event) {
            event.preventDefault();
            Swal.fire({
              title: "You Must Login First",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              confirmButtonText: "Ok"
            }).then((result) => {
              if (result.isConfirmed) {
                document.getElementById(".login-form").submit();
              }
            });
          });
        </script>
    </form>
<!-- Product End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-8">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Arief Rahman Hakim No.100, Klampis Ngasem, Kec. Sukolilo, Surabaya, Jawa Timur 60117</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            </div>
            <div class="col-lg-4 col-md-8">
                <h4 class="text-light mb-3">Follow us</h4>
                    <!-- Facebook -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #3b5998"
                    href="https://www.facebook.com"
                    role="button"
                    ><i class="fab fa-facebook-f"></i
                    ></a>

                    <!-- Twitter -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #55acee"
                    href="https://twitter.com"
                    role="button"
                    ><i class="fab fa-x-twitter"></i
                    ></a>

                    <!-- Google -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #dd4b39"
                    href="https://www.youtube.com"
                    role="button"
                    ><i class="fab fa-youtube"></i
                    ></a>

                    <!-- Instagram -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #ac2bac"
                    href="https://www.instagram.com"
                    role="button"
                    ><i class="fab fa-instagram"></i
                    ></a>

                    <!-- Linkedin -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #0e76a8"
                    href="https://id.linkedin.com"
                    role="button"
                    ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <!-- Github -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #333333"
                    href="https://www.tiktok.com/"
                    role="button"
                    ><i class="fab fa-tiktok"></i
                    ></a>
                    <h4 class="text-light mb-1 mt-3">Join us</h4>
                    <div class="d-flex pt-1 ">
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #25D366"
                        href="https://www.whatsapp.com"
                        role="button"
                        ><i class="fab fa-whatsapp"></i
                        ></a>

                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #0088CC"
                        href="https://web.telegram.org/"
                        role="button"
                        ><i class="fab fa-telegram"></i
                        ></a>

                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #7289DA"
                        href="https://discord.com/"
                        role="button"
                        ><i class="fab fa-discord"></i
                        ></a>
                    </div>
            </div>
            <div class="col-lg-3 col-md-8">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">PT. Digital Store</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.4.16/sweetalert2.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>


</html>
