<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vcos Cosmetics</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="assets/css/dropdown.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <style> 
        /* body { 
            margin: 0; 
            padding: 0; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif; 
        }  */
  
        .btn-open-popup { 
            padding: 12px 24px; 
            font-size: 18px; 
            background-color: teal; 
            color: #fff; 
            border: none; 
            border-radius: 8px; 
            cursor: pointer; 
            transition: background-color 0.3s ease; 
        } 
  
        .btn-open-popup:hover { 
            background-color: #4caf50; 
        } 
  
        .overlay-container { 
            display: none; 
            position: fixed; 
            z-index: 999;
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0, 0, 0, 0.6); 
            justify-content: center; 
            align-items: center; 
            opacity: 0; 
            transition: opacity 0.3s ease; 
        } 
  
        .popup-box { 
            background: #fff; 
            padding: 24px; 
            border-radius: 12px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4); 
            width: 320px; 
            text-align: center; 
            opacity: 0; 
            transform: scale(0.8); 
            animation: fadeInUp 0.5s ease-out forwards; 
        } 
  
        .form-container { 
            display: flex; 
            flex-direction: column; 
        } 
  
        .form-label { 
            margin-bottom: 10px; 
            font-size: 16px; 
            color: #444; 
            text-align: left; 
        } 
  
        .form-input { 
            padding: 10px; 
            margin-bottom: 20px; 
            border: 1px solid #ccc; 
            border-radius: 8px; 
            font-size: 16px; 
            width: 100%; 
            box-sizing: border-box; 
        } 
  
        .btn-submit, 
        .btn-close-popup { 
            padding: 12px 24px; 
            border: none; 
            border-radius: 8px; 
            cursor: pointer; 
            transition: background-color 0.3s ease, color 0.3s ease; 
        } 
  
        .btn-submit { 
            background-color: green; 
            color: #fff; 
        } 
  
        .btn-close-popup { 
            margin-top: 12px; 
            background-color: #e74c3c; 
            color: #fff; 
        } 
  
        .btn-submit:hover, 
        .btn-close-popup:hover { 
            background-color: #4caf50; 
        } 
  
        /* Keyframes for fadeInUp animation */ 
        @keyframes fadeInUp { 
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            } 
  
            to { 
                opacity: 1; 
                transform: translateY(0); 
            } 
        } 
  
        /* Animation for popup */ 
        .overlay-container.show { 
            display: flex; 
            opacity: 1; 
        } 
    </style> 
</head>

<body>
    <!-- loder -->

    <?php

    include("preloader.php");

    ?>

    <!--==================================================-->
    <!-- Start Topbar Area -->
    <!--==================================================-->
    <?php

    include("topbar.php");

    ?>
    <!--==================================================-->
    <!-- End Topbar Area -->
    <!--==================================================-->

    <?php

    include("header.php");

    ?>


    <div class="product-section" >

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap:2rem; margin-bottom:5rem; padding:5rem;">

            <div class="card" style=" height: auto;">
                <img src="https://5.imimg.com/data5/UD/JM/TT/SELLER-1503280/premium-quality-aloevera-juice-500-ml-500x500.jpg" class="card-img-top" style="height: 15rem;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aloevera Juice</h5>
                    <p style="font-weight: 600;" class="card-text">Price: 198</p>

                    <p class="card-text">Soothing, hydrating gel extracted from aloe vera leaves, </p>
                    <button class="btn-open-popup" onclick="togglePopup()" >Queries</button>
                </div>
            </div>


            <div class="card" style="  height: auto;">
                <img src="https://5.imimg.com/data5/UD/JM/TT/SELLER-1503280/premium-quality-aloevera-juice-500-ml-500x500.jpg" class="card-img-top" style="height: 15rem;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aloevera Juice</h5>
                    <p style="font-weight: 600;" class="card-text">Price: 198</p>

                    <p class="card-text">Soothing, hydrating gel extracted from aloe vera leaves, 
                    </p>
                    <button class="btn-open-popup" onclick="togglePopup()" >Queries</button>
                </div>
            </div>


            <div class="card" style="  height: auto;">
                <img src="https://5.imimg.com/data5/UD/JM/TT/SELLER-1503280/premium-quality-aloevera-juice-500-ml-500x500.jpg" class="card-img-top" style="height: 15rem;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aloevera Juice</h5>
                    <p style="font-weight: 600;" class="card-text">Price: 198</p>

                    <p class="card-text">Soothing, hydrating gel extracted from aloe vera leaves, </p>
                    <button class="btn-open-popup" onclick="togglePopup()" >Queries</button>
                </div>
            </div>


            <div class="card" style="  height: auto;">
                <img src="https://5.imimg.com/data5/UD/JM/TT/SELLER-1503280/premium-quality-aloevera-juice-500-ml-500x500.jpg" class="card-img-top" style="height: 15rem;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aloevera Juice</h5>
                    <p style="font-weight: 600;" class="card-text">Price: 198</p>

                    <p class="card-text">Soothing, hydrating gel extracted from aloe vera leaves,                     </p>
                    <button class="btn-open-popup" onclick="togglePopup()" >Queries</button>
                </div>
            </div>
        </div>
    </div>
  
    <div id="popupOverlay" 
         class="overlay-container"> 
        <div class="popup-box"> 
            <h2 style="color: green;">Popup Form</h2> 
            <form class="form-container"> 
                <label class="form-label" 
                       for="name"> 
                  Username: 
                  </label> 
                <input class="form-input" type="text" 
                       placeholder="Enter Your Username" 
                       id="name" name="name" required> 
  
                <label class="form-label" for="email">Email:</label> 
                <input class="form-input"
                       type="email" 
                       placeholder="Enter Your Email"
                       id="email" 
                       name="email" required> 
  
                <button class="btn-submit" 
                        type="submit"> 
                  Submit 
                  </button> 
            </form> 
  
            <button class="btn-close-popup" 
                    onclick="togglePopup()"> 
              Close 
              </button> 
        </div> 
    </div>













    <?php

    include("sidebar.php");

    ?>
    <!--==================================================-->
    <!-- End Sidebar Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start Footer Area -->
    <!--==================================================-->
    <?php

    include("footer.php");

    ?>
    <!--==================================================-->
    <!-- End Footer Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->
    <!-- scrollup section -->
    <div class="prgoress_scrollup">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!--==================================================-->
    <!-- End scrollup section Area -->
    <!--==================================================-->


    <script> 
        function togglePopup() { 
            const overlay = document.getElementById('popupOverlay'); 
            overlay.classList.toggle('show'); 
        } 
    </script> 


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- jquery js -->
    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- waypoints js -->
    <script src="assets/js/waypoints.min.js"></script>

    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>

    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- venobox js -->
    <script src="venobox/venobox.js"></script>

    <!--  animated-text js -->
    <script src="assets/js/animated-text.js"></script>

    <!-- venobox min js -->
    <script src="venobox/venobox.min.js"></script>

    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- jquery meanmenu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>

    <!-- jquery scrollup js -->
    <script src="assets/js/jquery.scrollUp.js"></script>

    <!-- Slick Slider -->
    <script src="assets/slick/slick.min.js"></script>

    <script src="assets/js/jquery.barfiller.js"></script>
    <!-- jquery js -->

    <!-- ragrslider js -->
    <script src="assets/js/rangeslider.js"></script>

    <!-- ragrslider js -->
    <script src="assets/js/mixitup.min.js"></script>

    <!-- theme js -->
    <script src="assets/js/theme.js"></script>

    <!-- scroll js -->
    <script src="assets/js/script.js"></script>

</body>

</html>