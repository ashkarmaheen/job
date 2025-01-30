<?php
require("../lib/db.php");

class profile extends DBcon
{

    public $protable;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function profn()
    {

        try {
            $this->protable = $this->con->prepare("SELECT * FROM  resume ");
            $this->protable->execute();

            $result = $this->protable->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->protable->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
$profile = new profile();
$profile->profn();
