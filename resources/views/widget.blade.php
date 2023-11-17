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
              <i class="fa fa-hashtag me-2"></i>DASHMIN
            </h3>
          </a>
          <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
              <img
                class="rounded-circle"
                src="img/user.jpg"
                alt=""
                style="width: 40px; height: 40px"
              />
              <div
                class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"
              ></div>
            </div>
            <div class="ms-3">
              <!-- <h6 class="mb-0">Jhon Doe</h6> -->
              <h6 class="mb-0">Admin</h6>
              <!-- <span>Admin</span> -->
            </div>
          </div>
          <div class="navbar-nav w-100">
            <a href="{{ url('dashboardadmin') }}" class="nav-item nav-link"
              ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a
            >
            <a href="{{ url('widget') }}" class="nav-item nav-link active"
              ><i class="fa fa-th me-2"></i>Widgets</a
            >
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                ><i class="fa fa-table me-2"></i>Tables</a
              >
              <div class="dropdown-menu bg-transparent border-0">
                <a href="{{ url('datatablemember') }}" class="dropdown-item">Member</a>
                <a href="{{ url('datatablepaymentmobile') }}" class="dropdown-item"
                  >Mobile Game Payment</a
                >
                <a href="{{ url('datatablepaymentpc') }}" class="dropdown-item"
                  >PC Game Payment</a
                >
                <a href="{{ url('datatabletestimonial') }}" class="dropdown-item"
                  >Testimonial</a
                >
              </div>
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

        <!-- Widget Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
            <div class="col-xl-3"></div>
            <!-- <div class="col-sm-12 col-md-6 col-xl-6">
              <div class="h-100 bg-light rounded p-4">
                <div
                  class="d-flex align-items-center justify-content-between mb-4"
                >
                  <h6 class="mb-0">Calender</h6>
                   <a href="">Show All</a>
                </div>
                <div id="calender"></div>
              </div>
            </div> -->
            <div class="col-xl-2"></div>
            <div class="col-sm-12 col-xl-12">
              <div class="bg-light rounded h-100 p-4">
                <div
                  class="d-flex align-items-center justify-content-between mb-4"
                >
                  <h6>Table Testimonial</h6>
                  <a href="{{ url('datatabletestimonial') }}">Show All</a>
                  <a href="{{ url('testimonialadd') }}">Add Testimonial</a>
                </div>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Name</th>
                      <th scope="col">Profession</th>
                      <th scope="col">Testimonial</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                        <img
                          src="img/testimonial-1.jpg"
                          class="img-fluid"
                          style="width: 150px; height: 100px"
                        />
                      </td>
                      <td>John Doe</td>
                      <td>Web Designer</td>
                      <td>
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Adipisci consectetur nam soluta.
                      </td>
                      <td>
                        <a
                          href="{{ url('testimonialupdate') }}"
                          role="button"
                          class="btn btn-primary btn-sm"
                          >Update</a
                        >
                        ||
                        <a href="" role="button" class="btn btn-primary btn-sm"
                          >Delete</a
                        >
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                        <img
                          src="img/testimonial-2.jpg"
                          class="img-fluid"
                          style="width: 150px; height: 100px"
                        />
                      </td>
                      <td>Mark Otto</td>
                      <td>UI/UX Designer</td>
                      <td>
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Magni, dolorum temporibus! Corrupti dolore sit
                        tempora quod unde obcaecati iste minima maiores ipsa
                        nobis.
                      </td>
                      <td>
                        <a
                          href="{{ url('testimonialupdate') }}"
                          role="button"
                          class="btn btn-primary btn-sm"
                          >Update</a
                        >
                        ||
                        <a href="" role="button" class="btn btn-primary btn-sm"
                          >Delete</a
                        >
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>
                        <img
                          src="img/testimonial-2.jpg"
                          class="img-fluid"
                          style="width: 150px; height: 100px"
                        />
                      </td>
                      <td>Mark Otto</td>
                      <td>Back-End Developer</td>
                      <td>
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Magni, dolorum temporibus! Corrupti dolore sit
                        tempora quod unde obcaecati iste minima maiores ipsa
                        nobis.
                      </td>
                      <td>
                        <a
                          href="{{ url('testimonialupdate') }}"
                          role="button"
                          class="btn btn-primary btn-sm"
                          >Update</a
                        >
                        ||
                        <a href="" role="button" class="btn btn-primary btn-sm"
                          >Delete</a
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-sm-13 col-xl-6">
              <div
                class="bg-light rounded h-100 py-4 wow"
                data-wow-delay="0.1s"
              >
                <div class="container">
                  <h6 class="mb-4">Testimonial</h6>
                  <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                      <img
                        class="img-fluid rounded-circle mx-auto mb-4"
                        src="img/ryan.jpg"
                        style="width: 90px; height: 90px"
                      />
                      <div class="testimonial-text text-center">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <!-- <span class="fst-italic">Profession</span> -->
                        <p>
                          Clita clita tempor justo dolor ipsum amet kasd amet
                          duo justo duo duo labore sed sed. Magna ut diam sit et
                          amet stet eos sed clita erat magna elitr erat sit sit
                          erat at rebum justo sea clita.
                        </p>
                      </div>
                    </div>
                    <div class="testimonial-item text-center">
                      <img
                        class="img-fluid rounded-circle mx-auto mb-4"
                        src="img/esa.jpg"
                        style="width: 90px; height: 90px"
                      />
                      <div class="testimonial-text text-center">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <p>
                          Clita clita tempor justo dolor ipsum amet kasd amet
                          duo justo duo duo labore sed sed. Magna ut diam sit et
                          amet stet eos sed clita erat magna elitr erat sit sit
                          erat at rebum justo sea clita.
                        </p>
                        <!-- <span class="fst-italic">Profession</span> -->
                      </div>
                    </div>
                    <div class="testimonial-item text-center">
                      <img
                        class="img-fluid rounded-circle mx-auto mb-4"
                        src="img/havid.jpg"
                        style="width: 90px; height: 90px"
                      />
                      <div class="testimonial-text text-center">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <!-- <span class="fst-italic">Profession</span> -->
                        <p>
                          Clita clita tempor justo dolor ipsum amet kasd amet
                          duo justo duo duo labore sed sed. Magna ut diam sit et
                          amet stet eos sed clita erat magna elitr erat sit sit
                          erat at rebum justo sea clita.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Testimonial</h6>
                <div class="owl-carousel testimonial-carousel">
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded-circle mx-auto mb-4"
                      src="img/testimonial-1.jpg"
                      style="width: 100px; height: 100px"
                    />
                    <h5 class="mb-1">Client Name</h5>
                    <p>Profession</p>
                    <p class="mb-0">
                      Dolor et eos labore, stet justo sed est sed. Diam sed sed
                      dolor stet amet eirmod eos labore diam
                    </p>
                  </div>
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded-circle mx-auto mb-4"
                      src="img/testimonial-2.jpg"
                      style="width: 100px; height: 100px"
                    />
                    <h5 class="mb-1">Client Name</h5>
                    <p>Profession</p>
                    <p class="mb-0">
                      Dolor et eos labore, stet justo sed est sed. Diam sed sed
                      dolor stet amet eirmod eos labore diam
                    </p>
                  </div>
                  <div class="testimonial-item text-center">
                    <img
                      class="img-fluid rounded-circle mx-auto mb-4"
                      src="img/testimonial-1.jpg"
                      style="width: 100px; height: 100px"
                    />
                    <h5 class="mb-1">Client Name</h5>
                    <p>Profession</p>
                    <p class="mb-0">
                      Dolor et eos labore, stet justo sed est sed. Diam sed sed
                      dolor stet amet eirmod eos labore diam
                    </p>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="col-sm-12 col-xl-6">
              <div class="bg-light rounded h-100 p-4">
                <!-- <iframe
                  class="position-relative rounded w-100 h-100"
                  src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=itats&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                  frameborder="0"
                  style="border: 0"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe> -->
                <div
                  class="d-flex align-items-center justify-content-between mb-4"
                >
                  <h6 class="mb-2">Calender</h6>
                  <!-- <a href="">Show All</a> -->
                </div>
                <div id="calender"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Widget End -->

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
