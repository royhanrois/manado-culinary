
<?php
session_start();
if (isset($_SESSION["message"])) {
    echo '<script>alert("' . $_SESSION["message"] . '");</script>';
    unset($_SESSION["message"]); // Clear the session message after displaying it
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Manado Culinary</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
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
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
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

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="fa fa-utensils me-3"></i>Manado Culinary
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.php" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <a href="home-res.php" class="nav-item nav-link">Restaurant</a>
              <a href="menu.html" class="nav-item nav-link">Menu</a>
              <div class="dropdown">
                <a class="nav-item nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                  <li><a class="dropdown-item" href="login/login.php">Login</a></li>
                </ul>
              </div>

            </div>
            </div>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                  Mari jo makang<br />
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                  Throw away your hungriness with the best culinary on industry.
                  Manado is the right place to blablaballa. tasteful, delicious,
                  even extreme food is all exist in our culture.
                </p>
                <a
                  href="menu.html"
                  class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                  >Find Food</a
                >
              </div>
              <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/tinutuan.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.1s"
                    src="img/about-1.jpg"
                  />
                </div>
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.3s"
                    src="img/about-2.jpg"
                    style="margin-top: 25%"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.5s"
                    src="img/about-3.jpg"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.7s"
                    src="img/about-4.jpg"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                About Us
              </h5>
              <h1 class="mb-4">
                Welcome to
                <i class="fa fa-utensils text-primary me-2"></i>Manado Culinary
              </h1>
              <p class="mb-4">
                Welcome to the enchanting world of culinary delights in Manado, 
                brought to you by our esteemed foundation. As passionate ambassadors of our vibrant city, 
                we are dedicated to showcasing the rich culinary heritage and mouthwatering flavors that Manado has to offer.

              </p>
              <p class="mb-4">
                With our deep-rooted knowledge and love for Manado's culinary treasures, 
                we curate unforgettable experiences that immerse visitors in the authentic flavors, traditions, and stories behind each dish.
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      50
                    </h1>
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                    >
                      +
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Typical</p>
                      <h6 class="text-uppercase mb-0">Food</h6>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      100
                    </h1>
                    <h1
                    class="flex-shrink-0 display-5 text-primary mb-0"
                  >
                    +
                  </h1>
                    <div class="ps-4">
                      <p class="mb-0">Good Quality</p>
                      <h6 class="text-uppercase mb-0">Restaurants</h6>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary py-3 px-5 mt-2" href="home-res.php">Wanna See Some Resto?</a>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Menu Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>
          </div>
          <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul
              class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5"
            >
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                  data-bs-toggle="pill"
                  href="#tab-1"
                >
                  <i class="fa fa-coffee fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Popular</small>
                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-2"
                >
                  <i class="fa fa-hamburger fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Special</small>
                    <h6 class="mt-n1 mb-0">Launch</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-3"
                >
                  <i class="fa fa-utensils fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Lovely</small>
                    <h6 class="mt-n1 mb-0">Dinner</h6>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Burger</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->

      

    

      <!-- Testimonial Start -->
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="text-center">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Testimonial
            </h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                Makanan Manado Gapernah Salah!!!
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-1.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Rini Sukartini</h5>
                  <small>Wisatawan Jakarta</small>
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                This is the best portal to explore a bunch of culinary on manado
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-2.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Gerrard Owl</h5>
                  <small>Tourist</small>
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                Restoranku jadi ramai karena website ini! Trimakasih sangat Manado Culinary!
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-3.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Pak Johan</h5>
                  <small>Pemilik Resto ManukSaha</small>
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                I'm so sorry for underastimated the culinary on this city before, Now i realize these all is so GOOD!
                Big Thanks to Manado Culinary!
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-4.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Andrew Teti</h5>
                  <small>Tourist And Vlogger</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Manado Culinary</a>, All
                Right Reserved.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- <script>
      var menuBtn = document.getElementById("menuBtn");
      var navbarCollapse = document.getElementById("navbarCollapse");

      navbarCollapse.style.right = "-250px";
      menuBtn.onclick = function () {
        if (navbarCollapse.style.right == "-250px") {
          navbarCollapse.style.right = "0";
        } else {
          navbarCollapse.style.right = "-250px";
        }
      };

      var scroll = new SmoothScroll('a[href*="#"]', { speed: 700 });
    </script> -->

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
