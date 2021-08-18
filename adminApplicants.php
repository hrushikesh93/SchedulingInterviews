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
    <title>Applicants</title>
</head>
<body>
    <?php include 'navbar.php'?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php
            $sql = "SELECT id, name FROM applicant";
            $result = $conn->query($sql);
            //$count = 10;
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()){
                    //$ID = $count;
                    $ID = $row['id'];
                    $Name = $row['name'];
                    echo '<tr>';
                        echo '<td>'.$ID.'</td>';
                        echo '<td>'.$Name.'</td>';
                        echo '<td><form method="post" action="viewApplicant.php?value='.$ID.'"><button type="submit">View</button></form></td>';
                        echo '<td><form method="post" action="deleteApplicants.php?value='.$ID.'"><button type="submit" class="del" >Delete</button></form></td>';
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
                <form method="post" action="addApplicants.php">

                    <td>Name<input type="text" name="name" required></td>
                    <td>mail<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="mail" required></td>
                    <td>contact<input type="text" name="contact" required></td>
                    <td>address<input type="text" name="address" required></td>
                    <td>Cv(paste link)<input type="text" name="cv" required></td>
                    <td colspan='4'><button type="submit" href="addApplicants.php">Add New Applicants</button></td>
                </form>
            </tr>
        </table>
    </div>
</body>
</html>
<?php
    }}
    else{
        header("Location:loginError.php");
    }
?>