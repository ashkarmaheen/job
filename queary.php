<?php
require("/wamp64/www/job/lib/db.php");
class home extends DBcon
{


    public $carosil;
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
}

$home = new home();
$home->getcategory();
