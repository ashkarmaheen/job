<?php



require("queary.php");
$ff = $ctry->ctrytb();



$editbutton = $ctry->edit();

print_r($editbutton);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>category</title>
    <link href="../main.css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: navfont;
            src: url(../../font/Poppins-Medium.ttf);
        }

        .fontsmain {
            font-family: navfont;
        }
    </style>
</head>

<body id="page-top" class="fontsmain">

    <?php
    if (isset($_POST["edit"])) {

        foreach ($editbutton as $ed) {
            echo '<div class="w-100" style="background-color:#00000033; height:100vh;position:absolute;z-index:1000;display: flex
;
    align-items: center;
    justify-content: center;">
              <form method="post" action="queary.php" style="width:35%; background-color:#ffffff; height:200px;border-radius: 10px;padding:20px;">
              <label for="category" class="mb-3">Edit Category</label>
              <input type="text" name="re-edit" class="form-control me-2 w-100" value="' . $ed["categoryname"] . '" placeholder="" aria-label="Search" style="width: 250px;" />
              <div style="height:80px;display: flex;align-items: flex-end;justify-content: flex-end; ">
              <div>
              <button type="submit" name="cancel" class="btn btn-dark" data-mdb-ripple-init>CANCEL</button>
              <button type="submit" name="editsubmit" value="' . $ed["id"] . '" class="btn btn-primary" data-mdb-ripple-init>SUBMIT</button>
              </div>
              </div>
              </form>
            </div>';
        }
    }
    ?>

    <?php
    require("../components/header.php");

    ?>
    <div id="wrapper">



        <div id="content-wrapper" style="transition: all .5s;" class="d-flex flex-column">



            <div id="content">

                <div class="container-fluid">
                    <div class="d-flex my-3 justify-content-between">
                        <h4 class=" mb-2 text-gray-800">Job Categorys</h4>
                        <form class="d-flex" method="post" action="queary.php">
                            <input type="text" name="categoryname" class="form-control me-2" placeholder="Type New Category" aria-label="Search" style="width: 250px;" />
                            <button class="btn btn-outline-primary" type="submit" name="submit">Add Category <i class="fa-solid fa-layer-group"></i></button>
                        </form>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 40px;text-align: center; ">ID</th>
                                            <th>Category</th>
                                            <th style="width: 200px; text-align: center;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php
                                            foreach ($ff as $tb) {
                                                echo "<tr>
                                                 <td style='text-align: center;'>" . $tb["id"] . "</td>
                                            <td>" . $tb["categoryname"] . "</td>
                                            <td>
                                            <div class=' gap-3 d-flex' style='justify-content: center;'>
                                            <form method='post' action=''>
                                            <button type='submit' name='edit' value='" . $tb["id"] . "' class='btn btn-primary mr-3' data-mdb-ripple-init>
                                            <i class='fa-solid fa-pen-to-square'></i></button>
                                            </form>

                                            <form action='queary.php' method='post'>
                                            <button type='submit' name='delete' value='" . $tb["id"] . "' class='btn btn-danger me-3' data-mdb-ripple-init>
                                            <i class='fa-solid fa-trash'></i></button>
                                            </form>
                                            </div>
                                            </td>
                                        </tr>";
                                            }
                                            ?>
                                        </tr>


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