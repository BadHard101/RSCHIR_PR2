<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $surname = $_GET['surname'];

    $query = "UPDATE users SET name='$name', surname='$surname' WHERE id='$id'";

    $mysqli = mysqli_connect("db", "user", "password", "appDB");
    mysqli_query($mysqli, $query);
    mysqli_close($mysqli);   
}
?>
<h1>Update Page</h1>
<div class="container">
    <form method="PUT">
        <h2>Update</h2>
        <input type="number" name="id" placeholder="id" required><br>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="surname" placeholder="Surname" required><br>
        <button type="submit" name="update">Update</button>
    </form>
</div>

<a href="create.php">Создать</a>
<a href="read.php">Прочитать</a>
<a href="update.php">Обновить</a>
<a href="delete.php">Удалить</a>

</body>
</html>