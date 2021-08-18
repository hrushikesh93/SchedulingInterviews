<link rel="stylesheet" href="main.css">
<?php

    include 'config.php';
    //include 'CSS/main.css';

    $iid = $_GET['IID'];
    $uid = $_POST['uid'];

    $sql = "SELECT * FROM user WHERE id=$uid";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $sql2 = "SELECT * FROM interviewer WHERE uid=$uid and iid=$iid";
        $result2 = $conn->query($sql2);
        if($result2->num_rows>0){
            echo "Interviewer is already in Interview";
            echo"<br/>";
            echo"<a href='adminInterviews.php'><button>Go to Interviews</button></a>";
        }
        else{
            if(isset($uid) && isset($iid)){
                $query = "INSERT INTO interviewer (iid,uid) VALUES ('$iid','$uid')";
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
        echo "Interviewer Not Found";
        echo"<br/>";
        echo"<a href='adminUsers.php'><button>Go to Users</button></a>";
    }

    $conn->close();
    
?>
