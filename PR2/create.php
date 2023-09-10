<html lang="en">
<head>
<title>Creating page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Add product</h1>
<form name="form" action="create.php" method="post">
  <input type="text" name="name" id="fullname" placeholder="Enter student full name">
  <input type="text" name="count" id="group" placeholder="Enter student's group">
  <input type="submit" name="save" id="save" values="save">
</form>
<?php
 if(isset($_POST['fullname']))
 {
  $mysqli = new mysqli("db", "user", "password", "appDB");
  $result = $mysqli->query("INSERT INTO `product` (`name`, `count`) values ('{$_POST['name']}', '{$_POST['count']}');");
 }

?>

</body>
</html>