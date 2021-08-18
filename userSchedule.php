<?php
    include 'config.php';
    session_start();

    function slotCheck($date,$slot){
        include 'config.php';
        $uid = $_SESSION['id'];
        $sql = "SELECT * FROM interviewer,interview where uid=$uid and slot=$slot";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                //echo $date ;echo " ";echo $row['date'];echo "------";
                if($date == $row['date']){
                    //echo "Matched";
                    return "<p style='color:red;'>Alloted<p>";
                }
                else{
                    return "<p style='color:blue;'>Not Alloted<p>";
                }
            }
        }else{
            return "Not Alloted";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>userSchedule</title>
</head>
<body>
    <?php include 'userNav.php'?>

    <div>
        <table>
            <tr>
                <th>Date</th>
                <th>Slot</th>
            </tr>
            <tr>
                <?php
                    $uid = $_SESSION['id'];
                    $sql = "SELECT * FROM interviewer,interview where uid = $uid group by id order by date";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row=$result->fetch_assoc()){
                            $ID = $row['id'];
                            $Date = $row['date'];
                            $Slot = $row['slot'];
                            echo '<tr>';
                                echo '<td>'.$Date.'</td>';
                                echo '<td>'.$Slot.'</td>';
                                echo '<td><form method="post" action="userViewInterview.php?value='.$ID.'"><button type="submit">View</button></form></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>