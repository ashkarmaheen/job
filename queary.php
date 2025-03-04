<?php
require("/wamp64/www/job/lib/db.php");
class home extends DBcon
{


    public $carosil;
    public $serctry;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function getcategory()
    {

        try {
            $this->carosil = $this->con->prepare("SELECT * FROM jobs ");
            $this->carosil->execute();

            $result = $this->carosil->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->carosil->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function searchcategory()
    {


        try {
            $this->serctry = $this->con->prepare("SELECT * FROM  category ");
            $this->serctry->execute();

            $result = $this->serctry->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->serctry->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function topcategory()
    {
        try {
            $this->serctry = $this->con->prepare("
                SELECT roles, COUNT(*) AS role_count 
                FROM jobs 
                GROUP BY roles
            ");
            $this->serctry->execute();

            $result = $this->serctry->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->serctry->fetchAll();

            return $tb;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$home = new home();
$home->getcategory();
$home->searchcategory();
$home->topcategory();
