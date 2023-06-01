<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>JalanPage Login</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
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
            font-family: 'Lato', sans-serif;
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
            justify-content: space-between;
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

        .registerBtn {
            text-decoration: none;
            color: #fff;
            text-align: right;
        }
    </style>
</head>
<body>
<div id="bg"></div>

<form enctype="multipart/form-data" action="/login" method="POST">
    @csrf
    <div class="form-field">
        <input type="email" placeholder="Email" name="email" required/>
    </div>

    <div class="form-field">
        <input type="password" placeholder="Password" name="password" required/>
    </div>

    <div class="form-field">
        &nbsp;
        <a href="/register" class="registerBtn">Register</a>
    </div>

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
        <button class="btn" type="submit">Log in</button>
    </div>
</form>

</body>
</html>
