<?php

require("queary.php");
$data = $company->getcompanies();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <?php
            require("../componants/header.php");
            ?>
        </div>


        <?php

        foreach ($data as $data) {

            $id = $data['id'];
            echo '<div class="mt-4">
            <a href="../details?id=' . $id . '" style="text-decoration:none;">

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img style="width:100%;" src="' . $data["image"] . '" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">' . $data['jobtype'] . '</h5>
                                <p class="card-text">
                                    ' . $data['companyname'] . '
                                </p>
                                <p class="card-text">
                                    <small class="text-muted"><i class="fa-solid fa-location-dot"></i>' . $data['location'] . '</small>
                                </p>
                                <div class="card-text d-flex w-25 gap-2">
                                    <p><i class="fa-solid fa-indian-rupee-sign"></i>' . $data['fixed'] . '</p>
                                    <p>To</p>
                                    <p><i class="fa-solid fa-indian-rupee-sign"></i>' . $data['earningpotential'] . '</p>
                                </div>
                                <div class="d-flex" style="justify-content:space-between;">
                                    <div class="p-1 rounded" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;">
                                        <div class="me-1"><i class="fa-solid fa-building"></i></div>
                                        <p class="card-text">' . $data['workmode'] . '</p>

                                    </div>

                                    <div class="p-1 rounded" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;">
                                        <div class="p-1" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;">
                                            <div class="me-1"><i class="fa-regular fa-clock"></i></div>
                                            <p class="card-text">' . $data['employmenttype'] . '</p>
                                        </div>

                                    </div>

                                    <div class="p-1 rounded" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;">
                                        <div class="me-1"><i class="fa-solid fa-calendar"></i></div>
                                        <p class="card-text">' . $data['experience'] . '</p>
                                    </div>

                                    <div class="p-1 rounded" style="background-color:#dcdcdc;color:#686868;display: flex;align-items: center;justify-content: center;">
                                        <div class="me-1"><i class="fa-solid fa-language"></i></div>
                                        <p class="card-text">' . $data['Language'] . '</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        ';
        } ?>

    </div>

    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
</body>

</html>