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
                    <li><a href="/">HOME</a><br></li>
                    <li><a href="/products"  class="nav-button products">PRODUCTS</a></li><br>
                    <li><a href="/aboutus">ABOUT US</a></a><br></li>
                    <li> <a href="/contact">CONTACT US</a><br></li>
                    <li></li>
                    
                   
                </ul>
            </nav>
            <div class="box">
                <h2>Category Manager</h2>
                <ul>
                    <li><a href="#">Desktops</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Photocopies</a></li>
                    <li><a href="#">Printers</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>Product Manager</h2>
                <ul>
                    <li><a href="#">Desktops</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Photocopies</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>User Manager</h2>
                <ul>
                    <li><a href="#">User Listing</a></li>
                    <li><a href="#">Add New User</a></li>
                </ul>
            </div>
        </div>
        <div id="right">
            <div id="rightHeader">
                <div id="hamburgerMenu">
                    <input type="checkbox" name="chkHamburgerMenu" id="chkHamburgerMenu">
                    <label for="chkHamburgerMenu">
                        <div class="line-01"></div>
                        <div class="line-02"></div>
                        <div class="line-03"></div>
                    </label>
                    <div id="wholeLinks">
                        <div class="links">
                            <div class="box">
                                <h2>Category Manager</h2>
                                <ul>
                                    <li><a href="#">Desktops</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Photocopies</a></li>
                                    <li><a href="#">Printers</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                            <div class="box">
                                <h2>Category Manager</h2>
                                <ul>
                                    <li><a href="#">Desktops</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Photocopies</a></li>
                                    <li><a href="#">Printers</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                            <div class="box">
                                <h2>Category Manager</h2>
                                <ul>
                                    <li><a href="#">Desktops</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Photocopies</a></li>
                                    <li><a href="#">Printers</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h1>@yield('rightTitle')</h1>
            </div>
            <div id="toolbar">@yield('toolbar')</div>
            <div id="content">
                @yield('content')
            </div>
            
        </div>
    </div>