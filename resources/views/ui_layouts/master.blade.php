<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Webcome to Visit Pole">
    <meta name="description" content="demo">
    <meta name="keywords" content="demo">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Welcome To Visit Pole</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <!-- Start navbar -->
    <div class="hide-on-mobile">
        <div class="container-fluid container w-100 laptoplogo">
            <div class="row">
                <div class="logo-section">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="{{ url('/') }}"> <img src="{{ asset('assets/images/Logoblack.png') }}"
                                    alt="visitpole"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @include('ui_layouts.nav')
    <!-- Start header -->
    <div class="container-fluid toppost">
        <div class="row bg-light border border-gray p-3 tppst">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-7">
                        <h3 id="sml" class="text-dark"> </h3>
                    </div>
                    <script type="text/javascript">
                        var clk = setInterval(clocktime, 1000);

                        function clocktime() {
                            var d = new Date();
                            var tim = d.toLocaleTimeString();
                            document.getElementById('sml').innerHTML = tim;
                        }
                    </script>
                    <div class="col-lg-5 ">
                        <a href={{ url('/') }} class="text-decoration-none">

                            <div style="background-color:#c20017; font-size:16px; padding:7px 7px;" class="text-white">
                                TOP POSTS
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div>
                </div>
                <p class="text_croll">
                    <marquee direction="left" height="50px" onmouseover="this.stop();" onmouseout="this.start();">
                        <!-- 1 -->
                        <a href="sports.php" class="text-decoration-none text-dark">
                            Risk factors that lead to decline in lung health | </a>
                        <!-- 2 -->
                        <a href="health.php" class="text-decoration-none text-dark">
                            <!-- 3 -->
                            <a href="life_style.php" class="text-decoration-none text-dark">
                                Life Sciences industry | </a>
                            <!-- 4 -->
                            <a href="economy.php" class="text-decoration-none text-dark">
                                Unleash holistic innovation for improved health outcomes and shareholder value. | </a>
                            <!-- 5 -->
                            <a href="business.php" class="text-decoration-none text-dark">Permal | </a>
                            <!-- 6 -->
                            <a href="career.php" class="text-decoration-none text-dark">
                                Back Kotak Mahindra shares trade choppy amid block deal news: check details | </a>
                    </marquee>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="row text-center">
                    <div class="col-lg-4 ">
                        <ul class="list-inline ">
                            <a href="https://www.facebook.com/visitpole/">
                                <li class="list-inline-item"><i class="fab fa-facebook-f text-dark fas1"></i></li>
                            </a>
                            <a href="https://twitter.com/visitpole">
                                <li class="list-inline-item"><i class="fab fa-twitter fas1 text-dark"></i></li>
                            </a>
                            <a href="https://www.youtube.com/@visitpole">
                                <li class="list-inline-item"><i class="fab fa-youtube fas1 text-dark"></i></li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <a href="#subscribe" class="text-decoration-none">
                            <div class=" text-white text-center fas1"
                                style="background-color:#c20017; font-size:16px; padding:7px 7px;" class="text-white">
                                <i class="fas fa-envelope ml-1"></i> SUBSCRIBE NEWSLETTERS
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    </div>
    <div class="container-fluid">
        <div class="row ">
            @yield('firstRow')
            @yield('content')
            @yield('lastRow')
        </div>
    </div><!-- end row -->
    </div>
    <footer class="mobilefooter">
        <div class="footermobile">
            <div class="dropdown">
                <a href={{ url('/') }}><img class="footerlogo" src="{{ asset('assets/images/Logoblack.png') }}"
                        alt="visitpole"></a>
                <a class="nav-link dropdown-toggle" href="#" id="dropdownButton" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="font-size:15px; color:white;">
                    Important Links
                </a>
                <ul id="dropdownList" class="py-3">
                    <li class="p-2"><i class="fas fa-phone-alt"></i><small> +917599490885</small></li>
                    <li class="p-2"><i class="fas fa-envelope-open-text"></i> <small>
                            info@digitalutilization.com</small></li>
                    <li class="p-2"><i class="fas fa-medkit"></i><small> contact@support.com</small></li>

                </ul>
            </div>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownButtonServices" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="font-size:15px; color:white;">
                    About Links
                </a>

                <ul id="dropdownListServices">
                    <li class="p-2"><a href="{{ url('about') }}" class="text-decoration-none text-white">About
                            Us</a>
                    </li>
                    <li class="p-2"><a href="{{ url('contact') }}"
                            class="text-decoration-none text-white">Contact Us</a>
                    </li>
                    <li class="p-2"><a href="{{ url('advertise') }}"
                            class="text-decoration-none text-white">Advertise With
                            Us</a></li>
                    <li class="p-2"><a href="{{ url('media') }}" class="text-decoration-none text-white">Media
                            Relations</a></li>
                    <li class="p-2"><a href="{{ url('corporate-infomation') }}"
                            class="text-decoration-none text-white">Corporate
                            Information</a></li>
                    <li class="p-2"><a href="{{ url('compliance') }}"
                            class="text-decoration-none text-white">Compliance</a>
                    </li>
                    <li class="p-2"><a href="{{ url('apps-products') }}"
                            class="text-decoration-none text-white">Apps &
                            Products</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownButtonusefull" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="font-size:15px; color:white;">
                    Usefull Links
                </a>

                <ul id="dropdownListusefull">
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Privacy
                            Policy</a></li>
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Terms of Use</a>
                    </li>
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Closed
                            Captioning Policy</a></li>
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Accessbility
                            Statement</a></li>
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Personal
                            Information</a></li>
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Data
                            Tracking</a></li>
                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Register New
                            Account</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownButtonnews" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="font-size:15px; color:white;">
                    Newsletter
                </a>
                <ul id="dropdownListnews">
                    <span itemscope itemtype="http://schema.org/Organization">
                        <link itemprop="url" href="https://www.brandliaison.in">
                        <ul>
                            <li><input type="text" name="sfname" class="form-control w-25 my-2"
                                    placeholder="Name"></li>
                            <li><input type="email" name="sfemail" class="form-control w-25 my-2"
                                    placeholder="Email"></li>
                            <li>
                                <input type="submit" name="fsubmit" class="form-control w-25 my-2"
                                    value="SUBSCRIBE" style=" font-weight:bold;">

                            </li>

                        </ul>
                    </span>
                    <br>
                </ul>
                <small class="text-secondary bm mx-4">&copy; 2022 – All Right Reserved. Designed and Developed by
                    <b class="text-white"><a href="https://digitalutilization.com/"
                            class="text-decoration-none text-white">BM Digital Utilization LLP</a></b></small>
                <ul class="list-inline  text-white ml-5" style="text-align: center;">
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                class="fas fa-chevron-up"></i></a></li>
                </ul>
            </div>
    </footer>
    <div style="background-color:#212529;" class="container-fluid mt-5 text-center laptopfooter">
        <!--Start footer-->
        <div class="row justify-content-around footer">
            <div class="col-8  col-md-4 pt-1">
                <!--Start first column-->

                <div class="logo-f"><a href={{ url('/') }}><img
                            src="{{ asset('assets/images/visitpolelogofront.png') }}" alt="visitpole"></a></div>
                <div class="ps-4">
                    <p class="text-white ">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <ul class="list-unstyled text-white">
                        <li class="p-2"><i class="fas fa-phone-alt"></i><small> +917599490885</small></li>
                        <li class="p-2"><i class="fas fa-envelope-open-text"></i> <small>
                                info@digitalutilization.com</small></li>
                        <li class="p-2"><i class="fas fa-medkit"></i><small> contact@support.com</small></li>
                    </ul>
                </div>
            </div>
            <!--end first column-->
            <div class="col-8   col-md-2 pt-5">
                <!--Start 2nd column-->
                <div>
                    <h5 class="text-white text-left">
                        About Links
                    </h5>
                    <ul class="list-unstyled text-white text-left">
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">About Us</a>
                        </li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Contact
                                Us</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Advertise
                                With Us</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Media
                                Relations</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Corporate
                                Information</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Compliance</a>
                        </li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Apps &
                                Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8  col-md-2 pt-5">
                <div>
                    <h5 class="text-white text-left">
                        Useful Links
                    </h5>
                    <ul class="list-unstyled text-white text-left">
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Privacy
                                Policy</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Terms of
                                Use</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Closed
                                Captioning Policy</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Accessbility
                                Statement</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Personal
                                Information</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Data
                                Tracking</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Register New
                                Account</a></li>
                    </ul>
                </div>
            </div>
            <!--end third column-->
            <div class="col-8  col-md-2 pt-5">
                <!--Start fourth column-->
                <div>
                    <h5 class="text-white text-center">
                        Newsletter
                    </h5>
                    <p class="text-white" id="footer_subscription_form">Subscribe our newsletter for latest world
                        news. Let's stay updated!</p>
                    <form action="" method="Post" id="footer_subn_form">
                        <div class="form-group">
                            <input type="text" name="sfname" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" name="sfemail" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-3 mb-4">
                            <input type="submit" name="fsubmit" class="form-control" value="SUBSCRIBE"
                                style=" font-weight:bold;">
                        </div>
                    </form>
                </div>
            </div>
            <!--end fourth column-->
            <!--end footer-->
            <footer style="background-color:black; ">
                <div class="row p-3 justify-content-between">
                    <div class="col-12 col-md-6  footerl ps-5">
                        <small class="text-secondary bm">&copy; 2022 – All Right Reserved. Designed and Developed
                            by <b class="text-white"><a href="https://digitalutilization.com/"
                                    class="text-decoration-none text-white">BM Digital Utilization
                                    LLP</a></b></small>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-12 col-md-3 ps-5">
                        <ul class="list-inline  text-white ml-5 ">
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                        class="fab fa-youtube"></i></a>
                            </li>

                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white"><i
                                        class="fas fa-chevron-up"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/validation.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin = "anonymous" >
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5232685410418742"
        crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        $(document).ready(function() {
            $(document).bind("contextmenu", function(e) {
                return false;
            });
        })
        $(document).ready(function() {
            $(document).bind("contextmenu", function(e) {
                return false;
            });
        })

        document.addEventListener("DOMContentLoaded", function() {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownList = document.getElementById("dropdownList");
            dropdownList.style.display = "none";
            dropdownButton.addEventListener("click", function() {
                if (dropdownList.style.display === "none") {
                    dropdownList.style.display = "block";
                } else {
                    dropdownList.style.display = "none";
                }
            });

            const dropdownButtonServices = document.getElementById("dropdownButtonServices");
            const dropdownListServices = document.getElementById("dropdownListServices");
            dropdownListServices.style.display = "none";
            dropdownButtonServices.addEventListener("click", function() {
                if (dropdownListServices.style.display === "none") {
                    dropdownListServices.style.display = "block";
                } else {
                    dropdownListServices.style.display = "none";
                }
            });


            const dropdownButtonusefull = document.getElementById("dropdownButtonusefull");
            const dropdownListusefull = document.getElementById("dropdownListusefull");
            dropdownListusefull.style.display = "none";
            dropdownButtonusefull.addEventListener("click", function() {
                if (dropdownListusefull.style.display === "none") {
                    dropdownListusefull.style.display = "block";
                } else {
                    dropdownListusefull.style.display = "none";
                }
            });


            const dropdownButtonnews = document.getElementById("dropdownButtonnews");
            const dropdownListnews = document.getElementById("dropdownListnews");
            dropdownListnews.style.display = "none";
            dropdownButtonnews.addEventListener("click", function() {
                if (dropdownListnews.style.display === "none") {
                    dropdownListnews.style.display = "block";
                } else {
                    dropdownListnews.style.display = "none";
                }
            });


        });
    </script>
    <script src="js/all.min.js"></script>
</body>

</html>
