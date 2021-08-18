<link rel="stylesheet" href="main.css">
<?php
    include 'config.php';
    //include 'CSS/main.css';

    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['date'])){
        $date = $_POST['date'];
    }
    if(isset($_POST['slot'])){
        $slot = $_POST['slot'];
    }

    $sql = "INSERT INTO interview (name, date,slot) VALUES ('$name','$date' ,'$slot')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo"<br/>";
        echo"<a href='adminInterviews.php'><button>Go to interviews</button></a>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>