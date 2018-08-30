<?php
require_once("conn.php");
if ($_POST)
{
 $sql="INSERT INTO `students`(`name`) VALUES ('".$_POST['name']."')";
 $conn->query($sql);
 header("Location: Index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="Stylesheet" type="text/css" href="Stylesheet.css">

<title>Torsdags projekt</title>
</head>
<body>
<div id = "topper"> 
<center> 
<h1>Awesome school project</h1>
</center>
</div>
<form method = "POST">
<input type = "text" name = "name" required>
<button type = "submit">Submit</button>
</form>
</body>
</html>