<html lang="en">
<head>
<title>Update student</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Update product</h1>
<form name="form" action="" method="post">
  <input type="text" name="ID" id="ID" placeholder="Enter id of student">
  <input type="text" name="name" id="name" placeholder="Enter name of product">
  <input type="text" name="count" id="count" placeholder="Enter count of products">
  <input type="submit" name="update" id="update" value="update">

</form>
<?php
 if(isset($_POST['ID']))
 {

  $mysqli = new mysqli("db", "user", "password", "appDB");
  $result = $mysqli->query("UPDATE `product` set `name`='{$_POST['name']}', `count`='{$_POST['count']}' where `ID` = {$_POST['ID']};");
}
?>

</body>
</html>