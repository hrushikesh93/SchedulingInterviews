<link rel="stylesheet" href="main.css">
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
    <title>Admin Page</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'navbar.php'?>
</body>
</html>

<?php
    }}
    else{
        header("Location:loginError.php");
    }
?>