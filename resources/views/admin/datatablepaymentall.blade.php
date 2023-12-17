<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap"
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min1.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
  </head>

  <body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
            <a href="{{ url('dashboardadmin') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">
                <i class="fa fa-hashtag me-2"></i>Admin
                </h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px" />
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                <h6 class="mb-0">Admin</h6>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <div class="nav-item dropdown">
                    <a href="{{ url('dashboardadmin') }}" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                        {{-- <i class="fa-solid fa-file-invoice"></i> --}}
                        <i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i>Data Payment
                    </a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ url('dashboardadmin') }}" class="dropdown-item">Payment</a>
                        <a href="{{ url('datatablepaymentall') }}" class="dropdown-item active">All Payment</a>
                    </div>

                </div>

                <div class="nav-item dropdown">
                    <a href="{{ url('widget') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-pager " aria-hidden="true"></i>Data Testimoni
                    </a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ url('widget') }}" class="dropdown-item">Data Testimoni</a>
                        <a href="{{ url('dashboardadmin') }}" class="dropdown-item">Cread Testimoni</a>
                        {{-- <a href="{{ url('dashboardadmin') }}" class="dropdown-item">Update Testimoni</a> --}}

                    </div>

                </div>

                <div class="nav-item">
                    <a href="{{ url('contactform') }}" class="nav-link">
                        <i class="fa-regular fa-envelope"></i> Contact Form
                    </a>

                </div>

            </div>
            </nav>
        </div>
        <!-- Sidebar End -->

      <!-- Content Start -->
      <div class="content">
        <!-- Navbar Start -->
        <nav
          class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0"
        >
          <a
            href="{{ url('dashboardadmin') }}"
            class="navbar-brand d-flex d-lg-none me-4"
          >
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
          </a>
          <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
          </a>
          <form class="d-none d-md-flex ms-4">
            <input
              class="form-control border-0"
              type="search"
              placeholder="Search"
            />
          </form>
          <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
              >
                <i class="fa fa-bell me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Notification</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0"
              >
                <a href="#" class="dropdown-item">
                  <h6 class="fw-normal mb-0">Profile updated</h6>
                  <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item">
                  <h6 class="fw-normal mb-0">New user added</h6>
                  <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item">
                  <h6 class="fw-normal mb-0">Password changed</h6>
                  <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item text-center"
                  >See all notifications</a
                >
              </div>
            </div>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
              >
                <img
                  class="rounded-circle me-lg-2"
                  src="img/user.jpg"
                  alt=""
                  style="width: 40px; height: 40px"
                />
                <span class="d-none d-lg-inline-flex">Admin</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0"
              >
                <!-- <a href="#" class="dropdown-item">My Profile</a> -->
                <a href="#" class="dropdown-item">Settings</a>
                <a href="{{ url('signinadmin') }}" class="dropdown-item">Log Out</a>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Payment All</h6>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Invoice</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Type</th>
                      <th scope="col">Game</th>
                      <th scope="col">Price</th>
                      <th scope="col">Status </th>
                      {{-- <th scope="col">Details</th> --}}
                    </tr>
                  </thead>
                  <tbody>

                      @foreach ($invoice as $invoiceGame)
                          <tr>
                              <th scope="row">{{ $invoiceGame->id_invoice }}</th>
                              <td>{{ $invoiceGame->tanggal_pembelian }}</td>
                              <td>{{ $invoiceGame->kodepembayaran_invoice }}</td>
                              <td>{{ $invoiceGame->nama_pembeli }}</td>
                              <td>{{ $invoiceGame->email_pembeli }}</td>
                              <td>{{ $invoiceGame->number_pembeli }}</td>
                              <td>{{ $invoiceGame->tipe_game }}</td>
                              <td>{{ $invoiceGame->nama_game }}</td>
                              <td>{{ number_format($invoiceGame->hargaitem_game) }}</td>
                              <td>{{ $invoiceGame->status }}</td>
                              {{-- <td>
                                  <a class="btn btn-sm btn-primary" href="">Detail</a>
                              </td> --}}
                          </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Recent Sales End -->

        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="bg-light rounded-top p-4">
            <div class="row">
              <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">PT. Digital Store</a>, All Right Reserved.
              </div>
              <!-- <div class="col-12 col-sm-6 text-center text-sm-end">
                      /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/
                      Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                  </br>
                  Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                  </div> -->
            </div>
          </div>
        </div>
        <!-- Footer End -->
      </div>
      <!-- Content End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main1.js"></script>
  </body>
</html>
