<?php
    include 'config.php';

    $Uid = $_GET['value'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'userNav.php'?>>

    <div>
    <?php
            $sql = "SELECT id, name, mail, contact  FROM user WHERE id=$Uid";
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
            
            <?php }?>
        </table>
    </div>
</body>
</html>