<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <title>Digital Store - Invoice</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="icon" type="image/x-icon" href="/img/logo.png"/>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Web Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400&display=swap" rel="stylesheet">

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
    <link href="css/styleInvoice.css" rel="stylesheet">

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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">PAYMENT</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-white" href="{{ url('dashboard') }}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a class="text-white" href="#">Pages</a>
              </li>
              <li class="breadcrumb-item" id="pagesLink">
                <a class="text-white" href="#">TOP UP</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">
                PAYMENT
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Page Header End -->



      @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif




        {{-- <div class="invoice-container1 wow fadeInUp">
            <div class="game-image">
                @if ($invoiceGame && $invoiceGame->game_image)

                    <img src="{{ $invoiceGame->nama_game }}" alt="{{ $invoiceGame->nama_game }}">
                @else
                    <p class="error-message">Game image not available</p>
                @endif
            </div>
        </div> --}}

        <div class="invoice-container wow fadeInUp">
        <div class="invoice-header">
            <div class="title-date">
            <h2 class="title">INVOICE</h2>
            @if ($invoiceGame)
                <p class="date">{{ $invoiceGame->kodepembayaran_invoice }}</p>
            @else
                <p class="error-message">Invoice not found</p>
            @endif
            </div>
        </div>


        <div class="invoice-body">
            <div class="game-image">
                {{-- @if ($invoiceGame && $invoiceGame->game_image)
                    <img src="{{ $invoiceGame->game_image }}" alt="{{ $invoiceGame->nama_game }}">
                @else
                    <p class="error-message">Game image not available</p>
                @endif --}}
            </div>
            <table>
            <thead>
                <th>Nama Pembeli</th>
                {{-- <th>Email</th>
                <th>Phone</th> --}}
                <th>Nama Game</th>
                <th>ID Game</th>
                <th>Server Game</th>
                <th>Item</th>
                <th>PRICE</th>
            </thead>

                <tbody id="table-body">
                    @if($invoiceGame)
                        <tr class="single-row">
                            <td><input type="hidden" placeholder="nama_pembeli">{{ $invoiceGame->nama_pembeli}}</td>
                            {{-- <td><input type="hidden" placeholder="email_pembeli">{{ $invoiceGame->email_pembeli}}</td>
                            <td><input type="hidden" placeholder="phone_pembeli">{{ $invoiceGame->phone_pembeli}}</td> --}}
                            <td><input type="hidden" placeholder="nama_game">{{ $invoiceGame->nama_game}}</td>
                            <td><input type="hidden" placeholder="game_id">{{ $invoiceGame->game_id}}</td>
                            <td><input type="hidden" placeholder="server_game">{{ $invoiceGame->server_game}}</td>
                            <td><input type="hidden" placeholder="item_game">{{ $invoiceGame->item_game}}</td>
                            <td><input type="hidden" placeholder="harga_item">Rp.{{ number_format($invoiceGame->hargaitem_game) }}</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="4">No data available</td>
                        </tr>
                    @endif

                </tbody>

            </table>
        </div>
            <div class="button-container" style="display: flex; justify-content: space-between;">
                <div class="d-grid gap-2 col-4">
                    <a id="backButton" class="btn btn-danger fw-medium btn-outline-secondary" style="font-size: 1.5em; padding: 10px 20px; border-radius:10px 10px 10px 10px; color: white;">Back</a>
                </div>

                <div class="d-grid gap-2 col-4">
                    <button type="submit" class="btn btn-warning fw-medium btn-outline-secondary " style="font-size: 1.5em; padding: 10px 20px; border-radius: 10px 10px 10px 10px; color: white;" id="pay-button">Pilih Pembayaran</button>
                </div>
            </div>
            {{-- <div class="button-container1" style="margin-right: auto;">
                <div class="d-grid gap-2 col-4">
                    <a href="{{ route('dashboard') }}" class="btn btn-danger fw-medium" style="font-size: 1.5em; padding: 10px 20px;">Back</a>
                </div>
            </div> --}}

        </div>

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        // Menggunakan JavaScript untuk menangani perintah kembali
        document.getElementById('pagesLink').addEventListener('click', function() {
            history.back(); // Ini akan mengarahkan kembali ke halaman sebelumnya
        });
    </script>

    <script>
        // Add an event listener to the "Back" button
        document.getElementById("backButton").addEventListener("click", function() {
            // Use window.history to go back to the previous page
            window.history.back();
        });
    </script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                /* You may add your own implementation here */
                alert("payment success!"); console.log(result);

                window.location.href = '/dashboard';
            },
            onPending: function(result){
                /* You may add your own implementation here */
                alert("wating your payment!"); console.log(result);

                window.location.href = '/dashboard';
            },
            onError: function(result){
                /* You may add your own implementation here */
                alert("payment failed!"); console.log(result);

                window.location.href = '/dashboard';
            },
            onClose: function(){
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');

                window.location.href = '/dashboard';
            }
            
            })
        });



    </script>


  </body>

</html>
