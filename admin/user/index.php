<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link href="../main.css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: navfont;
            src: url(../../font/Poppins-Black.ttf);
        }

        .fontsmain {
            font-family: navfont;
        }
    </style>
</head>

<body id="page-top" class="fontsmain">

    <?php
    require("../components/header.php");

    require("queary.php");
    $ff = $user->table();




    ?>
    <div id="wrapper">



        <div id="content-wrapper" style="transition: all .5s;" class="d-flex flex-column">


            <div id="content">

                <div class="container-fluid">
                    <div class="d-flex my-3 justify-content-between">
                        <h4 class="mb-2 text-gray-800">Admin</h4>
                        <a href="adduser.php">
                            <button class="btn btn-outline-primary" type="submit">Add admin <i class="fa-solid fa-user-plus"></i></button>
                        </a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Admin List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php

                                        foreach ($ff as $tb) {
                                            echo "<tr>
                                            <td>" . $tb["username"] . "</td>
                                            
                                            <td>" . $tb["email"] . "</td>
                                        </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../javascript/script.js"></script>
</body>

</html>