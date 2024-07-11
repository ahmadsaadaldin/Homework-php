<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="todo.php" method="post">
        <label for="todo">add to do</label>
        <input type="text" name="todo">
        <input type="submit">
    </form>
    <?php
   session_start();

   // Initialize the to-do list if not already done
   if (!isset($_SESSION['todo_list'])) {
       $_SESSION['todo_list'] = array();
   }
   
   // Add new item to the to-do list if the form is submitted
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['todo'])) {
       $_SESSION['todo_list'][] = $_POST['todo'];
   }
   if (!empty($_SESSION['todo_list'])) {
    foreach ($_SESSION['todo_list'] as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>";}}
    ?>
</body>
</html>