<html lang="en">
<head>
<title>Delete page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Delete product</h1>
<form name="form" action="" method="post">
<input type="text" name="ID" id="ID" values="Enter id of student">
<input type="submit" value="delete" id="delete" name="delete">

</form>
<?php
 if(isset($_POST['ID']))
 {

$mysqli = new mysqli("db", "user", "password", "appDB");
$result = $mysqli->query("DELETE FROM `product` where `ID`={$_POST['ID']};");
 }
?>

</body>
</html>