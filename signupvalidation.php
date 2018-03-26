<?php

if (isset( $_POST)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=art', $user, $pass);

    $form = $_POST;
    $username = $form['username'];
    $password = $form['password'];

    $email = $form ['email'];

    $sql = "INSERT INTO users (username, password, email)  VALUES (:username, :password,:email)";
    $query = $db->prepare($sql);
    $result = $query->execute(array(':username' => $username, ':password' => $password, ':email' => $email));
    if ($result) {
        echo "<p> Thankyou Riegistration complete</p>";
        header("Location:login.php");

    } else {
        echo "<p>Error unable to register human</p>";

    }
}
