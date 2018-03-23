
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Members.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <title>My Account</title>
</head>
<body>



<?php
if (empty($_POST)) {
    ?>

    <form method="post" enctype="multipart/form-data">
        <h1>My account</h1>
        <p>Sell art</p>
        <hr>
        <input type="file" name="image">
        <br>
        <label for=>Description</label>
        <input type="text" name="description">
        <br>
        <label for=>Price</label>
        <input type="text" name="price">
        <br>
        <input type="submit" name="submit" value="upload">

    </form>

    <?php
}else{
    $user ='root';
    $pass ='';
    $db = new PDO('mysql:host=localhost;dbname=art', $user, $pass);
    $form=$_POST;
    $image=$form ['image'];
    $description=$form['description'];
    $price=$form['price'];
    $image= file_get_contents($image);
    $image= base64_encode($image);
    $image = addslashes($_FILES['image']['tmp_name']);

    $sql="INSERT INTO images(image, description, price)  VALUES (:image, :description, :price)";
    $query = $db->prepare($sql);
    $result= $query->execute(array(':image'=>$image, ':description'=>$description, 'price'=>$price));
    if($result){
        echo "<p> Thankyou Riegistration complete</p>";

    } else{
        echo "<p>Error unable to register human</p>";

    }

}






/*if(isset($_POST['submit']))
{
    if (getimagesize($_FILES['image']['tmp_name'])== false){
        echo "errroroorrr";
        }
        else{
        $image = addslashes($_FILES['image']['tmp_name']);
        $name = addslashes($_FILES['image']['tmp_name']);
        $image= file_get_contents($image);
        $image= base64_encode($image);
        //saveimage($name,$image);


        }
}
/*function saveimage($name,$image){

    $user ='root';
    $pass ='';
    $db = new PDO('mysql:host=localhost;dbname=art', $user, $pass);
    $query="insert into images(description,image) values ('name','image')";
    $result=$query->execute;
    if($result){
        echo "<br> inage uploaded";
    }
    else{
        echo "<br> image not uploaded";
    }



}
*/
?>
</body>
</html>


