<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>@yield('title')</title>
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
</head>
<body>
    <div class="topnav" id="myTopnav">
    <a href="#jalanpagelink" class="active">JalanPage</a>
    <a href="#Orderlink">Order</a>
    <a href="#TestimoniLink">Testimoni</a>
    <a href="#ContactLink">Contact</a>
    <a href="#AboutLink">About</a>
    @auth
        <a href="/logout" class="leftnav">Logout</a>
        <a href="" class="leftnav">{{\Illuminate\Support\Facades\Auth::user()->username}}</a>
    @else
        <a href="/login" class="leftnav">Login</a>
        <a href="/register" class="leftnav">SignUp</a>
    @endif
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
    <div class="topbanner" id="banner">

    </div>
    @yield('content')
</body>
</html>
