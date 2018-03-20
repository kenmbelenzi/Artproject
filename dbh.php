<?php

$servername = "localhost";
$username =  "root";
$password= "";
$dbname = "images";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM image";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<p>";
        echo $row ['image'];
        echo $row ['name'];
        echo "</p>";

    }
}
else {
    echo "no pics";
}




