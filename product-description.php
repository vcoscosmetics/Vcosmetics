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
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>



	<style>
        .product-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
			margin-top: 5rem;
			margin-bottom: 5rem;
            box-sizing: border-box;
        }

        .product-wrapper .product-box,
        .product-wrapper .text {
            flex: 1 1 300px;
            box-sizing: border-box;
        }

        .product-wrapper .product-box .all-images {
            display: flex;
            gap: 1rem;
        }

        .product-wrapper .product-box .all-images .small-images {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .product-wrapper .product-box .all-images .small-images img {
            width: 80px;
            height: 80px;
            cursor: pointer;
            /* border: 1px solid #ccc; */
        }

        .product-wrapper .product-box .all-images .main-images {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .product-wrapper .product-box .all-images .main-images img {
			height: 400px;
			width: 400px;
            /* border: 1px solid #ccc; */

        }

        .product-wrapper .text .content {
            margin-bottom: 20px;
        }

        .product-wrapper .text .content .brand,
        .product-wrapper .text .content .Product-name {
            font-size: 18px;
            margin: 5px 0;
        }

        .product-wrapper .text .pricebox {
            margin-top: 20px;
        }

        .product-wrapper .text .pricebox .price {
            font-size: 20px;
            color: #000;
            margin-bottom: 10px;
        }

        .product-wrapper .text .pricebox .product-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .product-wrapper .text .pricebox .product-details table th,
        .product-wrapper .text .pricebox .product-details table td {
            text-align: left;
            padding: 8px;
            border: 1px solid white;
			border-bottom: 1px solid #ddd;
        }

        .product-wrapper .text .pricebox p {
            font-size: 14px;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .product-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .product-wrapper .product-box .all-images .small-images img,
            .product-wrapper .product-box .all-images .main-images img {
                width: 100%;
                height: auto;
            }

            .product-wrapper .product-box .all-images .main-images img {
                width: auto;
                height: 300px;
            }
			.product-wrapper .product-box .all-images .small-images {
            display: none;
        }
        }
    </style>
</head>

<body>


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


	<!-- Lifesafe Mobile Menu Area -->
	<div class="mobile-menu-area sticky-menu" id="navbar">
		<div class="mobile-menu">
			<div class="mobile-logo">
				<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
			</div>
			<div class="side-menu-info">
				<div class="sidebar-menu">
					<a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Header Area -->
	<!--==================================================-->

	<div class="product-wrapper">


		<div class="product-box">
			<div class="all-images">
				<div class="small-images">

				<img src="https://www.shutterstock.com/image-photo/modern-white-stone-pedestal-curved-260nw-2479851015.jpg" onclick="clickimg(this)" />
				<img src="https://m.media-amazon.com/images/I/71DKX620adL._AC_UF350,350_QL80_.jpg" onclick="clickimg(this)" />
				<img src="https://m.media-amazon.com/images/I/71DKX620adL._AC_UF350,350_QL80_.jpg" onclick="clickimg(this)" />

				</div>
				<div class="main-images">
				<img src="https://www.shutterstock.com/image-photo/modern-white-stone-pedestal-curved-260nw-2479851015.jpg" id="imagebox" />
				</div>
			</div>
		</div>

		<div class="text">
        <div class="content">
          <!-- <p class="brand">Brand: Vinayak Ayurveda</p> -->
          <p class="Product-name" style= " font-weight: 600; font-size: 1.2rem;">HNCO White Aloe Vera Gel, For Hair And Skin Care, Packaging Size: 40 KG
		  </p>
        </div>
        <div class="pricebox">
         <button style=" padding: 0.5rem 1.5rem; border:none; background-color:#258169; color: #fff; margin-bottom:2rem; border-radius:5px;">Get Price</button>
          <div class="product-details">
            <table>

              <tr>
                <th>Brand</th>
                <td>200gm</td>
              </tr>
              <tr>
                <th>Packaging Size	
				</th>
                <td>36 Months</td>
              </tr>
              <tr>
                <th>Usage/Application	
				</th>
                <td>1000</td>
              </tr>
			  <tr>
                <th>Type Of Packaging	

				</th>
                <td>1000</td>
              </tr>
			  <tr>
                <th>Skin Type	

				</th>
                <td>1000</td>
              </tr>
            </table>
          </div>
          <p style= " font-weight: 500; font-size: 1rem; margin-top: 1rem;">
            <b>Description: </b> Arjuna (Terminalia Arjuna) is a tree bark that is used in Ayurveda since thousands of
            years for the purposes of cardiovascular health. It Helps to maintain normal blood pressure & strengthens
            heart muscles.
          </p>
        </div>


	</div>
	</div>



	<!--==================================================-->
	<!-- Start Sidebar Area -->
	<!--==================================================-->
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

	<script>
    function clickimg(smallimage) {
      var fullimg = document.getElementById("imagebox");

      fullimg.src = smallimage.src;
    }
  </script>

</body>

</html>