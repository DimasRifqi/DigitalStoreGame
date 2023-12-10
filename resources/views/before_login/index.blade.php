<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <title>Digital Store - Landing Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
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
                    <div id="searchResults" class="search-results"></div>

                    <script>
                        const searchInput = document.getElementById('searchInput');
                        const searchResults = document.getElementById('searchResults');

                        searchInput.addEventListener('input', async () => {
                            const searchTerm = searchInput.value.toLowerCase();

                            try {
                                const response = await fetch('/api/items');
                                const data = await response.json();

                                const filteredData = data.filter(item => item.namagame.toLowerCase().includes(searchTerm));
                                displayResults(filteredData);
                            } catch (error) {
                                console.error('Error:', error);
                            }
                        });

                        function displayResults(results) {
                            searchResults.innerHTML = '';

                            if (results.length > 0) {
                                results.forEach(item => {
                                    const resultItem = document.createElement('div');
                                    resultItem.textContent = item.namagame;
                                    searchResults.appendChild(resultItem);
                                });

                                // Tampilkan popup
                                searchResults.style.display = 'block';
                            } else {
                                searchResults.style.display = 'none';
                            }
                        }

                        // Sembunyikan popup saat mengklik di luar elemen pencarian
                        document.addEventListener('click', (event) => {
                            if (!event.target.matches('#searchInput')) {
                                searchResults.style.display = 'none';
                            }
                        });
                    </script>
                    <div class="input-group-append mr-5">
                      <button class="btn btn-outline-info btn-primary" type="button">Search</button>
                    </div>
                </div>
                <a href="{{ url('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                <a href="{{ url('login') }}" class="nav-item btn btn-primary py-4 px-lg-5 d-lg-block">LOGIN</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <section class="slide" id="slide">
        <div class="container">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style=" height: auto; width: 80%; margin: 5rem auto 0 auto;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/pamflet 1 1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/Pamflet 2 1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/Pamflet 3 1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </section>

      <section class="game_populer" id="game_populer">
           <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5">Game Populer</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">All</li>
                            <li class="mx-2" data-filter=".first">Game Mobile</li>
                            <li class="mx-2" data-filter=".second">Game PC</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/gi2.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/gi2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game Mobile</p>
                                <h5 class="lh-base mb-0">Genshin Impact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/valo.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/valo.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game PC</p>
                                <h5 class="lh-base mb-0">Valorant</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/hsr2.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/hsr2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game Mobile</p>
                                <h5 class="lh-base mb-0">Honkai Stair Rail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/pubgPC.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/pubgPC.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game PC</p>
                                <h5 class="lh-base mb-0">PUBG PC</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/ml2.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/ml2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game Mobile</p>
                                <h5 class="lh-base mb-0">Mobile Legend Bang Bang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/CS2.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/CS2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game PC</p>
                                <h5 class="lh-base mb-0">Conter Strike 2</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/gipc.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/gipc.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game PC</p>
                                <h5 class="lh-base mb-0">Genshin Impact</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/hsrpc.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/hsrpc.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Game PC</p>
                                <h5 class="lh-base mb-0">Honkai Stair Rail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->

      </section>




    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">TOP UP GAME MOBILE</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Genshin.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Genshin Impact</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton1" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton1").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/HSR.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Honkai Star Rail</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton2" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton2").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/ML.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Mobile Legend</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton3" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton3").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/TOFTopUP/logoTOF.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Tower of Fantasy</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton4" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton4").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/PUBGM.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">PUBGM</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton5" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton5").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/FF.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Free Fire</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton6" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton6").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/aov.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Arena of Valor</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton7" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton7").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/coc.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Clash of Clans</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton8" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton8").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">TOP UP GAME PC</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Genshin.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Genshin Impact</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton9" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton9").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/HSR.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Honkai Star Rail</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton10" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton10").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/ML.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Mobile Legend</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton11" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton11").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/CODM.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Call Of Duty Mobile</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton12" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton12").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/PUBGM.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">PUBGM</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton13" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton13").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/FF.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Free Fire</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton14" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton14").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/aov.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Arena of Valor</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton15" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton15").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/coc.png" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Clash of Clans</h4>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="button" id="topUpButton16" class="btn btn-primary"><a class="fw-medium link-light" href="">TOP UP</a></button>
                                <script>
                                    document.getElementById("topUpButton16").addEventListener("click", function() {
                                        // Cek apakah pengguna sudah login
                                        if (!isUserLoggedIn()) {
                                            // Jika belum login, tampilkan notifikasi
                                            alert("Anda harus login terlebih dahulu untuk melakukan top-up.");
                                        } else {
                                            // Jika sudah login, lanjutkan ke halaman top-up
                                            window.location.href = "link-halaman-top-up"; // Ganti dengan link halaman top-up Anda
                                        }
                                    });

                                    function isUserLoggedIn() {
                                        // Fungsi untuk memeriksa apakah pengguna sudah login
                                        // Gantilah dengan logika autentikasi sesuai dengan sistem yang Anda gunakan
                                        // Contoh sederhana: return true jika pengguna sudah login, false jika belum
                                        return false; // Gantilah sesuai kebutuhan
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="text-start">
                            <h1 class="display-5 mb-4">Kenapa Harus Top Up di DIGITAL STORE ?</h1>
                        </div>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-money fa-2x text-primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Murah</p>
                                        <h5 class="mb-0">Harga Terjangkau</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-cart-plus fa-2x text-primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Ready Stock</p>
                                        <h5 class="mb-0">Stock Selalu Ready</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-handshake-o fa-2x text-primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Aman 100%</p>
                                        <h5 class="mb-0">Anti Login Game</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-clock-o fa-2x text-primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Selalu Online</p>
                                        <h5 class="mb-0">Setiap Hari 24 Jam</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/iklan.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($testimonials as $testimonial)
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{ asset($testimonial->foto_testimoni) }}" style="width: 150px; height: 150px;">
                    <div class="testimonial-text text-center p-4">
                        <p>{{ $testimonial->komentar_testimoni }}</p>
                        <h5 class="mb-1">{{ $testimonial->nama_testimoni }}</h5>
                        <span class="fst-italic">{{ $testimonial->pekerjaan_testimoni }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


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
