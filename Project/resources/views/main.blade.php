<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    @yield('head')
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{asset('img/Logo_ITERA.png')}}" alt="" width="100" height="100">
        </div>
        <div class="nav-btn">
            <a href="/">Home</a>
            <a href="/about">About us</a>
        </div>
    </div>
    @yield('body')
</body>
</html>