<?php

require("queary.php");
$namectry = $home->getcategory();

print_r($namectry);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOBIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <link href="main.css/styile.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg  px-0">
        <div class="container">
          <a class="navbar-brand" href="#">JONBIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto textnav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Find a Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-5" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  ps-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Company Profiles
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>

            <a href="../job/uploadresume/index.php">
              <button class="btn btn-outline-success buttoncol textnav pt-2 ps-3" type="submit">Upload Resume
                <div class="box ">
                  <img src="image/upload_3114955.png" class="image">
                </div>
              </button>
            </a>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!-- banner start -->
    <div class="container">
      <div class=" row">
        <div class=" col-12 col-sm-12 clo-md-12 col-lg-12 col-xl-8 col-xxl-7 mt-3 px-0 bannerbox">
          <div class=" col-12 bannerhead">

            <h1 class="bannertext">Search,Apply &
              Get Your
              Dream Job</h1>
          </div>
          <div class="col-11 mt-4 bannersub">
            <h5 class="bannersubtext">Explore all the most exciting job roles based
              on your interest and study mojor</h5>
          </div>
          <div class="container">
            <div class="row col col-sm-12 clo-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-4 search">
              <div class="col-4 px-0 searchbox">

                <div class="col-12 d-flex align-items-center justify-content-center textbox ">
                  <h5>Location</h5>
                </div>
                <form class="d-flex input-group-lg" role="search">
                  <input class="form-control me-0 text-center searchtext" type="search" placeholder="Enter Location" aria-label="Search">
                </form>
              </div>
              <div class="col-4 px-0 searchbox">

                <div class="col-12 d-flex align-items-center justify-content-center textbox ">
                  <h5>Type</h5>
                </div>
                <form class="d-flex input-group-lg" role="search">
                  <input class="form-control me-0 text-center searchtext" type="search" placeholder="Enter type of job" aria-label="Search">
                </form>
              </div>
              <div class="d-flex col-3 px-0 align-items-end searchbox">

                <div class="d-grid">
                  <button type="button" class="btn  btn-primary btn-lg text-center pb-1 ps-2 mb-1">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search</button>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 col-0 col-sm-12 clo-md-12 col-lg-12 col-xl-4 col-xxl-5 bannerbox">
          <img src="image/bannerimage.jpg" class="bannerimage">
        </div>



      </div>
    </div>
    <!-- banner end -->

  </div>

  <div class=" container">
    <diV class="row">
      <div class="col-12 px-0 boxhead">
        <h1>Get Hired in 4 Quick Eassy Steps<h1>
      </div>
    </diV>
  </div>

  <div class="container-fluid px-0 bgline ">
    <div class="container px-0">
      <div class="row gx-4">
        <div class="col-12 col-sm-6 clo-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2">
          <div class="card">
            <i class="fa-solid fa-user ps-3 pt-4 searchicon"></i>
            <div class="card-body">
              <h5 class="card-title mt-3">Create Profile</h5>
              <p class="card-text">Singnup for the job applicant
                profile mention your qualifications.
                post experiences and expertise, and
                scope your interestsn voila you're
                all set to find your dream job </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 clo-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2">
          <div class="card">
            <i class="fa-solid fa-magnifying-glass ps-3 pt-4 searchicon"></i>
            <div class="card-body">
              <h5 class="card-title mt-3">Search Job</h5>
              <p class="card-text">Singnup for the job applicant
                profile mention your qualifications.
                post experiences and expertise, and
                scope your interestsn voila you're
                all set to find your dream job </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 clo-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2">
          <div class="card">
            <i class="fa-solid fa-file ps-3 pt-4 searchicon"></i>
            <div class="card-body">
              <h5 class="card-title mt-3">Upload CV / Resum </h5>
              <p class="card-text">Singnup for the job applicant
                profile mention your qualifications.
                post experiences and expertise, and
                scope your interestsn voila you're
                all set to find your dream job </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 clo-md-3 col-lg-3 col-xl-3 col-xxl-3 pt-2">
          <div class="card">
            <i class="fa-solid fa-suitcase ps-3 pt-4 searchicon"></i>
            <div class="card-body">
              <h5 class="card-title mt-3">Get Job</h5>
              <p class="card-text">Singnup for the job applicant
                profile mention your qualifications.
                post experiences and expertise, and
                scope your interestsn voila you're
                all set to find your dream job </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  </div>

  <div class=" container">
    <diV class="row">
      <div class="col-12 px-0 boxhead">
        <h1>Top Companies Hiring Now<h1>
      </div>
    </diV>
  </div>


  <div class=" container">
    <div class="row">
      <div class="owl-carousel owl-theme owl-nav companymove">
        <?php

        foreach ($namectry as $namectry) {
          $roles = $namectry["roles"];
          echo '<a href="companies?category=' . $roles . '" style="text-decoration:none;">
          <div class="item">
            <div class="col-12 col-sm-12 clo-md-12 col-lg-12 col-xl-12 col-xxl-12">
              <div class="card">
                <div class="card-body px-0">
                  <h3 class="card-title mt-2 ms-4">' . $roles . '
                    <i class="fa-solid fa-chevron-right fa-fade mt-2 ms-2"></i>
                  </h3>
                  <p class="mt-2 ms-4">897 are active hiring</p>
                  <div class=" d-flex col-sm-12 clo-md-12 col-lg-12 col-xl-12 col-xxl-12  Companybox">

                    <div class="col-4 col-sm-4 clo-md-4 col-lg-4 col-xl-4 col-xxl-4 Companylogo">
                      <img src="image/company-1.jpg" class="companyimage">
                    </div>

                    <div class="col-4 col-sm-4 clo-md-4 col-lg-4 col-xl-4 col-xxl-4 Companylogo">
                      <img src="image/company-2.jpg" class="companyimage">
                    </div>

                    <div class="col-4 col-sm-4 clo-md-4 col-lg-4 col-xl-4 col-xxl-4 Companylogo">
                      <img src="image/company-3.jpg" class="companyimage">
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>';
        };
        ?>


      </diV>
    </diV>
  </div>

  <div class=" container">
    <diV class="row">
      <div class="col-12 px-0 boxhead">
        <h1>Find Jobs Across Popular Roles<h1>
      </div>
    </diV>
  </div>

  <div class=" container">
    <diV class="row">
      <div class="col-sm-12 clo-md-12 col-lg-0 col-xl-5 col-xxl- px-0 job">
        <img src="image/bwink_msc_05_single_03.png" class="jobimg">
      </div>
      <div class="col-sm-12 clo-md-12 col-lg-0 col-xl-7 col-xxl-7 px-0 job">
        <div class="owl-carousel owl-theme owl-nav jobmove">
          <div class="item">
            <div class="row">
              <div class=" col-md-12 col-lg-0 col-xl-12 col-xxl-12 ms-0 pt-2 pb-2 jobscard">
                <div class="card col-sm-12 clo-md-12 col-lg-0 col-xl-12 col-xxl-12 px-1 align-items-center jobcardborder">
                  <div class="card-body">
                    <h4 class="card-title">Fullstack Developer</h4>
                    <p class="card-text">600 Jobs
                      <i class="fa-solid fa-chevron-right fa-fade mt-2 ms-2" aria-hidden="true"></i>
                    </p>
                  </div>
                </div>
              </div>

              <div class=" col-md-12 col-lg-0 col-xl-12 col-xxl-12 ms-0 pt-2 pb-2 jobscard">
                <div class="card col-sm-12 clo-md-12 col-lg-0 col-xl-12 col-xxl-12 px-1 align-items-center jobcardborder">
                  <div class="card-body">
                    <h4 class="card-title">Fullstack </h4>
                    <p class="card-text">600 Jobs
                      <i class="fa-solid fa-chevron-right fa-fade mt-2 ms-2" aria-hidden="true"></i>
                    </p>
                  </div>
                </div>

              </div>
              <div class=" col-md-12 col-lg-0 col-xl-12 col-xxl-12 ms-0 pt-2 pb-2 jobscard">
                <div class="card col-sm-12 clo-md-12 col-lg-0 col-xl-12 col-xxl-12 px-1 align-items-center jobcardborder">
                  <div class="card-body">
                    <h4 class="card-title">Fullstack Developer</h4>
                    <p class="card-text">600 Jobs
                      <i class="fa-solid fa-chevron-right fa-fade mt-2 ms-2" aria-hidden="true"></i>
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>


        </diV>
      </div>
    </diV>

  </div>
  <div class="container-fluid">
    <diV class="row">
      <div class="col-12">
        <diV class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 footer A">

            <div class="col-md-12 col-lg-0 col-xl-12 col-xxl-4 mt-5 logobox">
              <h2>JOBIN</h2>
            </div>
            <div class="col-md-12 col-lg-0 col-xl-12 col-xxl-10 contact">
              <h4 class="mb-3">Connect with us</h4>
              <i class="fa-brands fa-youtube fa-2xl" style="color: #ffffff;"></i>
              <i class="fa-brands fa-facebook-f fa-xl px-2" style="color: #ffffff;"></i>
              <i class="fa-brands fa-twitter fa-2xl" style="color: #ffffff;"></i>
              <i class="fa-brands fa-linkedin fa-2xl ps-2" style="color: #ffffff;"></i>
            </div>

          </div>


          <div class="d-flex col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 pt-5 footer B">

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-5 footertext">
              <p class="mb-3">About us</p>
              <p>Companies</p>
              <p>Employer home</p>
              <p>Credits</p>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-5 footertext">
              <p class="mb-3">Help center</p>
              <p>Summons/Notices</p>
              <p>Grievances</p>
              <p>Report issue</p>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-5 footertext">
              <p class="mb-3"> Privacy policy</p>
              <p>Terms & conditions</p>
              <p>Fraud alert</p>
              <p>Trust & safety</p>
            </div>

          </div>
        </diV>

      </diV>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    var owl = $('.jobmove');
    owl.owlCarousel({
      items: 4,
      // items change number for slider display on desktop

      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsiveClass: true,
      nav: true,
      dots: false,
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        600: {
          items: 2,
          nav: true,
        },
        1000: {
          items: 2,
          nav: true,
        }

      }
    });

    var owl = $('.companymove');
    owl.owlCarousel({
      items: 4,
      // items change number for slider display on desktop

      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsiveClass: true,
      nav: true,
      dots: false,
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        600: {
          items: 2,
          nav: true,
        },
        992: {
          items: 3,
          nav: true,
        },
        1200: {
          items: 4,
          nav: true,
        }
      }
    });
  </script>
</body>

</html>