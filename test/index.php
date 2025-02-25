<?php
session_start(); // Start the session if not already started
require("query.php");

$namectry = $home->getcategory(); // Fetch categories for dropdown or suggestions
$type = $home->searchcategory();

if (isset($_POST["submit"])) {
    unset($_SESSION['logined']);
    header("location:userauth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg px-0">
                <div class="container">
                    <a class="navbar-brand" href="#">JOBIN</a>
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
                        </ul>
                        <a href="profile/index.php">
                            <div style="width:40px;height:40px;" class="ms-5">
                                <img class="w-100" src="image/profile-user.png" alt="profileimage" class="rounded-circle">
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Search Form -->
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form method="get" action="/job/pages/companies/">
                    <div class="input-group mb-3">
                        <input type="text" id="vehicle" name="category" class="form-control" placeholder="Enter job category" aria-label="Enter job category">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul id="vehicle-output" class="list-group"></ul>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#vehicle").keyup(function() {
                var query = $(this).val();

                if (query != "") {
                    $.ajax({
                        url: "queary.php",
                        type: "POST",
                        data: {
                            query: query
                        },
                        success: function(response) {
                            let data = JSON.parse(response); // Expecting JSON response
                            let output = "";

                            if (data.length > 0) {
                                data.forEach(function(item, index) {
                                    output += `<li class="list-group-item bg-light border">${item}</li>`;
                                });
                                $("#vehicle-output").html(output).show();
                            } else {
                                $("#vehicle-output").html("").hide();
                            }
                        }
                    });
                } else {
                    $("#vehicle-output").html("").hide();
                }
            });

            $(document).on("click", ".list-group-item", function() {
                $("#vehicle").val($(this).text());
                $("#vehicle-output").hide();
            });

            $("#vehicle").focusout(function() {
                setTimeout(() => {
                    $("#vehicle-output").hide();
                }, 200);
            });

            $("#vehicle").focusin(function() {
                if ($("#vehicle-output").children().length > 0) {
                    $("#vehicle-output").show();
                }
            });
        });
    </script>
</body>

</html>