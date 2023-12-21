<html lang="en">
<head>
<title>Read</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Таблица студентов</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
$result = $mysqli->query("SELECT * FROM users");
foreach ($result as $row){
    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
}
?>
</table>
    <a href="create.php">Создать</a>
    <a href="read.php">Прочитать</a>
    <a href="update.php">Обновить</a>
    <a href="delete.php">Удалить</a>
</body>
</html>