<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Car - Services</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


    <style>
        .bottom {
            background-color: black;
        }

        label {
            font-size: 20px;
            font-family: 'Courier New', Courier, monospace;
            padding-right: 20px;
        }

        #cars {
            padding: 5px;
            padding-right: 200px;
            font-size: 15px;
            background-color: lightgrey;
        }

        .color {
            background-color: green;
        }
    </style>



</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->

    <div class="wrapper">

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="index.html">About</a>
                    </li>
                    <li>
                        <a href="index.html">why Choose Us</a>
                    </li>
                    <li>
                        <a href="index.html">Testimonial</a>
                    </li>
                    <li>
                        <a href="index.html">Contact</a>
                    </li>
                </ul>

            </nav>
        </div>


        <div id="content">


            <!-- section -->
            <section id="home" class="bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- header -->
                        <header>
                            <!-- header inner -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 logo_section">
                                        <div class="full">
                                            <div class="center-desk">
                                                <div class="logo"> <a href="{{ url('/') }}"><img
                                                            src="images/logo.png" alt="#"></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="right_header_info">
                                            <ul>
                                                <li><img style="margin-right: 15px;" src="images/phone_icon.png"
                                                        alt="#" /><a href="#">987-654-3210</a></li>
                                                <li><img style="margin-right: 15px;" src="images/mail_icon.png"
                                                        alt="#" /><a href="#">demo@gmail.com</a></li>
                                                <li><img src="images/search_icon.png" alt="#" /></li>
                                                <li>
                                                    <button type="button" id="sidebarCollapse">
                                                        <img src="images/menu_icon.png" alt="#" />
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end header inner -->
                        </header>

                    </div>
                </div>
            </section>



            <!-- section -->
            <section id="contact" class="dark_bg_blue layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full center">
                                <h2 class="heading_main orange_heading">BOOKING</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="contact_form">
                                    <form method="post" action="{{ url('/booking') }}">
                                        @csrf
                                        <fieldset class="row">
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <input type="text" placeholder="Your Name" name="name" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <input type="email" placeholder="Email" name="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <input type="text" placeholder="Phone" name="number" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <input type="text" placeholder="Country" name="country" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <input type="text" placeholder="Address" name="address" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <input type="text" placeholder="City" name="city" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <label for="cars">Select a car:</label>
                                                    <select id="cars" name="cars">
                                                        <option value="Bugatti">Bugatti</option>
                                                        <option value="I8">I8</option>
                                                        <option value="Mustang">Mustang</option>
                                                        <option value="Rolls_Royce">Rolls Royce</option>
                                                        <option value="Porsche">Porsche</option>
                                                        <option value="GTR">GTR Nissan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <label for="cars">Select Car colors:</label>
                                                    <select id="cars" name="color">
                                                        <option value="Black">Black</option>
                                                        <option value="Red">Red</option>
                                                        <option value="White">White</option>
                                                        <option value="Yellow">Yellow</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full field">
                                                    <label for="cars">Choose Payment method:</label>
                                                    <select id="cars" name="payment">
                                                        <option value="Bank">Bank</option>
                                                        <option value="Easypaisa">Easypaisa</option>
                                                        <option value="Jaazcash">Jazzcash</option>
                                                        <option value="Cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="full center">
                                                    <button class="submit_bt">Send</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->






            <!-- footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <h3>AVALON MOTORS</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="full">
                                <ul class="social_links">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <h4 class="widget_heading">SUBSCRIBE</h4>
                            </div>
                            <div class="full subribe_form">
                                <form>
                                    <fieldset>
                                        <div class="field">
                                            <input type="email" name="mail" placeholder="Enter your email" />
                                        </div>
                                        <div class="field">
                                            <button class="submit_bt">Sumbit</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <h4 class="widget_heading">Usefull Links</h4>
                            </div>
                            <div class="full f_menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Cars</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <h4 class="widget_heading">Contact Details</h4>
                                <div class="full cont_footer">
                                    <p><strong>AVALON Car : Adderess</strong><br><br>Newyork 10012, USA<br>Phone: +987
                                        654 3210<br>demo@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

            <!-- copyright -->

            <div class="cpy_right">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <p>© 2022 All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right copyright -->

        </div>
    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Scrollbar Js Files -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/location_point.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->

</body>

</html>
