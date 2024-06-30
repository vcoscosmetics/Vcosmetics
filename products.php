<?php
include ("connection/conn.php");

?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/mycss.css">

    <style>



    </style>
</head>

<body>
    <!-- loder -->

    <?php

    include ("preloader.php");

    ?>

    <!--==================================================-->
    <!-- Start Topbar Area -->
    <!--==================================================-->
    <?php

    include ("topbar.php");

    ?>
    <!--==================================================-->
    <!-- End Topbar Area -->
    <!--==================================================-->

    <?php

    include ("header.php");

    ?>


    <div class="product-section">

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap:2rem; margin-bottom:5rem; padding:5rem;">

            <?php
            $sql_query = "SELECT * FROM `products-list`";
            $result = mysqli_query($conn, $sql_query);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card" style=" height: auto;">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p style="" class="card-text price" >Price: <i
                                class="fa-solid fa-indian-rupee-sign" style = "font-size: 1rem"></i><?php echo $row['price']; ?></p>

                        <!-- <p class="card-text"><?php echo $row['short-des']; ?> </p> -->
                        <button class="btn-open-popup" onclick="togglePopup()">View More</button>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>

    <div id="popupOverlay" class="overlay-container">
        <div class="popup-box">
            <div class="Popup-header">

                <button class="btn-close-popup" onclick="togglePopup()">
                    X
                </button>
            </div>
            <h2 style="color: green;">Query Form</h2>

            <form class="form-container">
                <label class="form-label" for="name">
                    Name:
                </label>
                <input class="form-input" type="text" placeholder="Enter Your Username" id="name" name="name" required>

                <label class="form-label" for="email">Email:</label>
                <input class="form-input" type="email" placeholder="Enter Your Email" id="email" name="email" required>
                <label class="form-label" for="name">
                    Contact No:
                </label>
                <input class="form-input" type="text" placeholder="Enter Your Username" id="name" name="name" required>
                <label class="form-label" for="name">
                    State:
                </label>
                <input class="form-input" type="text" placeholder="Enter Your Username" id="name" name="name" required>

                <button class="btn-submit" type="submit">
                    Submit
                </button>
            </form>


        </div>
    </div>













    <?php

    include ("sidebar.php");

    ?>
    <!--==================================================-->
    <!-- End Sidebar Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start Footer Area -->
    <!--==================================================-->
    <?php

    include ("footer.php");

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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

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