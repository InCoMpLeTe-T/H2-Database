<?php

require_once("conn.php");
$line = "";
$line2 = "";
$line3 = "";
$line4 = "";


$sql = "SELECT * FROM `students`";
//$sql = "SELECT id, Name FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $line.= "<br> Elev Nr: ". $row["Id"]. " - ". $row["Name"]. ". Lærer - ".$row["Teacher"]. ". Lokale - ".$row["Room"];
        $line.= "<button onclick = 'window.location.href = \" deletestudent.php?id=".$row['Id']."\"'>Delete</button><br>";
    }
}

$sql = "SELECT * FROM `teachers`";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    $line2.= "<br> Lærer Nr: ". $row["ID"]. " - ". $row["T_Name"]. ". Elever - ".$row["Students"]. ". Lokale - ".$row["ClassRoom"]. "<br>";
}

$sql = "SELECT * FROM `classrooms`";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    $line3.= "<br> Klasse lokale: ". $row["ID"]. " - ". $row["Room"]. "<br>";
}
$sql = "SELECT * FROM `school`";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    $line4.= "<br> Skole: ". $row["ID"]. " - ". $row["Name"]." - ". $row["Address"]. "<br>";
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

</div>
<center>
<button onclick="myFunction(1)">Elever</button>
<button onclick="myFunction(2)">Underviser</button>
<button onclick="myFunction(3)">Lokaler</button>
<button onclick="myFunction(4)">Skole</button>
<button onclick="window.location.href ='Admin.php'">Admin</button>

<div id="myDIV1" style="display: none">
<?php echo $line; ?>
<button onclick="window.location.href='newstudent.php'">Add New Student</button>
</div>
<div id="myDIV2" style="display: none">
<?php echo $line2; ?>
</div>
<div id="myDIV3" style="display: none">
<?php echo $line3; ?>
</div>
<div id="myDIV4" style="display: none">
<?php echo $line4; ?>
</div>

<script>
function myFunction(value) 
{
    if (value == 1) {
    document.getElementById("myDIV1").style.display = "block";
    document.getElementById("myDIV2").style.display = "none";
    document.getElementById("myDIV3").style.display = "none";
    document.getElementById("myDIV4").style.display = "none";
    }
    else if (value == 2) {
    document.getElementById("myDIV1").style.display = "none";
    document.getElementById("myDIV2").style.display = "block";
    document.getElementById("myDIV3").style.display = "none";
    document.getElementById("myDIV4").style.display = "none";
    }
    else if (value == 3) {
    document.getElementById("myDIV1").style.display = "none";
    document.getElementById("myDIV2").style.display = "none";
    document.getElementById("myDIV3").style.display = "block";
    document.getElementById("myDIV4").style.display = "none";
    }
    else if (value == 4) {
    document.getElementById("myDIV1").style.display = "none";
    document.getElementById("myDIV2").style.display = "none";
    document.getElementById("myDIV3").style.display = "none";
    document.getElementById("myDIV4").style.display = "block";
    }
}
</script>
</body>
</html>