<?php
require("../lib/db.php");

class uploadresume extends DBcon
{

    public $image;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    public $gender;
    public $state;
    public $city;
    public $dob;
    public $pincode;
    public $aboutme;
    public $school;
    public $schooldate;
    public $degree;
    public $degreedate;
    public $language;
    public $role;
    public $skills;
    public $lang;
    public $img;
    public $skilltable;
    public $linkone;
    public $linktwo;





    public function __construct()
    {
        $this->dbConnect();
    }

    public function addresume()
    {

        if (isset($_POST["submit"])) {


            $this->image = $_FILES['file'];
            $this->firstname = $_POST['firstname'];
            $this->lastname = $_POST['lastname'];
            $this->email = $_POST['email'];
            $this->phone = $_POST['phone'];
            $this->address = $_POST['address'];
            $this->gender = $_POST["gender"];
            $this->state = $_POST['state'];
            $this->city = $_POST['city'];
            $this->dob = $_POST['dob'];
            $this->pincode = $_POST['pincode'];
            $this->aboutme = $_POST['aboutme'];
            $this->school = $_POST['school'];
            $this->schooldate = $_POST['schooldate'];
            $this->degree = $_POST['degree'];
            $this->degreedate = $_POST['degreedate'];
            $this->language = $_POST['languages'];
            $this->role = $_POST['role'];
            $this->skills = $_POST['skills'];
            $this->linkone = $_POST['linkone'];
            $this->linktwo = $_POST['linktwo'];

            $img = "../image/";

            $ff = $img . basename($this->image["name"]);


            if (pathinfo($ff, PATHINFO_EXTENSION) == "png" && $this->image["size"] > 500000) {

                move_uploaded_file($this->image["tmp_name"], $ff);

                echo "ok";
            } else {

                echo "error";
            }


            try {
                $req = "INSERT INTO resume(image,firstname,lastname,email,phone,address,gender,state,city,dob ,pincode, aboutme, school, schooldate, Degree, Degreedate, language, role, skills,linkone,linktwo) 
                value('$ff','$this->firstname','$this->lastname','$this->email','$this->phone','$this->address','$this->gender','$this->state','$this->city','$this->dob','$this->pincode','$this->aboutme','$this->school','$this->schooldate','$this->degree','$this->degreedate','$this->language','$this->role','$this->skills','$this->linkone','$this->linktwo')";
                $this->con->exec($req);
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }
        } else {
        }
    }

    public function languge()
    {
        try {
            $this->lang = $this->con->prepare("SELECT * FROM  languages ");
            $this->lang->execute();

            $result = $this->lang->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->lang->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function district()
    {
        try {
            $this->lang = $this->con->prepare("SELECT * FROM  districts ");
            $this->lang->execute();

            $result = $this->lang->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->lang->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function skilltb()
    {

        try {
            $this->skilltable = $this->con->prepare("SELECT * FROM  skills ");
            $this->skilltable->execute();

            $result = $this->skilltable->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->skilltable->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
};

$resume = new uploadresume();

$resume->addresume();
$resume->languge();
$resume->district();
$resume->skilltb();
