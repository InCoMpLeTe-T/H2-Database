<?php
require_once("conn.php");
$counter = 0;
$line ="";
$line1 = "";
$line2 = "";
$line3 = "";
$list;
$concatstring = "";

if ($_POST)
{
    $list = array_values($_POST);
    
    for ($i = 1; $i < (Count($list)-2); $i++) {
        $concatstring .= $list[$i] . ",";
    }
    $temp = count($list);
    $sql = "INSERT INTO `admin` (`lærer`,`elever`,`lokale`,`bygning`) VALUES ('".$list[0]."','".$concatstring."','".$list[($temp-2)]."','".$list[($temp-1)]."')";
    $conn->query($sql);
    echo $sql;
}

//-------------------------------------------------------students checkbox
$sql ="SELECT * FROM `students`";
$result = $conn-> query($sql);
while ($row = $result->fetch_assoc())
{
    $counter++;
    $line.="<input type = 'checkbox' name = 'student".$counter."'value = '".$row['Name']."'>".$row['Name']."</imput>"; 
    $line.="<br>";
}
//-------------------------------------------------------teachers checkbox
$sql ="SELECT * FROM `teachers`";
$result = $conn-> query($sql);
while ($row = $result->fetch_assoc())
{
    $line1.="<input type = 'checkbox' name = 'teacher' value = '".$row['T_Name']."'>".$row['T_Name']."</imput>"; 
    $line1.="<br>";
}
//------------------------------------------------------classrooms checkbox
$sql ="SELECT * FROM `classrooms`";
$result = $conn-> query($sql);

while ($row = $result->fetch_assoc())
{
    $line2.="<input type = 'checkbox' name = 'Room' value = '".$row['Room']."'>".$row['Room']."</imput>"; 
    $line2.="<br>";
}
//------------------------------------------------------school Checkbox
$sql ="SELECT * FROM `school`";
$result = $conn-> query($sql);

while ($row = $result->fetch_assoc())
{
    $line3.="<input type = 'checkbox' name = 'School' value = '".$row['Name']."'>".$row['Name']."</imput>"; 
    $line3.="<br>";
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" type="text/css" href="Stylesheet.css">
<title>Torsdags projekt</title>
</head>
<body>
<div id = "topper"> 
<center> 
<h1>Awesome school project</h1>

</div>


<form method="POST">
<div id = "line1">
<h1>Lærere</h1>
<?php echo $line1;?>
</div>

<div id = "line">   
<h1>Elever</h1>
<?php echo $line;?>
</div>

<div id = "line2">
<h1>Lokale</h1>
<?php echo $line2;?>
</div>

<div id = "line3">
<h1>Bygning</h1>
<?php echo $line3;?>
</div>
<button type="submit">Book</button>
</form>
