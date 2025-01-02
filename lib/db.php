<?php
require("connection.php");

class DBcon extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dbCheck()
    {

        try {
            $stmt = $this->con->query("SHOW DATABASES LIKE '$this->database'");
            $exists = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($exists) {
            } else {
                $sql = "CREATE DATABASE IF NOT EXISTS $this->database";
                $this->con->exec($sql);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public  function dbConnect()
    {
        try {
            $this->con =  new PDO("mysql:host=localhost;dbname=job", "root", "");
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "db";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
