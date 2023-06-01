<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>JalanPage Registration</title>
    <style>
        /*@import url("https://fonts.googleapis.com/css?family=Lato:400,700");*/
        #bg {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(5px);
            background-color: rgb(63,133,627);
        }

        body {
            font-family: sans-serif;
            color: #4A4A4A;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        form {
            width: 350px;
            position: relative;
        }
        form .form-field::before {
            font-size: 20px;
            position: absolute;
            left: 15px;
            top: 17px;
            color: #888888;
            content: " ";
            display: block;
            background-size: cover;
            background-repeat: no-repeat;
        }
        form .form-field {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            /*justify-content: space-between;*/
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
        }
        form input {
            font-family: inherit;
            width: 100%;
            outline: none;
            background-color: #fff;
            border-radius: 4px;
            border: none;
            display: block;
            padding: 0.9rem 0.7rem;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
            color: #4A4A4A;
        }
        form .btn {
            outline: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin: 0 auto;
            padding: 0.9rem 2.5rem;
            text-align: center;
            background-color: #000000;
            color: #fff;
            border-radius: 4px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
        }

        .loginBtn {
            text-decoration-color: rgb(242,70,53);
            color: rgb(242,70,53);
        }

        .errorMsg {
            color: red
        }

        .mb-1rem {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<div id="bg"></div>

<form name="registration" {{--onsubmit="return validation()"--}} enctype="multipart/form-data" action="/register" method="POST">
    @csrf
    <div class="form-field">
        <input type="text" placeholder="Username" name="username" required/>
    </div>
{{--    <div class="errorMsg">Username must be at least 5 characters long!</div>--}}

    <div class="form-field">
        <input type="email" placeholder="Email" name="email" required/>
    </div>

    <div class="form-field">
        <input type="password" placeholder="Password" name="password" required/>
    </div>

    <div class="form-field">
        <input type="password" placeholder="Confirm Password" required/>
    </div>
{{--    <div class="errorMsg">Confirmed password does not match!</div>--}}

    @if ($errors->any())
        <div class="form-field" role="alert">
            <strong style="color: red">{{$errors->first()}}</strong>
        </div>
    @elseif(session()->has('message'))
        <div class="form-field" role="alert">
            <strong style="color: red">{{session()->get('message')}}</strong>
        </div>
    @endif

    <div class="form-field">
        <button class="btn" type="submit">Register</button>
    </div>

    <div class="form-field" style="color: white">
        Already have an account?
        &nbsp;
        <a href="/login" class="loginBtn"><strong>Log In</strong></a>
    </div>
</form>

</body>
</html>

<script>
    function validation(){
        var form = document.forms["registration"];

    }

    // function toggleAttr(){
    //     var formElements = document.getElementsByClassName('form-field');
    //     for (var i = 0; i <formElements.length; i++){
    //         addClass(formElements[i], 'mb-1rem');
    //     }
    // }
</script>
