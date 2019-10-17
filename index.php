<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
   <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
       <div class="logo"><a href="http://nic.lk/"><span>Domain </span>Search</a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
         <li class="active"><a href="index.php">Home</a></li>
         <li><a href="team.php">Our Team</a></li>
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	
	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="log_reg">
			<div class="log_reg_content d-flex flex-row align-items-center justify-content-end">
			
			</div>
		</div>
		<nav class="menu_nav">
			<ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="team.php">Our Team</a></li>
		
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(images/city.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
        <div class="home_title"><small>SEARCH YOUR DREAM</small> <br/>DOMAIN</div>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 ">
						<div class="domain_search_form_container">
        <center>	<form action="" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start" method="GET">
								<div class="d-flex flex-row align-items-center justify-content-start">
          <input type="text" class="domain_search_input" placeholder="your domain" required="required" name="search" 
           >
							<button class="domain_search_button d-flex flex-row align-items-center justify-content-center" name="submit"><img src="images/search.png" alt="">Search</button>
								</div>
							
          </form>
  <div class="result span-rs">        
           <?php
 
      if(isset($_GET['submit'])){
          $print=$_GET['search'];
          $ul='https://www.domains.lk/domainsearch/doDomainSearch?domainname=';
          
      

   
 
     $url=$ul.$print;
      
      $ch = curl_init($url);


$jsonData = array("Message" => "");


$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);


curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$values = json_decode($result, true);

echo "<h2>" .$print.".lk  "."</h2>".$values["Message"];

  } 
    ?>
  </div>
        </center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 
 

 
 <!-- FOOTER ---------------------------------------- -->

 
  <footer class="footer">
        <div class="footer_content">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="footer_logo text-center"><a href="#"><img src="images/ASD 2k19.png" width="150" height="150"/></a></div>
                
              </div>
              
            </div>
            <div class="row footer_row">
              <div class="col-lg-4 footer_col">
                <div class="footer_item text-center">
                  <div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
          <div><img src="images/batch.png" width="80" height="80"></div>
                  </div>
                  <div class="footer_title">Batch</div>
                  <div class="footer_list">
                    <ul>

                      <li>2019 1st</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_item text-center">
                  <div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                    <div><img src="images/mail.png" width="50" height="50"></div>
                  </div>
                  <div class="footer_title">E-mail</div>
                  <div class="footer_list">
                    <ul>
                      <li>Contact@ASD.com</li>
                      <li>office@ASD.com</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_item text-center">
                  <div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                    <div><img src="images/fb.png" width="60" height="60"></div>
                  </div>
                  <div class="footer_title">Facebook</div>
                  <div class="footer_list">
                    <ul>
                      <li>ASD2K19 Kalutara</li>
                   
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </footer>
 
 <!-- FOOTER ---------------------------------------- -->





 
</div> 
 
 
 
 
 
 
 
 
 
 <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
  </body>
</html>
