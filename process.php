<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "Minh" && $password == "studentid") {
            $_SESSION["user"] = $username;
            header("Location: Welcome.php");
        } else {
            echo "Invalid login. <a href='login.html'> Try again</a>";
        }
    
    ?>
</body>
</html>