<?php
    include 'config.php';

    $Aid = $_GET['value'];
    $CV = 'Show CV'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <Script type="text/javascipt" src="main.js"></Script>
    <title>User Profile</title>
</head>

<?php
    //$Aid = setVAid();
?>
<body>
    <?php include 'userNav.php'?>

    <div>
        <?php
            $sql = "SELECT *  FROM applicant WHERE id=$Aid";
            $result = $conn->query($sql);        
        ?>
        <table>
            <?php if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
            <tr>
                <td><?php echo $row['name']?></td>
            </tr>
            <tr>
                <td><?php echo $row['mail']?></td>
            </tr>
            <tr>
                <td><?php echo $row['contact']?></td>
            </tr>
            <tr>
                <td><?php echo $row['address']?></td>
            </tr>

            <tr>
                <td><?php echo "<a href=".$row['cv'].">View CV</a>"?></td> 
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>