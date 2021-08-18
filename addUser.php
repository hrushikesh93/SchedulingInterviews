<link rel="stylesheet" href="main.css">
<?php
    include 'config.php';
    //include 'CSS/main.css';
    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
    }
    if(isset($_POST['contact'])){
        $contact = $_POST['contact'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    $sql = "INSERT INTO user (name, mail, contact,password) VALUES ('$name', '$mail','$contact' ,'$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<h1>New record created successfully<h1>";
        echo"<br/>";
        echo"<a href='adminUsers.php'><button>Go to users</button></a>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>