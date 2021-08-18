<link rel="stylesheet" href="main.css">
<?php

    include 'config.php';
    //include 'CSS/main.css';

    $iid = $_GET['IID'];
    $aid = $_POST['aid'];

    $sql = "SELECT * FROM applicant WHERE id=$aid";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $sql2 = "SELECT * FROM interviewapplicant WHERE aid=$aid and iid=$iid";
        $result2 = $conn->query($sql2);
        if($result2->num_rows>0){
            echo "Applicant is already in Interview";
            echo"<br/>";
            echo"<a href='adminInterviews.php'><button>Go to Interviews</button></a>";
        }
        else{
            if(isset($aid) && isset($iid)){
                $query = "INSERT INTO interviewapplicant (iid,aid) VALUES ('$iid','$aid')";
                if ($conn->query($query) === TRUE) {
                    echo "New record created successfully";
                    echo"<br/>";
                    echo"<a href='viewInterview.php?value=$iid' ><button>Go to Interview</button></a>";
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        
            else{
                echo "Insertion failes";
                echo"<br/>";
                echo"<a href='adminInterviews.php'><button>Go to interviews</button></a>";
            }
        }
    }
    else{
        echo "Applicant Not Found";
        echo"<br/>";
        echo"<a href='adminApplicants.php'><button>Go to Applicants</button></a>";
    }

    $conn->close();
    
?>
