<?php include ('session.php');

error_reporting(E_ERROR | E_PARSE);
$id=$_SESSION['id'];

 include ('admin/connect.php');
            $query = mysql_query("select * from student where id='$id'") or die(mysql_error());
			$row = mysql_fetch_array($query);
		  $branch=$row['branch'];
			$course=$row['course'];
			$name=$row['name'];
			
			  $query_re = mysql_query("select * from  result where stu_id='$id'") or die(mysql_error());
			   $query_a = mysql_query("select * from  subject where branch='$branch' AND course='$course'") or die(mysql_error());
			
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>BIT College</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SoftNick India"> </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />

<link rel="stylesheet" href="css/lightbox.css">
<!-- carousel slider -->  
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
<!-- //carousel slider -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
	<!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            <div class="wthree_agile_login">
						     <ul>
								<li><i class="fa fa-phone" aria-hidden="true"></i> +91-095545 59900</li>
								<li><i class="fa fa-envelope-o list-icon" aria-hidden="true"></i><a href="mailto:http://www.bit.gkp@gmail.com">bit.gkp@gmail.com</a></li>
								<li><i class="fa fa-lock" aria-hidden="true"></i><a href="./student"><?php echo $name;?></a></li>
								<li><i class="fa fa-lock" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
							</ul>
						</div>
						 
				</div>
			</div>
			<!--//banner-bottom-->
  <!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/b1.jpg","images/6.jpg","images/b2.jpg","images/b3.jpg","images/b4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span class="letter">BIT</span>College</span></a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="#about" class="scroll">About</a></li>
								<li><a href="#agileits-services" class="scroll">Services</a></li>
							
								<li><a href="#testimonials" class="scroll" >Testimonials</a></li>
								<li><a href="#contact" class="scroll">contact</a></li>
							</ul>
						</div>
					<div class="clearfix"> </div>	
				</nav>
			</div> 

			   </div>
		<!--//header-w3l-->
			<!--/banner-info-->
			   <div class="baner-info">
			       <h4>The best learning institution</h4>
				   <h3><span>w</span>elcome to our <span>u</span>niversity</h3>
			
				  <a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> read more</a>
			   </div>
			<!--/banner-ingo-->		
		</div> 
    </div>
  <!--/banner-section-->
  
 
	<!--//agileits-services-->
<!--portfolio-->
			
	<!--//portfolio-->
  <!--//main-header-->
	<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
	<!-- testimonial -->
	
	</div>
<!-- //testimonial --> 
<!-- team -->
	
	<!-- contact -->
	<div class="contact-bottom w3ls-section" id="contact">
		<div class="container">

<h1>Welcome, <?php echo $row['name'];?></h1>
		<div class="container">
			<h3 class="inner-tittle two">Check Results </h3>
														  <div class="graph">
															<div class="tables">
														
																<table class="table table-bordered"> <thead> <tr> <th>Sessional</th> <th>Subject</th> <th>Action</th></tr> </thead> <tbody> 						<form action="" method="post">
                                                                <tr><td> <select name="sessional" id="selector1" class="form-control1">
																<option>Sessional 1</option>
																<option>Sessional 2</option>
                                                                <option>Sessional 3</option>
                                                        
													</select></td> <td> <select name="sub" id="selector1" class="form-control1">
														<?php while ($row_re = mysql_fetch_array($query_re)) { ?>  
                                                        		<option><?php echo $row_re['sub'];?></option>
															<?php }?>
                                                         
													</select></td> <td><button type="submit" class="btn btn-default" name="go_result">Check</button></td>  </tr> </form>
                                                                 </tbody> </table> 
															</div>
													</div>
            
             <?php 
include ('admin/connect.php');
    if (isset($_POST['go_result'])) {

$sessional = $_POST['sessional'];					
$sub = $_POST['sub'];		
            
			 $query_r = mysql_query("select * from result where stu_id='$id' AND sessional='$sessional' AND sub='$sub'") or die(mysql_error());
			 ?>
			 
																<table class="table table-bordered"> <thead> <tr>  <th>Sessional</th> <th>Subject</th> <th>Maximum Marks</th> <th>Obtain Marks</th> <th>Percentage of Marks</th> </tr> </thead> <tbody>
			 <?php
             while ($row_r = mysql_fetch_array($query_r)) {
		  
	                          ?>
                                                                 <tr> 
                                                                 <th scope="row"><?php echo $row_r['sessional']; $_SESSION['sessional'] = $sessional;?></th>
                                                                    <td><?php echo $row_r['sub']; $_SESSION['sub'] = $sub;?> </td> 
                                                                 <td><?php echo $row_r['mm'];?> Marks</td>
                                                                  <td><?php echo $row_r['om'];?> Marks</td>
                                                                   <td><?php echo $row_r['per']; $_SESSION['per'] = $per;?>%</td>
                                                                  
                                                                    
                                                                    
                                                                  
                                                                     </tr> 
                                   <?php }}?>                                
                                                                     </tbody> </table> 
            <h3 class="inner-tittle two">Check Attendance </h3>
														  <div class="graph">
															<div class="tables">
														
																<table class="table table-bordered"> <thead> <tr> <th>From Date</th> <th>To Date</th><th>Subject</th> <th>Action</th></tr> </thead> <tbody> 						<form action="" method="post">
                                                                <tr><td> 
                                                                
                                                                <input type="datepicker" class="form-control" id="datepicker" placeholder="DD/MM/YYYY" name="fdate">
                                                                </td> <td> 
                                                                <input type="datepicker" class="form-control" id="datepicker" placeholder="DD/MM/YYYY" name="tdate">
                                                                </td>
                                                                
                                                                <td> <select name="sub2" id="selector1" class="form-control1">
														<?php while ($row_a = mysql_fetch_array($query_a)) { ?>  
                                                        		<option><?php echo $row_a['sub'];?></option>
															<?php }?>
                                                         
													</select></td>                                                                
                                                                 <td><button type="submit" class="btn btn-default" name="go_att">Check</button></td>  </tr> </form>
                                                                 </tbody> </table> 
															</div>
													</div>
            
            
              
             <?php 
include ('admin/connect.php');
    if (isset($_POST['go_att'])) {
	$fdate = $_POST['fdate'];
	$tdate = $_POST['tdate'];
	$sub2 = $_POST['sub2'];
	
		?>
		<table class="table table-bordered"> <thead> <tr>  <th>Present in Class</th> <th>Absent in Class</th> <th>Holidays</th> <th>Percentage of Class</th></tr> </thead> <tbody>
          <?php
	        include ('connect.php');
            $query = mysql_query("select * from  attendance where stu_id='$id' AND (ddate BETWEEN '$fdate' AND '$tdate') AND sub='$sub2'") or die(mysql_error());				$c=0;
							$ap=0;
							$aa=0;
							$ah=0;
                          	while ($row = mysql_fetch_array($query)) {
							$at=$row['att'];
							if($at=='P')
							$ap=$ap+1;
							if($at=='A')
							$aa=$aa+1;
							if($at=='H')
							$ah=$ah+1;
							$c=$c+1;
							}
                                      
									$ta=$c-$ah;
									$final=$ap*100/$ta;
									
	                           ?>
                                                                 <tr> 
                                                                 <th scope="row"><?php echo $ap;?> Days</th> 
                                                                 <td><?php echo $aa;?> Days</td>
                                                                  <td><?php echo $ah;?> Days</td>
                                                                   <td><?php echo $final;?>%</td>
                                                                  
                                                                    
                                                                    
                                                                   
                                                                     </tr> 
                                                                   
                                                                     </tbody> </table> 
		
						<?php } ?>
            
				<div class="clearfix"> </div>
			</div>
	
			<h3 class="w3ls-title">Enquiry</h3>
			<p>Vist Here ....Get Here</p>
			<div class="w3layouts-list">
					<div class="col-md-4 li"><span class="fa fa-map-marker" aria-hidden="true"></span><h6> CL-1, Sector 7, GIDA, Gorakhpur, Uttar Pradesh 273209.</h6></div>
					<div class="col-md-4 li"><span class="fa fa-phone" aria-hidden="true"></span><h6>095545 59900</h6></div>
					<div class="col-md-4 li"><span class="fa fa-location-arrow" aria-hidden="true"></span><a href="mailto:http://bit.gkp@gmail.com">bit.gkp@gmail.com</a></div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6  col-xs-6 agileits_w3layouts-map">
				<div class="mapouter"><div class="gmap_canvas"><iframe width="550" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q= Sector 7, GIDA, Gorakhpur, Uttar Pradesh 273209.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.crocothemes.net"></a><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:400px;width:550px;}</style></div>
			</div>	
			<div class="col-md-6 col-sm-6 col-xs-6 contact-right-w3l">
				<form action="#" method="post">
					<input type="text" class="name" name="fname" placeholder="First Name" required="">
					<input type="text" class="name" name="lname" placeholder="Last Name" required="">
					<input type="email" class="name" name="email" placeholder="Email" required="">
					<input type="text" class="name" name="sub" placeholder="Subject" required="">
					<textarea placeholder="Your Message" name="msg" required=""></textarea>
					<input type="submit" name="go" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //contact -->
<!-- subscribe -->
	<div class="w3ls-section subscribe text-center">
		<div class="container">
			<h3 class="w3ls-title">subscribe now!</h3>
			<p>Enter your email address to get the latest news, special events and student activities delivered right to your inbox.</p>
				<div class="subscribe-grid">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email.." name="Subscribe" required="">
					<button class="btn1">subscribe</button>
				</form>
			</div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div class="agileits_w3layouts-footer">
		<div class="col-md-6 col-sm-8 agileinfo-copyright">
			<p>© 2018 BIT College. All rights reserved | Design by <a href="//www.bit.ac.in/">BIT College</a></p>
		</div>
		<div class="col-md-6 col-sm-4 agileinfo-icons">
			<ul>
				<li><a class="icon fb" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
				<li><a class="icon tw" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
			
				<li><a class="icon gp" href="https://www.gmail.com"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
    <!-- footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
			BIT College
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<!--script for portfolio-->
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
	<!--//script for portfolio-->


<script src="js/owl.carousel.js"></script>  
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
			  autoPlay: true, //Set AutoPlay to 3 seconds
			  items :3,
			  itemsDesktop :[640,2],
			  itemsDesktopSmall : [414,1],
			  navigation : true,
			  // THIS IS THE NEW PART
				afterAction: function(el){
					//remove class active
					this
					.$owlItems
					.removeClass('active')
					//add class active
					this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem + 1)
					.addClass('active')
					}
			// END NEW PART
		 
			});
			
		}); 
	</script>
	
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		<!-- flexSlider -->
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- //flexSlider -->

		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	
<script src="js/SmoothScroll.min.js"></script>
  </body>
 </html> 

<?php 
include ('connect.php');
    if (isset($_POST['go'])) {


$fname= $_POST['fname'];
$lname= $_POST['lname'];	
$email=$_POST['email'];
$sub=$_POST['sub'];				

$msg=$_POST['msg'];



								
				

   mysql_query("insert into contact (fname,lname,email,sub,msg)
                            	values ('$fname','$lname','$email','$sub','$msg')
								
                                ") or die(mysql_error());
								?>
                                <script>
								
								alert("Thanks for Contact with us.");
								</script>
                                <?php
}
?>