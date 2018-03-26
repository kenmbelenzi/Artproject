
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Members.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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
<form method="post" enctype="multipart/form-data">
        <h1>Sellart</h1>
        <p>Sell art</p>
        <hr>
        <input type="file" name="image">

        <br>
        <input type="submit" name="submit" value="upload">

    </form>

    <?php
    if(isset($_POST['submit'])){

    include_once 'trial.php';
    $name= $_FILES['image']['name'];
    $type=$_FILES['image']['type'];
    $data=file_get_contents($_FILES['image']['tmp_name']);
    $stmt=("INSERT INTO image(name, image) VALUES (:name, :image)");

        $result = $stmt(array( ':username'=>$username, ':password'=>$password, ':first_name'=>$first_name, ':surname'=>$surname, ':address'=>$address, ':email'=>$email));
        if($result){
            echo "<p> Thankyou Riegistration complete</p>";

        } else{
            echo "<p>Error unable to register human</p>";

        }
    $stmt->execute();

    }
?>
</body>
</html>


