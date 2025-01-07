<?php
require("../../lib/db.php");

class category extends DBcon
{

    public $categoryname;
    public $categorytable;
    public $dlt;
    public $edt;
    public $editbn;
    public $id;
    public $inp;



    public function __construct()
    {
        $this->dbConnect();
    }

    public function ctryfn()
    {

        if (isset($_POST["submit"])) {

            $this->categoryname = $_POST['categoryname'];

            try {
                $req = "INSERT INTO category(categoryname) 
           value('$this->categoryname')";
                $this->con->exec($req);

                header("location:index.php");
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }
        } else {
        }
    }

    public function ctrytb()
    {


        try {
            $this->categorytable = $this->con->prepare("SELECT * FROM  category ");
            $this->categorytable->execute();

            $result = $this->categorytable->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->categorytable->fetchAll();

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
                $sql = "DELETE FROM category WHERE id= $this->dlt";
                $this->con->exec($sql);

                header("location:index.php");
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        } else {
        };
    }


    public function edit()
    {

        if (isset($_POST["edit"])) {

            $this->edt = $_POST["edit"];
            try {
                $this->editbn = $this->con->prepare("SELECT * FROM  category WHERE id=$this->edt");
                $this->editbn->execute();
                $result = $this->editbn->setFetchMode(PDO::FETCH_ASSOC);


                return   $this->editbn->fetchAll();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }


    public function changectry()
    {
        if (isset($_POST["editsubmit"])) {

            $this->id = $_POST["editsubmit"];
            $this->inp = $_POST["re-edit"];


            try {
                $sql = "UPDATE category SET categoryname='$this->inp' WHERE id=$this->id";
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
                header("location:index.php");
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        } else {
        };


        if (isset($_POST["cancel"])) {
            header("location:index.php");
        } else {
        }
    }
}

$ctry = new category();

$ctry->ctryfn();

$ctry->ctrytb();

$ctry->dlt();
$ctry->edit();
$ctry->changectry();
