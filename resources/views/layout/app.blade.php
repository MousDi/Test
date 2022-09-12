<!DOCTYPE html>
<html>
<head>
    <title>Test HomePad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form, .siginin-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row , .siginin-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        #packages{
            display: none;
        }
        #cardcontainer{
            text-align: center;
        }
    </style>
</head>
<body>
  
@yield('content')
     
</body>
<script type="text/javascript" src="{{ asset('js/signin.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/packages.js') }}"></script>
</html>