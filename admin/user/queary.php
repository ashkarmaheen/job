<?php

require("../../lib/db.php");
class userqueary extends DBcon
{

    public $usertable;
    public $username;
    public $password;
    public $email;


    public function __construct()
    {
        $this->dbConnect();
    }

    public function table()
    {


        try {
            $this->usertable = $this->con->prepare("SELECT * FROM  users ");
            $this->usertable->execute();

            $result = $this->usertable->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->usertable->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function adduser()
    {

        if (isset($_POST['submit'])) {

            $this->username = $_POST["username"];
            $this->email = $_POST["email"];
            $this->password = $_POST["password"];

            try {
                $req = "INSERT INTO users(username,email,password) 
           value('$this->username','$this->email','$this->password')";
                $this->con->exec($req);
            } catch (PDOException $e) {
                echo $req . "<br>" . $e->getMessage();
            }

            header("location:index.php");
        } else {
        };
    }
}
$user = new userqueary();

$user->table();

$user->adduser();
