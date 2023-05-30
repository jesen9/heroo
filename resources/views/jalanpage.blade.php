
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
            }
        </script>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="topnav" id="myTopnav">
            <a href="#jalanpagelink" class="active">JalanPage</a>
            <a href="#Orderlink">Order</a>
            <a href="#TestimoniLink">Testimoni</a>
            <a href="#ContactLink">Contact</a>
            <a href="#AboutLink">About</a>
            <a href="#LoginLink" class="leftnav">Login</a>
            <a href="#SignupLink" class="leftnav">SignUp</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
</head>
<body>
        <div class="topbanner" id="banner">
        
        </div>
    
</body>
</html>