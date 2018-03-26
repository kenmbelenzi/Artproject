<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link for css -->
    <link rel="stylesheet" href="css/shop.css" type="text/css" />
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
<div id="heading">
    <img src="https://www.artmajeur.com/medias/standard/l/e/leonidafremov/artwork/7990234_date.jpg" alt="" style="width:100%; height:550px">
    <div id="headertext">
        <h1 >WELCOME TO ART SHOP</h1>
        <h1 >COLLECTION 2018</h1>
        <button id="sbtn" a href="#productgrid" style="color: white; display:inline-block; background: black; border: 22px 22px;"><em>SHOP NOW</em></button>

    </div>
</div>
<!-- Product grid -->
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .w3-quarter img{margin-bottom: -6px; cursor: pointer}
    .w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
</style>
<div class="w3-row w3-grayscale-min">
    <div class="w3-quarter">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="Canoeing again">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:30%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-quarter">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="A girl, and a train passing">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>

    <div class="w3-quarter">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-quarter">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="A girl, and a train passing">
        <img src="https://pbs.twimg.com/media/DK2C63gUMAAeoBu.jpg" style="width:35%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
    </div>
</div>

<!-- Pagination -->
<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
    </div>
</div>
</body>
</html>
