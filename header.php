<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Digital @ your Service</title>
		<title>Are you selling your car, tractor etc whatsapp us a pic, location & price</title>
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"/>

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		
		
         
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
        #navigation {
          background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +254-724052417</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> sales@kenstate.co.ke</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Westlands Nairobi, Eldoret Kenya</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-inr"></i> Kenstate Allied</a></li>
						<li><?php
						
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
								  <div class="dropdownn-content">
								  	<a href="myorders.php"  ><i class="fa fa-shopping-basket" aria-hidden="true"></i>My Order</a>
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
								  <div class="dropdownn-content">
								  	<a href="admin/login.php" ><i class="fa fa-user" aria-hidden="true" ></i>Admin</a>
                                    <a href="signin_form.php"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="signup_form.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
                                </li>				
					</ul>
					
				</div>
			</div>
			<!-- /TOP HEADER -->
			
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo"><ul>
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                        Digital Marketplace
                                    </font>
									<font style="font-style:normal; font-size: 15px;color: aliceblue;font-family: serif">
                                        Selling or Shopping for auto, tractor, implements, spares etc Whatsapp/ Call us
                                    </font>
						</ul>
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form onsubmit="return false">
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Saloon Cars</option>
										<option value="1">Pickups & Trucks </option>
										<option value="1">Tractors</option>
										<option value="1">Implements </option>
										<option value="1">Tractor Spares</option>
										<option value="1">Auto Spares </option>
										<option value="1">Motor Bikes</option>
																			</select>
									<input class="input" id="search" type="text" placeholder="Search here">
									<button id="search_btn"   class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								
								<!-- /Wishlist -->
								
								<!-- Cart -->
								
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation'>
			<!-- container -->
			<div class="container" id="get_category_home">
				
						
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li class="category" cid="1"><a href="store.php">Saloon Cars</a></li>
						<li class="category" cid="2"><a href="store.php">Pickups & Trucks</a></li>
						<li class="category" cid="3"><a href="store.php">Tractors</a></li>
						<li class="category" cid="4"><a href="store.php">Implements</a></li>
						<li class="category" cid="5"><a href="store.php">Tractor Spares</a></li>
						<li class="category" cid="6"><a href="store.php">Auto Spares</a></li>
						<li class="category" cid="7"><a href="store.php">Motor Bikes</a></li>
					
					</ul>
						
				</div> 
			</div>
			
		</nav>
            

		<!-- NAVIGATION -->
		
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";   
								?>       
                            </div>
                                                      </div>
													</div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div>
		