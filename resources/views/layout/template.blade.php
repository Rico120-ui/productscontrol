<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    @yield('headerBlock')
</head>
<body>
    <div id="wrapper">
        <div id="left">
            <h1>Admin Panel</h1>
            <nav>
                <ul>
                    <li><a href="/">HOME</a><br></li><br>
                    <li><a href="/products"  class="nav-button products">PRODUCTS</a></li><br>
                    <li><a href="/aboutus">ABOUT US</a></a><br></li><br>
                    <li> <a href="/contact">CONTACT US</a><br></li><br>
                </ul>
            </nav>
        </div>
        <div id="right">
            <div id="rightHeader">
                <div id="hamburgerMenu">
                
                </div>
                <h1>@yield('rightTitle')</h1>
            </div>
            <div id="toolbar">@yield('toolbar')</div>
            <div id="content">
                @yield('content')
            </div>
            
        </div>
    </div>