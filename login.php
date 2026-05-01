<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php include 'header.inc'; ?>
    <form action="process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>
    <?php include 'footer.inc'; ?>
</body>
</html>