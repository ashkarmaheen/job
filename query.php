<?php

require("/wamp64/www/job/lib/db.php");

class Search extends DBcon
{
    public function __construct()
    {
        parent::__construct(); // Ensure the database connection is initialized
        $this->dbConnect();
    }

    public function searchfn()
    {
        // Check if POST data is received
        if (!isset($_POST['query']) || empty($_POST['query'])) {
            die(json_encode(["error" => "No vehicle data received", "post" => $_POST]));
        }

        $vehicle = trim($_POST['query']);

        // Debugging: Ensure database connection is established
        if (!$this->con) {
            die(json_encode(["error" => "Database connection error"]));
        }

        try {
            // Prepare statement (Use PDO syntax)
            $stmt = $this->con->prepare("SELECT categoryname FROM category WHERE categoryname LIKE :searchTerm LIMIT 10");

            $searchTerm = "%{$vehicle}%";

            // Bind parameter correctly for PDO
            $stmt->bindParam(":searchTerm", $searchTerm, PDO::PARAM_STR);

            // Execute and fetch results
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $output = array_column($result, "categoryname");

            echo json_encode($output);
        } catch (PDOException $e) {
            echo json_encode(["error" => "Query execution failed: " . $e->getMessage()]);
        }
    }
}

$mainsearch = new Search();
$mainsearch->searchfn();
