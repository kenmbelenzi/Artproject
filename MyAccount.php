<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/home.css" type="text/css" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Members.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <title>My Account</title>
    <!--link for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--link for GOOGLE fonts-->
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>

    <!--header line up-->

    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>



    <script>
        // Get the modal
        var modal = document.getElementById('modal');

        // Get the button that opens the modal
        var loginbtn = document.getElementById("loginbtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("cancelbtn")[0];

        // When the user clicks the button, open the modal
        loginbtn.onclick = function() {
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>

</head>
<body>
<div id="navbar">
    <nav>

        <button id="btn"onclick="window.location.href='home.php'"<i class="fa fa-home"></i>
        <button id="btn" onclick="window.location.href='shop.php'"><i class="fa">&#xf290;</i></button>
        <button id="btn"<a href="#"></a><i class="fa fa-calendar"></i>
        <button id="btn"<a href="#"></a><i class="fa fa-book"></i></button>
        <button id="btnc" onclick="window.location.href='Myaccount.php'"<i class="fa fa-user"></i>
        <button id="btnc"<i class="fa fa-shopping-cart"></i>

    </nav>
    <div id="login">

        <button id ="signbtn" onclick="window.location.href='signup.php'">Sign Up</button>

        <button id ="loginbtn" onclick="window.location.href='login.php'" >Login</button>
    </div>
</div>

<div id="user" class="user">
    <article>
        <img class="image" src="icon.png">
        <br>
        <?php
        if(isset($_SESSION['username'])) {
            echo '<h3>'.$_SESSION["username"].'</h3>';
        }
        ?>
    </article>


</div>


<div id="mySidenav" class="sidenav">
    <a href="MyAccount.php">My account</a>
    <a href="Myorders.php">My orders </a>
    <a href="MyBookings.php">My bookings</a>

</div>



<article class="myaccount" style="margin-left:230px">
    <h1>My account</h1>
    <p>View and edit your personal info from below</p>
    <hr>
    <input type="text" class="fname" id="fname" placeholder="First Name" required>
    <p class="f_Name"> </p>
    <input type="text" class="lname" id="lname" placeholder="Last Name" required>
    <p class="l_Name"></p>
    <input type="text" class="gender" id="gender" placeholder="Gender" required>
    <p class="Gender"></p>
    <input type="email" class="email" id="email" placeholder="Email Address" required>
    <br>
    <br>
    <input type="submit" class="submit" id="submit">
    <p class="Email"></p>



</article>


</body>
</html>


