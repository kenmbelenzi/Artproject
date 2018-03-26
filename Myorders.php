<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Myorders</title>
    <link rel="stylesheet" href="css/Members.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="js/images.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/home.css" type="text/css" />
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


<!--START OF BODY TAG-->


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


</div>;

<div id="mySidenav" class="sidenav">
    <a href="MyAccount.php">My account</a>
    <a href="Myorders.php">My orders </a>
    <a href="MyBookings.php">My bookings</a>
    <a href="Sellart.php">Sell Art</a>

</div>




<article  class="myorders" style="margin-left:230px">
    <h1>My orders</h1>
    <p>Check the status of your orders or browse through your past purchases</p>


    <hr>
    <br>

    <p>you have not placed any orders yet</p>
    <p><a href="shop.php"> Go shopping!</a></p>
    <br>
    <hr>


</article>

</body>
</html>
