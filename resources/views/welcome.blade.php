<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Login</title>
    <style>
        .login-btn{
            font-size: 20px;
            text-decoration: none;
            color: blue;
            background: chartreuse;
            padding: 20px;
            margin:0 auto;
            line-height: 25;
        }
    </style>
</head>
<body>
    
    <div style="width: 100%; text-align:center;">
        <a href="{{ url('/google') }}" class="login-btn">Login with google</a>
    </div>
</body>
</html>