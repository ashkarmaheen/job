<?php

require("queary.php");
$data = $jobsl->getjob();



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobs</title>

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
    require("../components/header.php");

    ?>
    <div id="wrapper">



        <div id="content-wrapper" style="transition: all .5s;" class="d-flex flex-column">


            <div id="content">

                <div class="container-fluid">
                    <div class="d-flex my-3 justify-content-between">
                        <h4 class=" mb-2 text-gray-800">Jobs</h4>
                        <a href="addjob.php">
                            <button class="btn btn-outline-primary" type="submit">Add Job <i class="fa-solid fa-briefcase"></i></button>
                        </a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Job List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th>Company Name</th>
                                            <th>Job Type</th>
                                            <th>Industries</th>
                                            <th>Roles</th>
                                            <th>Skills</th>
                                            <th>Education</th>
                                            <th>Location</th>
                                            <th>Fixed</th>
                                            <th>Earning Potential</th>
                                            <th>Work Mode</th>
                                            <th>Shift</th>
                                            <th>Employment type</th>
                                            <th>Age limit</th>
                                            <th>Language</th>
                                            <th>Experience</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        foreach ($data as $data) {
                                            echo "<tr>
                                           
                                                <td class='d-flex' style='align-items: center'> 
                                                <div style='width:100px;height:60px;overflow: hidden; margin-right: 10px;'>
                                                <img style='width:100%;' src='../../" . $data["image"] . "' />
                                                </div>
                                                    <div >" . $data["companyname"] . "</div></td>
                                            <td>" . $data["jobtype"] . "</td>
                                            <td>" . $data["industries"] . "</td>
                                            <td>" . $data["roles"] . "</td>
                                            <td>" . $data["skills"] . "</td>
                                            <td>" . $data["education"] . "</td>
                                            <td>" . $data["location"] . "</td>
                                            <td>" . $data["fixed"] . "</td>
                                            <td>" . $data["earningpotential"] . "</td>
                                            <td>" . $data["workmode"] . "</td>
                                            <td>" . $data["shift"] . "</td>
                                            <td>" . $data["employmenttype"] . "</td>
                                            <td>" . $data["agelimit"] . "</td>
                                            <td>" . $data["experience"] . "</td>
                                            <td>" . $data["gender"] . "</td>
                                            <td>" . $data["Language"] . "</td>

                                            <td><div class=' gap-2 d-flex' style='justify-content: center'>
                                            

                                            <form action='queary.php' method='post'>
                                            <button type='submit' name='delete' value=" . $data["id"] . " class='btn btn-danger ' data-mdb-ripple-init>
                                            <i class='fa-solid fa-trash'></i></button>
                                            </form>
                                            </div></td>
                                       
                                        </tr>";
                                        };
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