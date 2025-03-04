<?php
require("queary.php");

$lg = $resume->languge();

$cty = $resume->district();

$skl = $resume->skilltb();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload resume</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div>
        <?php
        require("../componants/header.php");
        ?>
    </div>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <form method="post" action="queary.php" enctype="multipart/form-data">
                            <div class="row g-0">

                                <div class="col-xl-6">
                                    <div class="card-body p-md-4 text-black">


                                        <h3 class="mb-5 text-uppercase">Personal details</h3>


                                        <div class="row " style="flex-direction: column">
                                            <label class="form-label" for="form3Example1n1">Profile Pic</label>
                                            <div class="mb-3 rounded overflow-hidden" style="width:200px;height: 200px;background:#cdd3d9;display:flex;align-items:center;">
                                                <img id="selectedImage" src="../../image/avatar.png"
                                                    alt="example placeholder" style="width: 100%;" />
                                            </div>

                                            <div data-mdb-ripple-init class="btn btn-primary btn-rounded col-md-4 ms-1 mb-4">
                                                <div>
                                                    <label class="form-label text-white " for="customFile1">Upload Photo</label>
                                                    <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                    <input type="text" name="firstname" id="form3Example1m" class="form-control form-control-lg" />

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1m">Last name</label>
                                                    <input type="text" name="lastname" id="form3Example1n" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1m1">Email</label>
                                                    <input type="email" name="email" id="form3Example1m1" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <label class="form-label" for="form3Example1n1">Phone</label>
                                                    <input type="text" name="phone" id="form3Example1n1" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Address</label>
                                            <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />

                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                                    value="female" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                                    value="male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                                    value="other" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <select class="form-select" aria-label="Default select example" name="state">
                                                    <option selected>State</option>
                                                    <option>kerala</option>

                                                </select>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <select class="form-select" aria-label="Default select example" name="city">
                                                    <option selected>City</option>
                                                    <?php
                                                    foreach ($cty as $cty) {
                                                        echo  "<option>" . $cty["district"] . "</option>";
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example9">DOB</label>
                                            <input type="date" name="dob" id="form3Example9" class="form-control form-control-lg" />

                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example90">Pincode</label>
                                            <input type="text" name="pincode" id="form3Example90" class="form-control form-control-lg" />

                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example99">Professional Summary</label>
                                            <textarea class="form-control border-primary" name="aboutme" id="description" rows="4" placeholder="about me..."></textarea>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="card-body p-md-4 text-black">


                                        <div class="row">
                                            <div class="w-100 bg-white" style=" height:400px;"></div>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">Education</label>

                                            <div class="row">

                                                <div class="col-md-6 mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="form-label" for="form3Example1m">school</label>
                                                        <input type="text" name="school" id="form3Example1m" class="form-control form-control-lg" />

                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="form-label" for="form3Example1m">Date & Year</label>
                                                        <input type="date" name="schooldate" id="form3Example1n" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6 mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="form-label" for="form3Example1m">Degree</label>
                                                        <input type="text" name="degree" id="form3Example1m" class="form-control form-control-lg" />

                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="form-label" for="form3Example1m">Date & Year</label>
                                                        <input type="date" name="degreedate" id="form3Example1n" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example90">Languages</label>
                                            <select name="languages" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                <option selected>Select your Languages</option>
                                                <?php
                                                foreach ($lg as $lg) {

                                                    echo "<option >" . $lg["language"] . "</option>";
                                                }
                                                ?>
                                            </select>

                                        </div>



                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Role</label>
                                            <input type="text" name="role" id="form3Example8" class="form-control form-control-lg" />

                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Skills</label>
                                            <div class="mb-3">
                                                <?php
                                                foreach ($skl as $skl) {
                                                    echo '<span class="badge text-bg-primary skill mx-2">' . $skl["skill"] . '</span>';
                                                } ?>
                                            </div>

                                            <div id="values" class="form-control form-control-lg">

                                            </div>


                                            <input type="text" name="skills" id="skillsInput" class="form-control form-control-lg" hidden />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Portfolio</label>
                                            <div class="d-flex gap-3">
                                                <div class="w-50">
                                                    <label class="form-label" for="form3Example8">link</label>
                                                    <input type="text" name="linkone" id="form3Example8" class="form-control form-control-lg" />
                                                </div>

                                                <div class="w-50">
                                                    <label class="form-label" for="form3Example8">link 2</label>
                                                    <input type="text" name="linktwo" id="form3Example8" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="d-flex justify-content-center py-3">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Reset all</button>
                                    <button type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2">Submit form</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div>
        <?php
        require("../componants/footer.php");
        ?>
    </div>

    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>

    <script>
        function displaySelectedImage(event, elementId) {
            const selectedImage = document.getElementById(elementId);
            const fileInput = event.target;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    selectedImage.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>

    <script>
        var values = [];
        document.querySelectorAll(".skill").forEach(function(element) {
            element.addEventListener("click", function() {
                // Get the innerText of the clicked element
                var value = element.innerText;

                // Add the value to the array if not already present
                if (!values.includes(value)) {
                    values.push(value);
                    document.getElementById("skillsInput").value = values.join(",");
                }

                // Log the updated array
                console.log(values);

                // Update the content of the #values element
                var badges = values
                    .map(function(val) {
                        return '<span class="badge text-bg-secondary skill my-1" id="dlt"> <div class="d-flex"><div class="d-flex" style="align-items: center;">' + val + ' </div>  <button type="submit" class="btn btn-secondary skill-btn"><i class="fa-solid fa-x fa-2xs"></i></button> </div></span > ';
                    })
                    .join(" ");
                document.getElementById("values").innerHTML = badges;
            });
        });
    </script>


    <script>
        document.addEventListener("click", function(event) {

            if (event.target.closest(".skill-btn")) {

                const spanToRemove = event.target.closest("span");
                if (spanToRemove) {
                    spanToRemove.remove();
                }
            }
        });
    </script>
</body>

</html>