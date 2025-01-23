<?php

require("../lib/db.php");



class companies extends DBcon
{


    public $compdata;
    public $category;

    public function __construct()
    {
        $this->dbConnect();
        $this->category = $_GET["category"];
    }

    public function getcompanies()
    {

        try {
            $this->compdata = $this->con->prepare("SELECT * FROM jobs where roles like '$this->category%'");
            $this->compdata->execute();

            $result = $this->compdata->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->compdata->fetchAll();


            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$company = new companies();
$company->getcompanies();
