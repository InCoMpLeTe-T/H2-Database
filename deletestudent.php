<?php
require_once ("conn.php");
$sql = "DELETE FROM `students` WHERE `Id` = ".$_GET['id'];
$conn->query($sql);
header("Location: Index.php");
?>