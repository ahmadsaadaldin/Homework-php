<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="welcome.php" method="post">
    <label for="email">Email</label>
    <input type="text" name="email" style="margin-left: 2%;">
    <br>
    <br>
    <label for="password">password</label>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit">
</form>
your email is <?php echo $_POST["email"] ;?><br>
</body>
</html>