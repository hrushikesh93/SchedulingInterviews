<?php

    include 'config.php';
    session_start();
    $uid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interviews</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <?php include 'userNav.php'?>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
            <?php
            $sql = "SELECT id, name,date FROM interview,interviewer where uid=$uid group by id";
            $result = $conn->query($sql);
            //$count = 10;
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()){
                    //$ID = $count;
                    $ID = $row['id'];
                    $Name = $row['name'];
                    $Date = $row['date'];
                echo '<tr>';
                    echo '<td>'.$ID.'</td>';
                    echo '<td>'.$Name.'</td>';
                    echo '<td>'.$Date.'</td>';
                    echo '<td><form method="post" action="userViewInterview.php?value='.$ID.'"><button type="submit">View</button></form></td>';
                echo '</tr>';
                //$count--;
                }
            }
            
            ?>
        </table>
    </div>
</body>
</html>