<link rel="stylesheet" href="main.css">
<?php
    include 'config.php';

    if(isset($_GET['iid'])){
        $iid = $_GET['iid'];
    }
    if(isset($_POST['aid'])){
        $aid = $_POST['aid'];
        echo $aid;
    }

    if(isset($iid) && isset($aid)){
        $sql = "DELETE FROM `interviewapplicant` WHERE aid = $aid and iid = $iid";
        if ($conn->query($sql) === TRUE) {
            echo "Deleted Successfully";
            echo"<br/>";
            echo"<a href='viewInterview.php?value=$iid' ><button>Go to Interview</button></a>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>