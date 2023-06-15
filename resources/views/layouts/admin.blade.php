<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | Ecommerce Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--site icon-->
    <link href="{{asset('assets/admin-images/E.png')}}" rel="icon" type="image/x-icon"/>


    <!--google fonts-->

    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap')}}" rel="stylesheet">

    <!--icon-->
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- flat icon -->

    <link rel='stylesheet' href='{{asset('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css')}}'>
    <link rel='stylesheet' href='{{asset('https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css')}}'>
    <link rel='stylesheet' href='{{asset('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css')}}'>
    <link rel='stylesheet' href='{{asset('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css')}}'>






    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-css/admin-responsive.css')}}">


</head>
<body class="body-color">

<!-- Main Layout starts -->

<section class="main-layout">
    <div class="container">


        <!-- Side Nav bar starts-->

        <div class="side-nav">
            <div class="logo-menu">

                <!-- Menu bar starts-->

                <a href="#" class="menu-toggle" onclick="togglemenu()">
                    <i class="fi fi-sr-menu-burger"></i>
                </a>

                <!-- Menu bar starts-->

                <!-- Logo starts -->

                <a href="/">
                    <img src="{{asset('assets/admin-images/logo.png')}}" title="Logo" alt="Admin logo">
                </a>

                <!-- Logo ends -->
            </div>

            <a href="{{route('admin.dashboard')}}" class="side-nav-list">
                <div class="side-nav-icon">
                    <i class="fi fi-rr-apps" title="Dashboard"></i>
                </div>

                <span class="side-nav-text">
							Dashboard
						</span>
            </a>

            <hr>

            <h6>Sales and Purchases</h6>

            <ul>
                <li>
                    <a href="sale.html" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-dollar" title="Sale"></i>
                        </div>

                        <span class="side-nav-text">
							        Sale
						        </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.order')}}" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-shopping-cart" title="Order"></i>
                        </div>

                        <span class="side-nav-text">
                            Order
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-box" title="Stock"></i>
                        </div>

                        <span class="side-nav-text">
							        Stock
						        </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-undo" title="Return"></i>
                        </div>

                        <span class="side-nav-text">
							        Return
						        </span>
                    </a>
                </li>

                <li>
                    <a href="#offer" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-gift" title="Offer"></i>
                        </div>

                        <span class="side-nav-text">
							        Offer
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="{{route('admin.addcoupon')}}">Create Offer</a>
                            </li>

                            <li>
                                <a href="{{route('admin.coupons')}}">Offer List</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#invoice" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-receipt" title="Invoice"></i>
                        </div>

                        <span class="side-nav-text">
							        Invoice
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Create Invoice</a>
                            </li>

                            <li>
                                <a href="#">Edit Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>


            <hr>

            <h6>Product Information</h6>

            <ul>
                <li>
                    <a href="#product" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-box" title="Product"></i>
                        </div>

                        <span class="side-nav-text">
							        Product
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="{{route('admin.addproduct')}}">Add Product</a>
                            </li>

                            <li>
                                <a href="{{route('admin.product')}}">Manage Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#category" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-layers" title="Category"></i>
                        </div>

                        <span class="side-nav-text">
							        Category
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="{{route('admin.addcategory')}}">Add Category</a>
                            </li>

                            <li>
                                <a href="{{route('admin.category')}}">Manage Category</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#brand" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rs-shield-check" title="Brand"></i>
                        </div>

                        <span class="side-nav-text">
							        Brand
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Add Brand</a>
                            </li>

                            <li>
                                <a href="#">Manage Brand</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#attributes" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-settings-sliders"></i>
                        </div>

                        <span class="side-nav-text">
							        Attributes
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="{{route('admin.add_attributes')}}">Add Attribute</a>
                            </li>

                            <li>
                                <a href="{{route('admin.attributes')}}">Manage Attributes</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>


            <hr>

            <h6>Peoples</h6>

            <ul>
                <li>
                    <a href="#customer" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-users" title="Customers"></i>
                        </div>

                        <span class="side-nav-text">
							        Customers
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="add_customer.html">Add Customer</a>
                            </li>

                            <li>
                                <a href="#">Manage Customer</a>
                            </li>

                            <li>
                                <a href="#">Leaderboard</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#admin" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-user" title="Admins"></i>
                        </div>

                        <span class="side-nav-text">
							        Admins
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Add Admin</a>
                            </li>

                            <li>
                                <a href="#">Admin list</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>


            <hr>

            <h6>Accounting and payment</h6>

            <ul>
                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-credit-card" title="Payment"></i>
                        </div>

                        <span class="side-nav-text">
							        Payment
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-computer" title="Accounting"></i>
                        </div>

                        <span class="side-nav-text">
							        Accounting
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                </li>

                <li>
                    <a href="#expenses" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-shopping-cart-add" title="Expenses"></i>
                        </div>

                        <span class="side-nav-text">
							        Expenses
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Add Expense</a>
                            </li>

                            <li>
                                <a href="#">Expenses list</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>


            <hr>

            <h6>Reports</h6>

            <ul>
                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-time-twenty-four" title="Daily Report"></i>
                        </div>

                        <span class="side-nav-text">
							        Daily Report
						        </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-calendar" title="Monthly Report"></i>
                        </div>

                        <span class="side-nav-text">
							        Monthly Report
						        </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rs-calendar" title="Yearly Report"></i>
                        </div>

                        <span class="side-nav-text">
							        Yearly Report
						        </span>
                    </a>
                </li>

            </ul>


            <hr>

            <h6>Chat</h6>

            <ul>
                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-comment" title="Chat"></i>
                        </div>

                        <span class="side-nav-text">
							        Chat
						        </span>
                    </a>
                </li>
            </ul>


            <hr>

            <h6>Marketing</h6>

            <ul>
                <li>
                    <a href="#email" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-at" title="Email"></i>
                        </div>

                        <span class="side-nav-text">
							        Email
                        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Campaign</a>
                            </li>

                            <li>
                                <a href="#">Tag</a>
                            </li>

                            <li>
                                <a href="#">Template</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sms" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-comment-alt" title="SMS"></i>
                        </div>

                        <span class="side-nav-text">
							        SMS
						        </span>

                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Campaign</a>
                            </li>

                            <li>
                                <a href="#">Tag</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

            <hr>

            <h6>Page & Layout</h6>

            <ul>
                <li>
                    <a href="#page&layout" class="side-nav-list dropdown-btn">
                        <div class="side-nav-icon">
                            <i class="fi fi-rs-layout-fluid"></i>
                        </div>

                        <span class="side-nav-text">
                            Page and Layout
                        </span>
                        <i class="fi fi-rr-angle-small-right down"></i>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <a href="#">Logo</a>
                            </li>

                            <li>
                                <a href="{{route('admin.slider')}}">Home Page Slider</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <hr>

            <h6>Setting</h6>

            <ul>
                <li>
                    <a href="#" class="side-nav-list">
                        <div class="side-nav-icon">
                            <i class="fi fi-rr-settings" title="Setting"></i>
                        </div>

                        <span class="side-nav-text">
                            Setting
                        </span>
                    </a>
                </li>
            </ul>
            <br>
            <br>
            <br>
            @livewireStyles

        </div>

        <div class="main">
            <div class="admin-header">
                <div class="admin-search-box">
                    <i class="fi fi-rr-search"></i>
                    <input type="search" name="admin-search" placeholder="Search here">
                </div>

                <div class="admin-header-content">
                    <button class="admin-header-button">
                        <a href="#" class="color-mode">
                            <i class="fi fi-rr-moon"></i>
                            <i class="fi fi-rr-sun"></i>
                        </a>
                    </button>

                    <button class="admin-header-button header-hide">
                        <a href="#">
                            <i class="fi fi-rr-bell"></i>
                        </a>
                    </button>

                    <button class="admin-header-button header-hide" style="background-image: url('{{asset('assets/admin-images/Dilshan1.png')}}');">
                        <a href="#">

                        </a>
                    </button>
                </div>
            </div>

            {{$slot}}

        </div>



    </div>
</section>







<script>
    function togglemenu(){
        let toggle = document.querySelector('.menu-toggle');
        let mainlayout = document.querySelector('.main-layout');
        toggle.classList.toggle('active');
        mainlayout.classList.toggle('active');
    }
</script>


<script>

    const colormode = document.querySelector('.color-mode');

    const bodycolor = document.querySelector('.body-color');

    colormode.onclick = function(){
        bodycolor.classList.toggle('dark')
    }

</script>



<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "flex") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "flex";
            }
        });
    }
</script>


<script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js')}}"></script>


<script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script src="{{asset('admin-js/myscript.js')}}"></script>
<script src="{{asset('admin-js/jquery.js')}}"></script>
<script src="{{asset('admin-js/popper.js')}}"></script>
<script src="{{asset('admin-js/bootstrap.js')}}"></script>
@livewireScripts
</body>
</html>
