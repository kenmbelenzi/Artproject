<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form name="form1" action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">upload</button>
</form>
<?php

if(isset($_POST['submit'])) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=art', $user, $pass);

    $form = $_POST;
    $image = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
    $imageSize = $_FILES['file']['size'];

    $upload_dir='uploads/';
    $imgExt=strtolower(pathinfo($image,PATHINFO_EXTENSION));
    $valid_extension=array('jpeg','jpg','png','gif','pdf');
    $picProfile=rand(1000, 1000000)."."."$image";

    move_uploaded_file($tmp_dir,$upload_dir.$picProfile);

    $stmt=$db->prepare('INSERT INTO img(image) VALUES (:image)');
    $stmt->bindParam('image',$picProfile);

    if ($stmt->execute()){
        echo "upload success";

    }else{
        echo "error";

    }



}
?>
</body>
</html>