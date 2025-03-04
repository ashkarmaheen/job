<?php

require("queary.php");
$data = $company->getcompanies();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div><?php
                require("../componants/header.php");
                ?></div>

        <?php

        foreach ($data as $data) {
            echo '<div class=" row justify-content-center">

            <div class="card mb-3 mt-5 col-md-8 ">
                <div class="row g-0">

                    <div>
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div class="bg-secondary  me-2" style="width:100px;height:100px;">
                                <img style="width:100%;" src="../../image/' . $data["image"] . '" />
                                </div>
                                <div>
                                    <h2 class="card-title">' . $data["jobtype"] . '</h2>
                                    <p class="card-text" style="font-size: 20px;">' . $data["companyname"] . '</p>
                                </div>
                            </div>

                            <div class="d-flex gap-2 text-secondary">
                                <div><i class="fa-solid fa-location-dot"></i></div>
                                <p class="card-text ">
                                    ' . $data["location"] . '
                                </p>
                            </div>

                            <div class="rounded px-3 py-2 d-flex mt-3" style="background-color:#edebee80;justify-content:space-around;">
                                <div class="text-center">
                                    <p class="card-text m-0">Fixed</p>
                                    <p class="card-text "> <i class="fa-solid fa-indian-rupee-sign me-1"></i>' . $data["fixed"] . '</p>
                                </div>

                                <div class="text-center">
                                    <p class="card-text m-0">Earning Potential</p>
                                    <p class="card-text "><i class="fa-solid fa-indian-rupee-sign me-1"></i>' . $data["earningpotential"] . '</p>
                                </div>
                            </div>

                            <div class="d-flex mt-3" style="justify-content:space-between;">
                                <div class="p-2" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;border-radius: 3px">
                                    <div class="me-1"><i class="fa-solid fa-building"></i></div>
                                    <p class="card-text">' . $data["workmode"] . '</p>

                                </div>

                                <div class="p-1" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;border-radius: 3px">
                                    <div class="p-2" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;">
                                        <div class="me-1"><i class="fa-regular fa-clock"></i></div>
                                        <p class="card-text">' . $data["employmenttype"] . '</p>
                                    </div>

                                </div>

                                <div class="p-2" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;border-radius: 3px">
                                    <div class="me-1"><i class="fa-solid fa-calendar"></i></div>
                                    <p class="card-text">' . $data["experience"] . '</p>
                                </div>

                                <div class="p-2" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;border-radius: 3px">
                                    <div class="me-1"><i class="fa-solid fa-language"></i></div>
                                    <p class="card-text">' . $data["Language"] . '</p>
                                </div>

                            </div>


                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-success btn-lg" type="submit" data-mdb-ripple-init>Apply for job</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 mt-2 col-md-8 ">
                <div class="row g-0">
                    <div class="card-body">

                        <div class="d-flex mb-2">
                            <h4 class="card-title">Job role</h4>
                        </div>

                        <div class="d-flex">
                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-building"></i> Work location</h6>
                                <p class="card-text ">
                                    ' . $data["location"] . '
                                </p>
                            </div>

                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-clipboard"></i> Department</h6>
                                <p class="card-text ">
                                    ' . $data["industries"] . '
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mt-3">
                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-code-fork"></i> Role / Category</h6>
                                <p class="card-text ">
                                    ' . $data["roles"] . '
                                </p>
                            </div>

                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-clock"></i> Employment type</h6>
                                <p class="card-text ">
                                    ' . $data["employmenttype"] . '
                                </p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-circle-half-stroke"></i> Shift</h6>
                                <p class="card-text ">
                                    ' . $data["shift"] . '
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card mb-3 mt-2 col-md-8 ">
                <div class="row g-0">
                    <div class="card-body">

                        <div class="d-flex mb-2">
                            <h4 class="card-title">Job requirements</h4>
                        </div>

                        <div class="d-flex">
                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-briefcase"></i> Experience</h6>
                                <p class="card-text ">
                                    ' . $data["experience"] . '
                                </p>
                            </div>

                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-user-graduate"></i> Education</h6>
                                <p class="card-text ">
                                    ' . $data["education"] . '
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mt-3">
                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-language"></i> English level</h6>
                                <p class="card-text ">
                                    ' . $data["Language"] . '
                                </p>
                            </div>

                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-calendar-days"></i> Age limit</h6>
                                <p class="card-text ">
                                    ' . $data["agelimit"] . '
                                </p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="col-md-6">
                                <h6 class="card-title text-secondary"><i class="fa-solid fa-user"></i> Gender</h6>
                                <p class="card-text ">
                                    ' . $data["gender"] . '
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>';
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    <div>
        <?php
        require("../componants/footer.php");
        ?>
    </div>
    </div>

    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
</body>

</html>