<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon" /> -->
    <link rel="icon" type="image/x-icon" href="/img/login.png" />

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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
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
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 shadow"
    >
      <a
        href="dashboard.html"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >
        <img src="img/logo.png" class="pl-1" />
        <h2 class="m-2 text-primary">Digital Store</h2>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-lg-0 justify-content-center">
          <div class="input-group mb-3 h-25 mt-3 mx-5">
            <input
              type="text"
              class="form-control"
              placeholder="Search Game"
              aria-label="Recipient's username"
              aria-describedby="basic-addon2"
            />

            <div class="input-group-append mr-5">
              <button class="btn btn-outline-info btn-primary" type="button">
                Search
              </button>
            </div>
          </div>
          <a href="{{ url('dashboard') }}" class="nav-item nav-link">Dashboard</a>
          <a href="{{ url('aboutlogged') }}" class="nav-item nav-link active">About</a>
          <a href="{{ url('contactlogged') }}" class="nav-item nav-link">Contact</a>

          <div class="btn-group px-1">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        @auth
                            {{ Auth::user()->fullname }}
                        @else
                            User Accounts
                        @endauth
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('setting') }}">Setting</a></li>
                        <li>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>

                <script>
                    document.getElementById('logout-form').addEventListener('submit', function(event) {
                        // Pastikan Anda mengkonfirmasi logout jika diperlukan
                        var confirmLogout = confirm('Apakah Anda yakin ingin logout?');

                        // Jika pengguna memilih untuk melanjutkan logout, lanjutkan dengan mengirim formulir
                        if (!confirmLogout) {
                            event.preventDefault();
                        }
                    });
                </script>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="{{ url('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              About
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="section-title text-center">
          <h1 class="display-5 mb-5">Team Members</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item">
              <div class="overflow-hidden position-relative">
                <img class="img-fluid" src="img/dimas.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div
                class="text-center border border-5 border-light border-top-0 p-4"
              >
                <h5 class="mb-0">Dimas Rifqi Ramadhani</h5>
                <small>Font-End & Back-End</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item">
              <div class="overflow-hidden position-relative">
                <img class="img-fluid" src="img/ryan.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div
                class="text-center border border-5 border-light border-top-0 p-4"
              >
                <h5 class="mb-0">Ryan Gading Abdullah</h5>
                <small>Front-End</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item">
              <div class="overflow-hidden position-relative">
                <img class="img-fluid" src="img/nanda1.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div
                class="text-center border border-5 border-light border-top-0 p-4"
              >
                <h5 class="mb-0">Handi Firstyanda Resi Wibowo</h5>
                <small>Back-End</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-5 col-md-8">
            <h4 class="text-light mb-4">Address</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Jl. Arief Rahman Hakim
              No.100, Klampis Ngasem, Kec. Sukolilo, Surabaya, Jawa Timur 60117
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+012 345 67890
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@example.com
            </p>
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
            <div class="d-flex pt-1">
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #25d366"
                href="https://www.whatsapp.com"
                role="button"
                ><i class="fab fa-whatsapp"></i
              ></a>

              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #0088cc"
                href="https://web.telegram.org/"
                role="button"
                ><i class="fab fa-telegram"></i
              ></a>

              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #7289da"
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
              &copy; <a class="border-bottom" href="#">PT. Digital Store</a>,
              All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By
              <a class="border-bottom" href="https://htmlcodex.com"
                >HTML Codex</a
              >
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
