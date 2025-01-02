<?php
require("../lib/db.php");
class log extends DBcon
{

    public $email;
    public $password;
    public $login;

    public function __construct()
    {
        $this->dbConnect();
    }



    public function loginfn()
    {

        if (isset($_POST['submit'])) {

            $this->email = $_POST["email"];
            $this->password = $_POST["password"];

            echo $this->email;
            echo $this->password;


            try {
                $this->login = $this->con->prepare("SELECT * FROM  users WHERE email='$this->email' AND password='$this->password'");
                $this->login->execute();

                if ($this->login->fetchColumn()) {
                    echo "hello";
                } else {
                    echo "error";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
        };
    }
}
$log = new log();

$log->loginfn();
