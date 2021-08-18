<?php
    include 'config.php';
    session_start();
    
    if(isset($_POST['AdminPass'])){
        $pass = $_POST['AdminPass'];

        $sql = "select * from user where id = 1";  
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $adminPass = $row['password'];

        if($pass == $adminPass){
            $_SESSION['id'] = $row['id'];
            header("Location:adminHome.php");
        }
        else{
            echo "<script>alert('Password Incorrect')</script>
                    <a href='login.php?type=admin'>Try again</a>" ;
        }
    }
    
    else if(isset($_POST['mail_id'])&&isset($_POST['pass'])){
        $mail_id = $_POST['mail_id'];
        $pass = $_POST['pass'];

        $mail_id = stripcslashes($mail_id);  
        $pass = stripcslashes($pass);  
        $mail_id = mysqli_real_escape_string($conn, $mail_id);  
        $pass = mysqli_real_escape_string($conn, $pass); 

        $sql = "select * from user where UPPER(mail) = UPPER('$mail_id') and password = '$pass'";  
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  

            $_SESSION['id'] = $row['id'];
            //header('Location: Home.html');
            if($_SESSION['id']){
                header('Location: userHome.php');
            }
        }  
        else{
            //header('Location: Login.html');
            echo "<h1><center> Login Failed Try again </center></h1><br/><a href='login.php?type=user'><button>Login here</button></a>";;
        } 
    }
    
?>