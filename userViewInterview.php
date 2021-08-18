<?php

    include 'config.php';

    $IID = $_GET['value'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Details</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'userNav.php'?>

    <h1>Interviewers</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php
            $sql = "select uid,name from interviewer,user where iid = $IID and user.id = interviewer.uid";
            $result = $conn->query($sql);
            //$count = 10;
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()){
                    //$ID = $count;
                    $ID = $row['uid'];
                    $Name = $row['name'];
                    echo '<tr>';
                        echo '<td>'.$ID.'</td>';
                        echo '<td>'.$Name.'</td>';
                        echo '<td><form method="post" action="userViewUser.php?value='.$ID.'"><button type="submit">View</button></form></td>';
                    echo '</tr>';
                    //$count--;
                }
            }
            
            ?>
        </table>
    </div>
    <h1>Applicants</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php
            $sql = "select aid,name from interviewapplicant,applicant where iid = $IID and applicant.id = interviewapplicant.aid";
            $result = $conn->query($sql);
            //$count = 10;
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()){
                    //$ID = $count;
                    $ID = $row['aid'];
                    $Name = $row['name'];
                    echo '<tr>';
                        echo '<td>'.$ID.'</td>';
                        echo '<td>'.$Name.'</td>';
                        echo '<td><form method="post" action="userViewApplicant.php?value='.$ID.'"><button type="submit">View</button></form></td>';
                    echo '</tr>';
                    //$count--;
                }
            }
            
            ?>
        </table>
    </div>
</body>
</html>