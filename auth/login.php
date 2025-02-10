<?php

if (isset($_SESSION['logined'])) {
  header("location:../admin/dashboard/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #275DF5;">
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 ">
              <?php

              if (isset($_SESSION['loginerror'])) {
                echo '<div>fhiho8higf8g</div>';
              }
              ?>

              <form method="post" action="loginauth.php">
                <div class="mb-md-4 mt-md-4">

                  <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                  <p class="text-white-50 mb-5 text-center">Please enter your login and password!</p>

                  <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />

                  </div>

                  <div data-mdb-input-init class="form-outline form-white mb-3">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />

                  </div>

                  <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                  <div class="text-center">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5 " type="submit" name="submit">Login</button>
                  </div>


                </div>
              </form>

              <div class="text-center">
                <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>