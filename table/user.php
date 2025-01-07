<?php
require("../lib/db.php");
class table extends DBcon
{

    public function __construct()
    {
        $this->dbConnect();
    }

    public function usertb()
    {

        try {
            $req = " CREATE TABLE IF NOT EXISTS users(
    id INT(10) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(20),
    password VARCHAR(20) NOT NULL)";

            $this->con->exec($req);
        } catch (PDOException $e) {
            echo $req . "<br>" . $e->getMessage();
        }
    }


    public function categorytb()
    {

        try {
            $req = " CREATE TABLE IF NOT EXISTS category(
    id INT(10) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    categoryname VARCHAR(20) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";

            $this->con->exec($req);
        } catch (PDOException $e) {
            echo $req . "<br>" . $e->getMessage();
        }
    }

    public function jobtb()
    {

        try {
            $req = " CREATE TABLE IF NOT EXISTS jobs(
    id INT(10) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    companyname VARCHAR(20) NOT NULL,
    image VARCHAR(20),
    jobtype VARCHAR(20) NOT NULL,
    industries VARCHAR(20) NOT NULL,
    roles VARCHAR(20) NOT NULL,
    skills VARCHAR(20) NOT NULL,
    education VARCHAR(20) NOT NULL,
    location VARCHAR(20) NOT NULL,
    description VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

            $this->con->exec($req);
        } catch (PDOException $e) {
            echo $req . "<br>" . $e->getMessage();
        }
    }
}
$table = new table();

$table->usertb();
$table->categorytb();
$table->jobtb();
