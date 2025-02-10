<?php



require("../../lib/db.php");
class  JobData extends DBcon
{

    public $jobdt;
    public $jobcount;
    public $roleschart;


    public function __construct()
    {
        $this->dbConnect();
    }

    public function jobcndt()
    {

        try {
            $this->jobdt = $this->con->prepare("SELECT DATE_FORMAT(reg_date,'%y-%m-%d') AS Date, COUNT(id) AS no_of_rows FROM jobs GROUP BY Date ORDER BY Date");
            $this->jobdt->execute();

            $result = $this->jobdt->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->jobdt->fetchAll();

            $no_of_rows = [];
            $date = [];
            if (count($tb) > 0) {
                foreach ($tb as $row) {
                    $no_of_rows[] = $row['no_of_rows'];
                    $date[] = $row['Date'];
                }
            }

            return ['date' => $date, 'num_of_rows' => $no_of_rows];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function joblistcout()
    {




        try {
            $this->jobcount = $this->con->prepare("SELECT COUNT(*) AS count FROM jobs");
            $this->jobcount->execute();

            $result = $this->jobcount->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->jobcount->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function ctrycount()
    {




        try {
            $this->jobcount = $this->con->prepare("SELECT COUNT(*) AS count FROM category");
            $this->jobcount->execute();

            $result = $this->jobcount->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->jobcount->fetchAll();

            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function rolespeax()
    {

        try {
            $this->roleschart = $this->con->prepare("SELECT roles, COUNT(*) AS count FROM jobs GROUP BY roles");
            $this->roleschart->execute();

            $result = $this->roleschart->setFetchMode(PDO::FETCH_ASSOC);

            $tb = $this->roleschart->fetchAll();

            $count = [];
            $rolename = [];
            if (count($tb) > 0) {
                foreach ($tb as $row) {
                    $count[] = $row['count'];
                    $rolename[] = $row['roles'];
                }
            }


            return (['num_of_category' => $count, 'category' => $rolename]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$conjob = new  JobData();
$conjob->jobcndt();
$conjob->joblistcout();
$conjob->ctrycount();
$conjob->rolespeax();
