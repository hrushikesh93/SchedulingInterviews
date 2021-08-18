<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
            background-color: palegoldenrod;
            background-image: url(bg.jpg);
        }
        div{
            text-align:center;
        }
        button{
            background-color: blue;
            padding: 10px;
            border-radius: 10%;
            cursor: pointer;
            margin:10px;
            font-size:15px;
            font-weight:1000;
        }
        .center{
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div class="center">
       <h2>Login As</h2> 
       <a method="GET" href="login.php?type=admin"><button>Admin</button></a> <br>
       <a method="GET" href="login.php?type=user"><button>User</button></a>
    </div>
    
</body>
</html>