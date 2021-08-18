<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>userApplicants</title>
</head>
<body>
    <?php include 'userNav.php'?>

    <br><br>

    <table >
        <?php
            $ID = 0;
            $Name = 'xyz';
            $count = 0;
                echo '<tr>';
                    echo '<th>ID</th><th>Name</th><th>Action</th>';
                echo '</tr>';
            while($count < 20)
            {
                $ID = $count+1;
                echo '<tr>';
                    echo '<td>'.$ID.'</td><td>'.$Name.'</td><td><button>view</button></td>';
                echo '</tr>';
                $count ++;
            }
        ?>
    </table>
</body>
</html>

