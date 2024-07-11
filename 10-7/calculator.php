<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="post">
    <label for="fnum">first number</label>
    <input type="text" name="fnum">
    <br>
    <br>
    <label for="snum">second number</label>
    <input type="text" name="snum">
    <br>
    <br>
    <label for="operation">operation</label>
    <input type="text" name="operation">
    <br>
    <br>
    <input type="submit">
    </form>
    <?php 
    switch($_POST["operation"]){
        case "+":
            echo $_POST["fnum"]+$_POST["snum"];
            break;
        case "*":
            echo $_POST["fnum"]*$_POST["snum"];
            break;
        case "/":
            echo $_POST["fnum"]/$_POST["snum"];
            break;
        case "-":
            echo $_POST["fnum"]-$_POST["snum"];
            break;
    }
    ?>
</body>
</html>