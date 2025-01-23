<?php
require("queary.php");

$ff = $jobsl->jobfn();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Job Details Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 ">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0 text-center">Job Details Form</h3>
            </div>
            <div class="card-body">
                <form method="post" action="queary.php" enctype="multipart/form-data">

                    <div class="mb-4">
                        <label for="companyName" class="form-label fw-bold">Company Name</label>
                        <input type="text" name="companyname" class="form-control border-primary" id="companyName" placeholder="Enter company name">
                    </div>

                    <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                        <div>
                            <label class="form-label text-white mb-1" for="customFile1">Choose file</label>
                            <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                        </div>
                    </div>
                    <div class="mb-3 mt-2 bg-secondary rounded" style="width: 300px;">
                        <img id="selectedImage" src="../../image/upload_3114955.png"
                            alt="example placeholder" style="width: 300px;" />
                    </div>


                    <div class="mb-4">
                        <label for="jobType" class="form-label fw-bold">Job Type</label>
                        <input type="text" name="jobtype" class="form-control border-primary" id="jobType" placeholder="Enter job type">
                    </div>

                    <div class="mb-4 d-flex gap-3">
                        <div>
                            <label for="jobType" class="form-label fw-bold">Fixed</label>
                            <input type="text" name="fixed" class="form-control border-primary" placeholder="type the amount">
                        </div>
                        <div>
                            <label for="jobType" class="form-label fw-bold">Earning Potential</label>
                            <input type="text" name="earning" class="form-control border-primary" placeholder="type the amount">
                        </div>

                    </div>



                    <div class="mb-4">
                        <label for="industries" class="form-label fw-bold">Industries</label>
                        <input type="text" name="industries" class="form-control border-primary" id="industries" placeholder="Enter industries">
                    </div>

                    <div class="mb-4">
                        <label for="industries" class="form-label fw-bold">Work Mode</label>
                        <select class="form-select" name="workmode" aria-label="Default select example">
                            <option selected value="Work from office">Work from office</option>
                            <option value="work from home">work from home</option>

                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="industries" class="form-label fw-bold">Shift</label>
                        <select class="form-select" name="shift" aria-label="Default select example">
                            <option selected value="day">day</option>
                            <option value="night">night</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="industries" class="form-label fw-bold">Employment type</label>
                        <input type="text" name="employmenttype" class="form-control border-primary" id="industries" placeholder="Enter Employment type">
                    </div>


                    <div class="mb-4">
                        <label for="roles" class="form-label fw-bold">Roles</label>
                        <select class="form-select" name="roles" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <?php
                            foreach ($ff as $tb) {
                                echo '<option >' . $tb["categoryname"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <!-- Skills -->
                    <div class="mb-4">
                        <label for="skills" class="form-label fw-bold">Skills</label>
                        <input type="text" name="skills" class="form-control border-primary" id="skills" placeholder="Enter skills">
                    </div>
                    <!-- Education -->
                    <div class="mb-4">
                        <label for="education" class="form-label fw-bold">Education</label>
                        <input type="text" name="education" class="form-control border-primary" id="education" placeholder="Enter education requirements">
                    </div>
                    <!-- Location -->
                    <div class="mb-4">
                        <label for="location" class="form-label fw-bold">Location</label>
                        <input type="text" name="location" class="form-control border-primary" id="location" placeholder="Enter location">
                    </div>

                    <div class="mb-4">
                        <label for="location" class="form-label fw-bold">Age limit</label>
                        <input type="text" name="age" class="form-control border-primary" id="location" placeholder="Enter Age Limit">
                    </div>

                    <div class="mb-4">
                        <label for="location" class="form-label fw-bold">Language</label>
                        <input type="text" name="language" class="form-control border-primary" id="location" placeholder="Enter Age Limit">
                    </div>

                    <div class="mb-4">
                        <label for="location" class="form-label fw-bold">Experience</label>
                        <input type="text" name="experience" class="form-control border-primary" id="location" placeholder="Enter Experience">
                    </div>

                    <div class="mb-4">
                        <label for="location" class="form-label fw-bold">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected value="Male">male</option>
                            <option value="Female">female</option>
                            <option value="Any gender">Any gender</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>