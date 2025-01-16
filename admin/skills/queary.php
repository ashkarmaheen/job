<?php
require("../../lib/db.php");

class skill extends DBcon
{

    public $skill;
    public $skilltable;
    public $dlt;
    public $edt;
    public $editbn;
    public $id;
    public $inp;

    public function __construct()
    {
        $this->dbConnect();
    }


    public function addskill()
    {

        if (isset($_POST["submit"])) {

            $this->skill = $_POST['newkill'];

            try {
                $req = "INSERT INTO skills(skill) 
           value('$this->skill')";
                $this->con->exec($req);

                header("location:index.php");
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }
        } else {
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


    public function dlt()
    {
        if (isset($_POST["delete"])) {


            $this->dlt = $_POST['delete'];

            try {
                $sql = "DELETE FROM skills WHERE id= $this->dlt";
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
                $this->editbn = $this->con->prepare("SELECT * FROM  skills WHERE id=$this->edt");
                $this->editbn->execute();
                $result = $this->editbn->setFetchMode(PDO::FETCH_ASSOC);


                return   $this->editbn->fetchAll();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function changeskill()
    {
        if (isset($_POST["editsubmit"])) {

            $this->id = $_POST["editsubmit"];
            $this->inp = $_POST["re-edit"];


            try {
                $sql = "UPDATE skills SET skill='$this->inp' WHERE id=$this->id";
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

$skills = new skill();

$skills->addskill();

$skills->skilltb();
$skills->dlt();
$skills->edit();
$skills->changeskill();
