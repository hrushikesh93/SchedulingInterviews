<link rel="stylesheet" href="main.css">
<?php
    include 'config.php';

    if(isset($_GET['value'])){
        $ID = $_GET['value'];
    }

    $sql = "Delete from interview where id = $ID";
    if ($conn->query($sql) === TRUE) {
        echo "Deleted Successfully";
        echo"<br/>";
        echo"<a href='adminInterviews.php'><button>Go to interview</button></a>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>