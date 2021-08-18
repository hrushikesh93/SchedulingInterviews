<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php if(($_GET['type']) == 'admin'){?>
        <h1>Hello Admin</h1>
        <div>
            <table>
                <tr>
                    <td>
                        <form method="post" action="passcheck.php">
                            <div>
                                <label>Please Enter admin's Password</label>
                                <input type="password" name="AdminPass" required/>
                            </div>
                            <br><br><br>
                            <div>
                                <button type="submit" onclick="<?php ?>">Submit</button>
                            </div>
                        </form>
                    </td>
                </tr>
                
            </table>
        </div>
    <?php }?>
    <?php if(($_GET['type']) == 'user'){?>
        <h1>Welcome</h1>
        <table>
            <tr>
                <td>
                    <form method="post" action="passcheck.php">
                        <div>
                            <label>Email : </label>
                            <input type="mail" name="mail_id"/>
                        </div>
                        <br><br><br>
                        <div>
                            <label>Password : </label>
                            <input type="password" name="pass"/>
                        </div>
                        <br><br><br>
                        <div>
                            <button type="submit" onclick="<?php ?>">Submit</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>

    <?php }?>
</body>
</html>