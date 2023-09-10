<html lang="en">
<head>
<title>Read students</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Read all values</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Count</th></tr>
<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
$result = $mysqli->query("SELECT * FROM student");
foreach ($result as $row){
    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['count']}</td></tr>";
}
?>
</table>
</body>
</html>