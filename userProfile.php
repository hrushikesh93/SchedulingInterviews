<?php
    include 'config.php';
    session_start();

    $mail = '';
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        //echo $mail;
        $res=mysqli_query($conn,"select * from user where id like('$id')");
        $user=mysqli_fetch_array($res);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>userProfile</title>
</head>
<body>
    <?php include 'userNav.php'?>

    <div>
        <table>
            <tr>
                <td>Name</td><td><?php echo $user['name']?></td>
            </tr>
            <tr>
                <td>Email</td><td><?php echo $user['mail']?></td>
            </tr>
            <tr>
                <td>contact</td><td><?php echo $user['contact']?></td>
            </tr>
        </table>
    </div>
</body>
</html>