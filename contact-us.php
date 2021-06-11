<?php
ob_start();
session_start();
require "connection.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['message'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['message'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$message= $_POST['message'];


		if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
			$sess=$_SESSION['sess_user_id'];
			$SQL="UPDATE contactus SET name='".$name."',email='".$email."',number='".$number."',message='".$message."' WHERE id='".$sess."'";
		}else{
			$SQL = "INSERT INTO contactus (name,email,number,message ) VALUES ('".$name."', '".$email."', '".$number."', '".$message."')";
		}

		$query_run = mysqli_query($con,$SQL);

		if($query_run){
			echo '<script language="javascript">';
			echo 'alert("message successfully sent")';
			echo '</script>';
			if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				header("Location: logout.php");
			}
		}
		else{

			echo '<script language="javascript">';
                echo 'alert("REGISTRATION FAILED")';
                echo '</script>';
		}
	}else{
		echo '<script language="javascript">';
            echo 'alert("PLEASE FILL AND SELECT ALL REQUIRED FIELDS")';
            echo '</script>';
	}
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dream Traveller</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>
      
 <!-- ################# Header Starts Here #######################--->       
      
       <header class="conainer-fluid">
           <div class="header-top">
               <div class="container">
                   <div class="row">
                       <div class="col-md-4 logo">
                           <img src="assets/images/logo.png" alt="">
                           <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                       </div>
                       <div class="col-md-8 d-none d-md-block clldetal">
                           <ul>
                               <li class="bgb"><i class="far fa-clock"></i> 09:00AM — 05:00PM</li>
                               <li class="bgb"><i class="fas fa-phone-alt"></i> +91 1234567890</li>                          </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="header-bottom">
               <div class="container">
                   <div class="row">
                       <div id="menu" class="col-lg-8 col-md-12 d-none d-md-block navs">
                           <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about_us.html">About US</a></li>
                                <li><a href="packages.html">Our Packages</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                           </ul>
                       </div>
                       <div class="col-md-4 d-none d-lg-block socials">
                            <ul>
                                <li>
                                    <i class="fab fa-facebook-square"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter-square"></i>
                                </li>
                                <li>
                                    <i class="fab fa-instagram"></i>
                                </li>
                                <li>
                                    <i class="fab fa-linkedin"></i>
                                </li>
                            </ul>
                       </div>
                   </div>
               </div>
           </div>
       </header>
 

    <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
       
     
      
      <!--  ************************* Contact Us Starts Here ************************** -->

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">

                <div style="padding:20px" class="col-sm-7">
                    <h2 >Contact Form</h2> <br>
                    <form action="contact-us.php" method="post"> 
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="number" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class=" btn-primary btn-sm" type="submit">Send Message</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">
                        <h2 style="margin-top:10px;">Address</h2>

                    add address<br>
                    add address <br>
                    add address <br>
                    add no <br>
                    add email<br>
                    </div>
                </div>

            </div>
        </div>

    </div>
       
        
   <!--################### Footer Starts Here #######################--->        
        
        <footer class="container-fluid footer">
            <div class="container">
                <div class="foot-row row">
                    <div class="col-md-4 address">
                        <h4>Contact Us</h4>
        
                        <p> add address<br>
                            add address <br>
                            add no <br>
                            add email</p>
                        </div>
                        <div class="col-md-3 qlink">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about_us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="packages.html">Packages</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 destinations">
                            <h4>Popular Destinations</h4>
                            <ul>
                                <li><a href="">Indonesia</a></li>
                                <li><a href="">India</a></li>
                                <li><a href="">Italy</a></li>
                                <li><a href="">France</a></li>
                                <li><a href="">Switzerland</a></li>
                                <li><a href="">America</a></li>
                                <li><a href="">Australia</a></li>
                                <li><a href="">Canada</a></li>
                                <li><a href="">England</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
