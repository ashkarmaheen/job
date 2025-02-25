<?php
require("queary.php");
$data = $profile->profn();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../main.css/profile.css" rel="stylesheet" />
</head>

<body>
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center">
                <div class="col col-lg-9 col-xl-9">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="../image/avatar.png"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1" />

                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>Ashkar</h5>
                                <p>kerala,kottayam</p>
                            </div>
                        </div>
                        <div class="p-5 text-black bg-body-tertiary">

                        </div>
                        <div class="card-body p-4 text-black">

                            <div class="p-4 bg-body-tertiary">
                                <p class="font-italic mb-1">Web Developer</p>
                                <p class="font-italic mb-1">ashkar@gmail.com</p>
                                <p class="font-italic mb-0">9980956175</p>

                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3 mb-2 text-body">
                                <h3>View Resume & Download</h3>

                            </div>
                            <?php
                            foreach ($data as $data) {
                                echo ' <div id="hideresume" class="mb-3 d-none" style="background-color:#fcf7f354;">
                                <div class="bg-black w-100 d-flex" style="height:180px;">
                                    <div class="w-50  p-4" style="height:180px;">
                                        <div class="bg-white" style="height:130px;width:130px;">
                                        <img style="width:89%;" src="' . $data["image"] . '"/>
                                        </div>
                                    </div>
                                    <div class="w-50 text-white p-5">
                                        <h2>' . $data["firstname"] . ' ' . $data["lastname"] . '</h2>
                                        <h6>' . $data["role"] . '</h6>
                                    </div>
                                </div>

                                <div class="d-flex w-100 gap-3" style="height:180px;">
                                    <div class="p-3" style="width:35%;">
                                        <p>' . $data["address"] . '</p>
                                        <p>' . $data["email"] . '</p>
                                        <p>' . $data["phone"] . '</p>
                                        <p>' . $data["pincode"] . '</p>
                                    </div>
                                    <div class="p-3" style="width:65%;">
                                        <h2> Profile</h2>
                                        <p class="mt-3">' . $data["aboutme"] . '</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 gap-3">
                                    <div class="p-3" style="width:35%;">
                                        <h4 class="bg-black text-white p-2">Education</h4>
                                        <div>
                                            <h5>School</h5>
                                            <p>' . $data["school"] . '</p>
                                            <p>' . $data["schooldate"] . '</p>
                                        </div>

                                        <div>
                                            <h5>Degree</h5>
                                            <p>' . $data["school"] . '</p>
                                            <p>' . $data["Degreedate"] . '</p>
                                        </div>


                                    </div>
                                    <div class="p-3 mt-5" style="width:65%;">
                                    <div>
                                        <h4> Skill</h4>
                                        <p>' . $data["skills"] . '</p>
                                     </div>  

                                     <div>
                                        <h4>Gender</h4>
                                        <p>' . $data["gender"] . '</p>
                                     </div>  
                                     <div class="d-flex gap-5">
                                     <div>
                                        <h4>State</h4>
                                        <p>' . $data["state"] . '</p>
                                        </div>
                                        <div>
                                        <h4>City</h4>
                                        <p>' . $data["city"] . '</p>
                                     </div>  
                                     </div>  
                                     
                                    </div>

                                </div>

                                <div class="d-flex w-100 gap-3">
                                    <div class="p-3" style="width:35%;">
                                        <h4 class="bg-black text-white p-2">Language</h4>
                                        <p>' . $data["language"] . '</p>
                                        
                                    </div>

                                    <div class="p-3" style="width:65%;">
                                        <h4>Date of birth</h4>
                                        <p>' . $data["dob"] . '</p>

                                    </div>

                                </div>

                                <div class="d-flex w-100 gap-3">
                                    <div class="p-3" style="width:40%;">
                                        <h4>Portfolio</h4>
                                        <a href="' . $data["linkone"] . '">' . $data["linkone"] . '</a>
                                    </div>

                                    <div class="p-3" style="width:60%;margin-top:37px;">
                                        <a href="' . $data["linktwo"] . '">' . $data["linktwo"] . '</a>
                                    </div>

                                </div>
                            </div>';
                            }
                            ?>

                            <div class="text-center">
                                <a href="fpdf.php" style="text-decoration:none;">
                                    <button type="button" name="download" class="btn btn-success">Download</button>
                                </a>
                                <button type="button" name="hide" class="btn btn-success">View Resume</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('button[name="hide"]').addEventListener("click", function() {
                let resumeDiv = document.getElementById("hideresume");
                if (resumeDiv) {
                    resumeDiv.classList.toggle("d-none");
                }
            });
        });
    </script>
</body>

</html>