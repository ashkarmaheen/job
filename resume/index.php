<?php require("../lib/db.php");

class Resumetb extends DBcon
{

    public $resumedata;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function resumefn()
    {

        try {
            $this->resumedata = $this->con->prepare("SELECT * FROM resume");
            $this->resumedata->execute();

            $result = $this->resumedata->setFetchMode(PDO::FETCH_ASSOC);
            $tb = $this->resumedata->fetchAll();


            return ($tb);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
$resumetb = new Resumetb();
$resdata = $resumetb->resumefn();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    foreach ($resdata as $resdata) {

        echo '<table style="width:100%;height:auto;border-spacing: 0px;background:#fffaf7;">
        <tr style="background-color:black;">
            <td style="padding:30px 0px">
                <div style="width:150px;height:150px;background-color:white;margin-left:30px;float: left;margin-bottom:40px;">
                    <img style="width:100%;" src="../image/avatar.png" alt="profimag" />
                </div>
            </td>
            <td style="width:100%;padding:60px 0px;">
                <div style="color:white;">
                    <P style="font-size: 30px;margin: 0px;font-weight: bold;">' . $resdata["firstname"] . ' ' . $resdata["lastname"] . '</P>
                    <p style="font-size: 20px;margin-bottom: 0;">Graphics Designer</p>
                </div>
            </td>

        </tr>

    </table>';
    }


    ?>
</body>

</html>