<?php

require("../../lib/db.php");
class jobs extends DBcon
{

    public $job;
    public $companyname;
    public $image;
    public $jobtype;
    public $industries;
    public $roles;
    public $skills;
    public $education;
    public $location;
    public $img;
    public $jobtable;
    public $dlt;
    public $fixed;
    public $earning;
    public $workmode;
    public $shift;
    public $employmenttype;
    public $age;
    public $language;
    public $experience;
    public $gender;



    public function __construct()
    {
        $this->dbConnect();
    }

    public function jobfn()
    {


        try {
            $this->job = $this->con->prepare("SELECT * FROM  category ");
            $this->job->execute();

            $result = $this->job->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->job->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function addjobfn()
    {


        if (isset($_POST["submit"])) {


            $this->companyname = $_POST['companyname'];
            $this->image = $_FILES['file'];
            $this->jobtype = $_POST['jobtype'];
            $this->industries = $_POST['industries'];
            $this->roles = $_POST['roles'];
            $this->skills = $_POST['skills'];
            $this->education = $_POST['education'];
            $this->location = $_POST['location'];
            $this->fixed = $_POST['fixed'];
            $this->earning = $_POST['earning'];
            $this->workmode = $_POST['workmode'];
            $this->shift = $_POST['shift'];
            $this->employmenttype = $_POST['employmenttype'];
            $this->age = $_POST['age'];
            $this->language = $_POST['language'];
            $this->experience = $_POST['experience'];
            $this->gender = $_POST['gender'];




            $img = "../../image/";

            $ff = $img . basename($this->image["name"]);
            $extension = pathinfo($ff, PATHINFO_EXTENSION);

            $imgs =  $img . $this->image["name"];



            try {


                if (in_array(strtolower($extension), ['png', 'jpg', 'jpeg']) && $this->image["size"] > 500) {
                    move_uploaded_file($this->image["tmp_name"], $ff);



                    $req = "INSERT INTO jobs(companyname,image,jobtype,industries,roles,skills,education,location,fixed,earningpotential,workmode,shift,employmenttype,agelimit,Language,experience,gender) 
                    value('$this->companyname','$imgs','$this->jobtype',' $this->industries',' $this->roles','$this->skills',' $this->education','$this->location','$this->fixed','$this->earning','$this->workmode','$this->shift','$this->employmenttype','$this->age','$this->language','$this->experience','$this->gender')";
                    $this->con->exec($req);



                    header("location:index.php");
                } else {
                    echo "error";
                }
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }
        } else {
        }
    }



    public function getjob()
    {

        try {
            $this->jobtable = $this->con->prepare("SELECT * FROM  jobs ");
            $this->jobtable->execute();

            $result = $this->jobtable->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->jobtable->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }



    public function dlt()
    {
        if (isset($_POST["delete"])) {


            $this->dlt = $_POST['delete'];

            try {
                $sql = "DELETE FROM jobs WHERE id= $this->dlt";
                $this->con->exec($sql);

                header("location:index.php");
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        } else {
        };
    }
}
$jobsl = new jobs();
$jobsl->jobfn();
$jobsl->addjobfn();
$jobsl->getjob();
$jobsl->dlt();
