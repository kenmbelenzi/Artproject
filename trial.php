<!DOCTYPE html>
<html>
<head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","art");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL kennnn: " . mysqli_connect_error();
}
else{
    echo "connection successful";
}
?>


</body>
</html>
