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
    public $description;
    public $img;
    public $jobtable;
    public $dlt;



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
            $this->description = $_POST['description'];

            $img = "../../image/";

            $ff = $img . basename($this->image["name"]);



            if (pathinfo($ff, PATHINFO_EXTENSION) == "png" && $this->image["size"] > 500000) {

                move_uploaded_file($this->image["tmp_name"], $ff);

                echo "ok";
            } else {

                echo "error";
            }

            try {
                $req = "INSERT INTO jobs(companyname,image,jobtype,industries,roles,skills,education,location,description) 
                value('$this->companyname','$ff','$this->jobtype',' $this->industries',' $this->roles','$this->skills',' $this->education','$this->location','$this->description')";
                $this->con->exec($req);



                header("location:index.php");
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
