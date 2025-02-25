<?php

require("../../lib/db.php");



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
            $this->compdata = $this->con->prepare("SELECT * FROM jobs WHERE roles LIKE ?");
            $this->compdata->execute(["%{$this->category}%"]);

            $result = $this->compdata->setFetchMode(PDO::FETCH_ASSOC);

            $tb = $this->compdata->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$company = new companies();
