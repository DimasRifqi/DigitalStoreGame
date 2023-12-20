<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Digital Store - Setting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="icon" type="image/x-icon" href="/img/logo.png" />

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
        href="{{ url('dashboard') }}"
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
          <a href="{{ url('dashboard') }}" class="nav-item nav-link"
            >Dashboard</a
          >
          <a href="{{ url('aboutlogged') }}" class="nav-item nav-link">About</a>
          <a href="{{ url('contactlogged') }}" class="nav-item nav-link">Contact</a>
          <div class="btn-group px-1">
            <button
              type="button"
              class="btn btn-primary dropdown-toggle"
              data-bs-toggle="dropdown"
            >
              @auth
              {{ Auth::user()->fullname }}
              @else
                  User Accounts
              @endauth
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" href="{{ url('setting') }}">Setting</a></li>
              <li>
                <form id="logout-form" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </div>
          <script>
            document.getElementById("logout-form").addEventListener("click", function(event) {
              event.preventDefault();
              Swal.fire({
                title: "Are you sure you want Log Out?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes"
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire({
                    title: "Logged Out!",
                    text: "See You Soon",
                    icon: "success"
                  });
                  document.getElementById("logout-form").submit();
                } else {
                  Swal.fire({
                    title: "Log Out Canceled",
                    text: "You have canceled log out",
                    icon: "warning"
                  });
                  event.preventDefault();
                }
              });
            });
          </script>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <section
      class="vh-95"
      style="background: url(img/bgGambar.png); background-size: cover"
    >
      <div class="container py-5 h-0">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-8">
            <div class="card" style="border-radius: 1rem">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    src="img/logosetting.png"
                    alt="update form"
                    class="img-fluid"
                    style="border-radius: 1rem 0 0 1rem; margin: 35% 5%"
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <img src="img/logo.png" class="fa-2x me-3" />
                      <span class="h1 fw-bold mb-0 text-uppercase"
                        ><u>Update</u></span
                      >
                    </div>

                    <form id="fullname-form" method="POST" action="{{ route('user.update') }}">
                      @csrf
                      <div class="mb-2">
                        <!-- <div class="label mb-2">
                          <h5 class="fw-bold">Username</h5>
                        </div> -->
                        <div class="d-flex bd-highlight">
                          <div class="form-floating w-100 bd-highlight">
                            <input
                              type="text"
                              class="form-control"
                              id="fullname"
                              name="fullname"
                              placeholder="fullname"/>

                            @error('fullname')

                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>

                            @enderror

                            <label for="name">
                              @auth
                              {{ Auth::user()->fullname }}
                              @else
                                  User Accounts
                              @endauth
                            </label>
                          </div>
                          <div class="p-1 flex-shrink-5 bd-highlight">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <script>
                              document.getElementById('fullname-form').addEventListener('submit', function(event) {
                                  // Pastikan Anda mengkonfirmasi update fullname jika diperlukan
                                  var updateName = confirm('Apakah Anda yakin ingin Update Nama?');

                                  // Jika pengguna memilih untuk melanjutkan update fullname, lanjutkan dengan mengirim formulir
                                  if (!updateName) {
                                      event.preventDefault();
                                  }
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </form>

                    <form id="email-form" method="POST" action="{{ route('user.update') }}">
                      @csrf
                      <div class="mb-2">
                        <!-- <div class="label mb-2">
                          <h5 class="fw-bold">Email Address</h5>
                        </div> -->
                        <div class="d-flex bd-highlight">
                          <div class="form-floating w-100 bd-highlight">
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              name="email"
                              placeholder="email"/>
                            
                            @error('email')

                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>

                            @enderror

                            <label for="name">
                              @auth
                              {{ Auth::user()->email }}
                              @else
                                  User Accounts
                              @endauth
                            </label>
                          </div>
                          <div class="p-1 flex-shrink-5 bd-highlight">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <script>
                              document.getElementById('email-form').addEventListener('submit', function(event) {
                                  // Pastikan Anda mengkonfirmasi update email jika diperlukan
                                  var updateEmail = confirm('Apakah Anda yakin ingin Update Alamat Email?');

                                  // Jika pengguna memilih untuk melanjutkan update email, lanjutkan dengan mengirim formulir
                                  if (!updateEmail) {
                                      event.preventDefault();
                                  }
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </form>

                    <form id="phone-form" method="POST" action="{{ route('user.update') }}">
                      @csrf
                      <div class="form-floating mb-2">
                        <!-- <div class="label mb-2">
                          <label class="fw-bold">Phone Numbers</label>
                        </div> -->
                        <div class="d-flex bd-highlight">
                          <div class="form-floating w-100 bd-highlight">
                            <input
                              type="tel"
                              class="form-control"
                              id="phone"
                              name="phone"
                              placeholder="phone"/>

                            @error('phone')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>

                            @enderror
                            <label for="name">
                              @auth
                              {{ Auth::user()->phone}}
                              @else
                                  User Accounts
                              @endauth
                            </label>
                          </div>
                          <div class="p-1 flex-shrink-5 bd-highlight">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <script>
                              document.getElementById('phone-form').addEventListener('submit', function(event) {
                                  // Pastikan Anda mengkonfirmasi update telepon jika diperlukan
                                  var updatePhone = confirm('Apakah Anda yakin ingin Update Nomor Telepon?');

                                  // Jika pengguna memilih untuk melanjutkan update telepon, lanjutkan dengan mengirim formulir
                                  if (!updatePhone) {
                                      event.preventDefault();
                                  }
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </form>

                    <form id="password-form" method="POST" action="{{ route('user.update') }}">
                      @csrf
                      <div class="form-floating mb-2">
                        <!-- <div class="label mb-2">
                          <label for="name" class="fw-bold">Password</label>
                        </div> -->
                        <div class="d-flex bd-highlight">
                          <div class="form-floating w-100 bd-highlight">
                            <input
                              type="password"
                              class="form-control"
                              id="password"
                              name="password"
                              placeholder="password"/>

                            @error('password')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>

                            @enderror
                            
                            <label for="name">Password</label>

                          </div>
                          <div class="p-1 flex-shrink-5 bd-highlight">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <script>
                              document.getElementById('password-form').addEventListener('submit', function(event) {
                                  // Pastikan Anda mengkonfirmasi update password jika diperlukan
                                  var updatePass = confirm('Apakah Anda yakin ingin Update password?');

                                  // Jika pengguna memilih untuk melanjutkan update password, lanjutkan dengan mengirim formulir
                                  if (!updatePass) {
                                      event.preventDefault();
                                  }
                              });
                            </script>
                          </div>
                        </div>
                      </div>
                    </form>


                    <!-- <div class="pt-1 mb-1">
                      <button
                        class="btn btn-primary btn-lg btn-block text-capitalize" type="submit" onclick="validatePhone()">
                        Update
                      </button>

                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer wow fadeIn"
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
            <a class="btn btn-link" href="{{ url('aboutlogged') }}">About Us</a>
            <a class="btn btn-link" href="{{ url('contactlogged') }}">Contact Us</a>
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
