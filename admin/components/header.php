<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    #menuToggle {
      position: fixed;
      top: 0;
      left: -280px;
      transition: left 0.3s ease;
    }
  </style>
</head>

<body>
  <header class="py-2 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-between">
        <div class="d-flex">
          <div style="margin-right:95px;">
            <h3 class="m-0">JOBIN</h3>
          </div>
          <button type="button" class="btn me-2" onclick="sidebarfn()">
            <i class="fa-solid fa-bars fa-xl"></i>
          </button>
        </div>

        <div class="d-flex">
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5 d-flex">
            <input type="search" class="form-control me-2" placeholder="Search..." aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="d-flex flex-column flex-shrink-0 p-3  text-white bg-dark" id="menuToggle" style="width: 280px; height: 100vh; transition: all .5s; top:54px;">
    <ul class=" nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="../dashboard/index.php">
          <button type="button" class="btn btn-outline-primary mb-2 p-2" style="width: 100%;">Dashboard</button>
        </a>
      </li>
      <li>
        <a href="../user/index.php">
          <button type="button" class="btn btn-outline-primary mb-2 p-2" style="width: 100%;">User</button>
        </a>
      </li>
      <li>
        <a href="../category/index.php">
          <button type="button" class="btn btn-outline-primary mb-2 p-2" style="width: 100%;">Category</button>
        </a>
      </li>
      <li>
        <a href="../jobs/index.php">
          <button type="button" class="btn btn-outline-primary mb-2 p-2" style="width: 100%;">Jobs</button>
        </a>
      </li>
      <li>
        <button type="button" class="btn btn-outline-primary mb-2 p-2" style="width: 100%;">Contact</button>
      </li>
    </ul>
  </div>

  <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
  <script src="../javascript/script.js">

  </script>
</body>

</html>