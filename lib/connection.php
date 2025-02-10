<?php




class Connect
{

    public $con;
    public $database;
    public $localhost;
    public $username;
    public $password;

    public function __construct()
    {
        $this->database = "job";
        $this->localhost = "mysql:host=localhost";
        $this->username = "root";
        $this->password = "";
        $this->con = new PDO($this->localhost, $this->username, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
