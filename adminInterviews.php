<?php
    include 'config.php';
    session_start();
    if(isset($_SESSION['id'])){
    if($_SESSION['id'] == 1){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Interviews</title>
</head>
<body>
    <?php include 'navbar.php'?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
            <?php
            $sql = "SELECT id, name,date FROM interview group by id";
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
                    echo '<td><form method="post" action="viewInterview.php?value='.$ID.'"><button type="submit">View</button></form></td>';
                    echo '<td><form method="post" action="deleteInterview.php?value='.$ID.'"><button type="submit" class="del" >Delete</button></form></td>';
                echo '</tr>';
                //$count--;
                }
            }
            
            ?>
        </table>
    </div>
    <br><br><br><br>
    <div>
        <table>
            <tr>
                <form method="post" action="addInterviews.php">
                    <td>Name<input type="text" name="name" required></td>
                    <td>date<input type="date"name="date" required></td>
                    <td>slot<select name="slot" required><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></td>
                    <td colspan='4'><button type="submit" href="addInterviews.php">Add Interviews</button></td>
                </form>
            </tr>
        </table>
    </div>
</body>
</html>
</body>
</html>
<?php
    }}
    else{
        header("Location:loginError.php");
    }
?>