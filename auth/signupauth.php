<?php
require("../lib/db.php");

class Sin extends DBcon
{

    public $username;
    public $email;
    public $password;




    public function __construct()
    {
        $this->dbConnect();
    }

    public function signfn()
    {
        if (isset($_POST['submit'])) {

            $this->username = $_POST["username"];
            $this->email = $_POST["email"];
            $this->password = $_POST["password"];

            try {
                $req = "INSERT INTO users(username,email,password) 
           value('$this->username','$$this->email','$$this->password')";
                $this->con->exec($req);
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }
        } else {
        };
    }
};

$conc = new sin();

$conc->signfn();
