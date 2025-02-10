<?php

require("../lib/db.php");

class Resumetb extends DBcon
{

    public $resumedata;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function resumefn()
    {

        try {
            $this->resumedata = $this->con->prepare("SELECT * FROM resume");
            $this->resumedata->execute();

            $result = $this->resumedata->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->resumedata->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
$resumetb = new Resumetb();
$resumetb->resumefn();
