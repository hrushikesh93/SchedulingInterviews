<link rel="stylesheet" href="main.css">
<?php
    include 'config.php';

    if(isset($_GET['value'])){
        $ID = $_GET['value'];
    }

    $sql = "Delete from user where id = $ID";
    if ($conn->query($sql) === TRUE) {
        echo "Deleted Successfully";
        echo"<br/>";
        echo"<a href='adminUsers.php'><button>Go to users</button></a>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>