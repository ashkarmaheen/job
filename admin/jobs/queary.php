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
            $this->image = $_POST['image'];
            $this->jobtype = $_POST['jobtype'];
            $this->industries = $_POST['industries'];
            $this->roles = $_POST['roles'];
            $this->skills = $_POST['skills'];
            $this->education = $_POST['education'];
            $this->location = $_POST['location'];
            $this->description = $_POST['description'];

            try {
                $req = "INSERT INTO jobs(companyname,image,jobtype,industries,roles,skills,education,location,description) 
                value('$this->companyname','$this->image','$this->jobtype',' $this->industries',' $this->roles','$this->skills',' $this->education','$this->location','$this->description')";
                $this->con->exec($req);

                header("location:index.php");
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }
        } else {
        }
    }
}
$jobsl = new jobs();
$jobsl->jobfn();
$jobsl->addjobfn();
