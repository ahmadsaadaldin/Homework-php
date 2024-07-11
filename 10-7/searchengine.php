<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #container{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        width: 100%;
        flex-direction:column;
        padding:0;
    }
</style>
<body>
    <div id="container">
        <p style="font-size:8rem;padding:0;"><span style="color:blue;">a</span><span style="color:red;">h</span><span style="color:orange;">m</span><span style="color:blue;">a</span><span style="color:red;">d</span></p>
    
    <form action="searchengine.php" method="post">
        <input type="text" name="search">
        <input type="submit">
    </form>
        <?php
         if (!empty($_POST["search"])) {
            $search = $_POST["search"];
            header("Location: $search");
            exit();
        }
        ?>
    </div>
</body>
</html>