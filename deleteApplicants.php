<link rel="stylesheet" href="main.css">
<?php
    include 'config.php';

    if(isset($_GET['value'])){
        $ID = $_GET['value'];
    }

    $sql = "Delete from applicant where id = $ID";
    if ($conn->query($sql) === TRUE) {
        echo "Deleted Successfully";
        echo"<br/>";
        echo"<a href='adminApplicants.php'><button>Go to Applicants</button></a>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>