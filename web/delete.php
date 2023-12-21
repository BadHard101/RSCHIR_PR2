<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id='$id'";

    $mysqli = mysqli_connect("db", "user", "password", "appDB");
    mysqli_query($mysqli, $query);
    mysqli_close($mysqli);   
}
?>
<h1>Delete Page</h1>
<div class="container">
    <form method="DELETE">
        <h2>Delete</h2>
        <input type="number" name="id" placeholder="id" required><br>
        <button type="submit" name="delete">Delete</button>
    </form>
</div>

<a href="create.php">Создать</a>
<a href="read.php">Прочитать</a>
<a href="update.php">Обновить</a>
<a href="delete.php">Удалить</a>

</body>
</html>