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
</head>

<body id="page-top">

    <?php
    require("../components/header.php");

    ?>
    <div id="wrapper">



        <div id="content-wrapper" style="transition: all .5s;" class="d-flex flex-column">


            <div id="content">

                <div class="container-fluid">
                    <div class="d-flex my-3 justify-content-between">
                        <h1 class="h3 mb-2 text-gray-800">Users</h1>
                        <a href="addjob.php">
                            <button class="btn btn-outline-primary" type="submit">Add Job <i class="fa-solid fa-briefcase"></i></button>
                        </a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Job Type</th>
                                            <th>Industries</th>
                                            <th>Roles</th>
                                            <th>Skills</th>
                                            <th>Education</th>
                                            <th>Location</th>
                                            <th>Description</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>hh</td>
                                            <td>gg</td>
                                            <td>gg</td>
                                            <td>gg</td>
                                            <td>gg</td>
                                            <td>gg</td>
                                            <td>gg</td>
                                            <td>gg</td>

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