<?php
session_start();
if (!isset($_SESSION['logined'])) {
    header("location:../../auth/login.php");
}

require("query.php");
$chartdata = $conjob->jobcndt();
$totaljob = $conjob->joblistcout();
$totalcategory = $conjob->ctrycount();
$rolechart = $conjob->rolespeax();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/main.css/sb-admin-2.min.css" rel="stylesheet" />
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

<body>

    <div id="wrapper" class="fontsmain">

        <?php
        require("../components/header.php")
        ?>

        <div id="content-wrapper" style="transition: all .5s;" class="d-flex flex-column ">


            <div id="content">




                <div class="container-fluid">


                    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-3">
                        <h4 class=" mb-0 ">Dashboard</h4>

                    </div>


                    <div class="row">


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                                                Posted Job</div>
                                            <?php foreach ($totaljob as $totaljob) {
                                                echo '
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                             ' . $totaljob["count"] . '
                                             </div>';
                                            } ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-2">
                                                applications</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4.3k</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-2">shortlisted
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">1k</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-2">
                                                category</div>
                                            <?php
                                            foreach ($totalcategory as $totalcategory) {
                                                echo ' <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              ' . $totalcategory["count"] . '
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">


                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4" style="height: 470px;">

                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Job Posting Date</h6>

                                </div>

                                <div class="card-body">
                                    <div class="chart-area">
                                        <div id="myAreaChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4" style="height: 470px;">

                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Top Job Categories by Postings</h6>

                                </div>

                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <div id="myPieChart"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>


            </div>



        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                name: "Desktops",
                data: <?php echo json_encode($conjob->jobcndt()['num_of_rows']) ?>,
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Months',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: <?php echo json_encode($conjob->jobcndt()['date']) ?>,
            }
        };

        var chart = new ApexCharts(document.querySelector("#myAreaChart"), options);
        chart.render();



        var optionss = {
            series: <?php echo json_encode($conjob->rolespeax()['num_of_category']) ?>,
            labels: <?php echo json_encode($conjob->rolespeax()['category']) ?>,
            chart: {
                type: 'donut',
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var charts = new ApexCharts(document.querySelector("#myPieChart"), optionss);
        charts.render();
    </script>


    <script src="../../javascript/script.js"></script>
</body>

</html>