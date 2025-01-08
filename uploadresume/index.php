<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload resume</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">


                                    <h3 class="mb-5 text-uppercase">Personal details</h3>

                                    <div class="row">

                                        <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                            <div>
                                                <label class="form-label text-white mb-1" for="customFile1">Choose file</label>
                                                <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-2 bg-secondary rounded" style="width: 300px;">
                                            <img id="selectedImage" src="../image/profile-user.png"
                                                alt="example placeholder" style="width: 300px;" />
                                        </div>

                                        <div class="col-md-6 mb-4">



                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m1">Mother's name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n1">Father's name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Address</label>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                                value="option1" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                                value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                                value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <select data-mdb-select-init>
                                                <option value="1">State</option>
                                                <option value="2">Option 1</option>
                                                <option value="3">Option 2</option>
                                                <option value="4">Option 3</option>
                                            </select>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <select data-mdb-select-init>
                                                <option value="1">City</option>
                                                <option value="2">Option 1</option>
                                                <option value="3">Option 2</option>
                                                <option value="4">Option 3</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example9" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example9">DOB</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example90" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example90">Pincode</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example99" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example99">Course</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example97" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Reset all</button>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>