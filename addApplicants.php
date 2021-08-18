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
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }
    if(isset($_POST['cv'])){
        $cv = $_POST['cv'];
    }

    $sql = "INSERT INTO applicant (name, mail, contact,address,cv) VALUES ('$name', '$mail','$contact' ,'$address','$cv')";
    if ($conn->query($sql) === TRUE) {
        echo "<h1>New record created successfully<h1>";
        echo"<br/>";
        echo"<a href='adminApplicants.php'><button>Go to Applicants</button></a>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>