<?php
	require('../includes/connection.php');
	require('session.php');
	require('../includes/global_members.php');
	
	confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- Favicons -->
    <link href="../assets/img/favo_icon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <!-- ======= Logo ====== -->
            <div class="logo me-auto">
                <!--<h1><a href="index.html">Lumia</a></h1>-->
                <a href="../index.html"><img src="../assets/img/Impress_logo.png" alt="" class="img-fluid"></a>
            </div>
            <!-- ======= End of Logo ====== -->
            <!-- ======= Menu Bar ====== -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="product.php">Products</a></li>
                    <li><a class="nav-link scrollto " href="#clients">Clients</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
                    <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle"></i>
					<?php echo $_SESSION['MEMBER_FNAME']; ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                                    data-target="#ProfileForm">Profile</a></li>
                            <li>
                                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                                    data-target="#SettingsForm">
                                    Settings</a></li>
                            <li>
                                <a href="../login/logout.php" class="btn btn-default btn-rounded mb-4">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- End of Menu (.navbar) -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

        </div>
    </header>
    <section id="products" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Products</h2>
                <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
            </div>

            <div class="row">
<?php
			$sql = "SELECt * FROM tbl_cust_product WHERE user_id = ".$_SESSION['MEMBER_ID'];
			$result = mysqli_query($db,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$sql1 = "SELECt * FROM tbl_product_mst WHERE product_id = ".$row["product_id"];
					$rslt = mysqli_query($db,$sql1);
					if(mysqli_num_rows($rslt)>0)
					{
						while($prows = mysqli_fetch_assoc($rslt))
						{
?>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
<?php
						switch($prows["product_type"])
						{
							case "CLOUD":
								echo "<i class='bi bi-cloud'></i>";
								break;
							case "ERP":
								echo "<i class='bi bi-calendar'></i>";
								break;
							case "NETWORK":
								echo "<i class='bi bi-chart'></i>";
								break;
							case "CS":
								echo "<i class='bi bi-briefcase'></i>";
								break;
							default:
                        		echo "<i class='bi bi-briefcase'></i>";
								break;
						}
?>						
                        <h4><a href="<?php echo $prows["product_link"]; ?>" target="_blank"><?php echo $prows["product_name"]; ?></a></h4>
                        <p><?php echo $prows["product_desc"]; ?></p>
                    </div>
                </div>
<?php
					}
				}
			}
		}

?>
                <!--<div class="col-md-6 mt-4 ">
                    <div class="icon-box">
                        <i class="bi bi-cloud"></i>
                        <h4><a href="#">Product 2</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#">Product 3</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                        <h4><a href="#">Product 4</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-brightness-high"></i>
                        <h4><a href="#">Product 5</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-calendar4-week"></i>
                        <h4><a href="#">Product 6</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis neque incidunt eum, earum perspiciatis voluptate facere fugit quos soluta ullam consequuntur ea nobis maxime recusandae in voluptatibus animi, pariatur ipsam.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                        <h4><a href="#">Product 7</a></h4>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                            nobis est eligendi</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-cloud"></i>
                        <h4><a href="#">Product 8</a></h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus hic debitis totam?</p>
                    </div>
                </div>-->
            </div>

        </div>
    </section>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <strong>
                            <p>CHRIST (Deemed to be Univesity)</p>
                        </strong>
                        <p>
                            Kengeri <br>
                            Bangalore<br>
                            Karnataka <br><br>
                            <strong>Phone:</strong> <br>
                            <strong>Email:</strong> <br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Christ Team</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                    Designed by Christ Team
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>