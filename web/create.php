<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_GET['name'];
    $surname = $_GET['surname'];

    $query = "INSERT INTO users (name, surname) VALUES ('$name', '$surname')";

    $mysqli = mysqli_connect("db", "user", "password", "appDB");
    mysqli_query($mysqli, $query);
    mysqli_close($mysqli);   
}
?>
<h1>Create Page</h1>
<div class="container">
    <form method="POST">
        <h2>Creation</h2>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="surname" placeholder="Surname" required><br>
        <button type="submit" name="create">Create</button>
    </form>
</div>

<a href="create.php">Создать</a>
<a href="read.php">Прочитать</a>
<a href="update.php">Обновить</a>
<a href="delete.php">Удалить</a>

</body>
</html>