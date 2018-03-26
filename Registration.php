<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/home.css" type="text/css" />

</head>
<body>
<?php
if (empty( $_POST)) {

    ?>
    <h1>Registration</h1>
    <form name="registration" action="Registration.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password">
        <br>
        <label for="firstname">Firstname:</label>
        <input type="text" name="first_name">
        <br>
        <label for="surname">Surname:</label>
        <input type="text" name="surname">
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>

        <button type="submit">Submit</button>


    </form>
    <?php


} else {
    $user ='root';
    $pass ='';
    $db = new PDO('mysql:host=localhost;dbname=art', $user, $pass);

    $form = $_POST;
    $username = $form [ 'username'];
    $password = $form [ 'password'];
    $first_name = $form [ 'first_name'];
    $surname = $form [ 'surname'];
    $address = $form [ 'address'];
    $email = $form [ 'email'];

    $sql = "INSERT INTO users (username, password, first_name, surname, address, email)  VALUES (:username, :password, :first_name, :surname, :address, :email)" ;
    $query = $db->prepare($sql);
    $result = $query->execute(array( ':username'=>$username, ':password'=>$password, ':first_name'=>$first_name, ':surname'=>$surname, ':address'=>$address, ':email'=>$email));
    if($result){
        echo "<p> Thankyou Riegistration complete</p>";

    } else{
        echo "<p>Error unable to register human</p>";

    }

}
?>


</body>
</html>
