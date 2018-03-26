<!DOCTYPE html>
<html>
<head>
<style>
	/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: pink;
    color: white;
    padding: 12px 18px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    
}

button:hover {
    opacity: 1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 12px 18px;
    background-color: pink;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    vertical-align: middle;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    }
img.avatar:hover{
    animation: shake 0.5s; 
    animation-iteration-count: infinite;
    }
	
@keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.container {
    padding: 16px;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 50%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


</style>
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
<form>

  <div id ="modal" class="imgcontainer">
    <input type="file" name="pic" accept="image/*" style="display:none"/>
	    <img style="cursor:pointer" src="data:image/png;base64,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"
		alt="Avatar" class="avatar">
  </div>
		</form>
<form name="login" action="loginvalidation.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>

</html>