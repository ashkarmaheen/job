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
            $this->password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Secure password hashing

            try {
                $req = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
                $stmt = $this->con->prepare($req);
                $stmt->bindParam(':username', $this->username);
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':password', $this->password);

                if ($stmt->execute()) {
                    session_start();
                    $_SESSION['username'] = $this->username; // Store username in session
                    header("Location:../admin/dashboard/"); // Redirect to dashboard
                    exit();
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
};

$conc = new Sin();
$conc->signfn();
