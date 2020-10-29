<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<form action="PHP/profile.php" method="post">
	<input type="text" name="search" placeholder="Enter name">
	<br><br>
	<input type="submit" value="Search by Name Or Nick name" >
</form>
<br>
	<form action="PHP/profile.php" method="post">
	
	<input type="submit" value="show your profile info" name="show">
	
	</form>
	<br>
	<form action="PHP/profile.php" method="post">
	
	<input type="submit" value="friends" name="friends">
	
	</form>
	<br>
	<form action="PHP/profile.php" method="post">
	
	<input type="submit" value="friends Requests" name="requests">
	
	</form>
	

</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
	<title>Professional profile</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/profile.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="profile-main">
		<div class="profile-header">
			<div class="user-detail">
				<div class="user-image">
					<img src="img/f64439f9-9049-4d91-895a-94cfb950d7fa.jpeg">
				</div>
				<div class="user-data">
					<h2><?php
						session_start();
						

						echo ' <h1>'.$_SESSION['firstname'].
						$_SESSION['lastname'].'</h1>'?>
						</h2>
					<span class="post-label">Admin</span>
					<span class="post-label">Speaker</span>
					<span class="post-label">AMA</span>
					<p>Software Engineering <strong></strong><br>
					<i class="fa fa-map-marker" aria-hidden="true"></i>  Alexandria,Egypt
					</p>
				</div>
				<div class="social-icons">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-google"></i>
					<i class="fa fa-instagram"></i>
					<a href="#" type="button" class="msg-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send Message</a>
				</div>
			</div>
			<div class="tab-panel-main">
				<ul class="tabs">
					<li class="tab-link current" data-tab="Basic-detail">Basic Detail</li>
					<li class="tab-link" data-tab="Edu-detail">Educational Detail</li>
					<li class="tab-link" data-tab="Portfolio">Portfolio</li>
				</ul>
				<div  id="Basic-detail" class="tab-content current">
					<div class="skill-box">
					  <ul>
						<li><strong>Search</strong></li>
						<form action="PHP/profilelogic.php" method="post">
	                   <input type="text" name="search" placeholder="Enter name">
	                   
	                   <input type="submit" value="Search" >
                       </form>
					  </ul>		
					</div>
					<div class="bio-box">
						<div class="heading" ">
							<h3>About Me
							<label>Intro</label></h3>
						</div>
						<div class="desc">
						<?php
						
						

						echo ' <p>'.$_SESSION['aboutme'].
						$_SESSION['lastname'].'</p>'?>
						</div>
					</div>
					<div class="detail-box" style= "max-width: 150px;">
						<p>Detail</p>
						
						<ul class="ul-first">
						<?php
						
						

						echo ' <li>'.$_SESSION['firstname'].'</li>'.
						'<li>'.$_SESSION['lastname'].'</li>'.
						'<li>'.$_SESSION['email'].'</li>'.
						'<li>'.$_SESSION['gender'].'</li>'.
						'<li>'.$_SESSION['aboutme'].'</li>'.
						
						'<li>'.$_SESSION['phone'].'</li>'.
						'<li>'.$_SESSION['bday'].'</li>'.
						'<li>'.$_SESSION['firstname'].'</li>';

						?>
						</ul>
					</div>
				</div>
				<div id="Edu-detail" class="tab-content">
					<div class="Edu-box-main">
						 <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</h2>
						 <div class="Edu-box">
						 	<h5><span>Graphic designer</span> <br>
						 		2005 - 2007 | Infoway Corporation</h5>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						 </div>
						 <div class="Edu-box">
						 	<h5><span>Web designer</span> <br>
						 		2007 - 2009 | Light Corporation</h5>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						 </div>
					</div>
				</div>
				<div id="Portfolio" class="tab-content">
					<div class="portfolio-box">
						<div class="portfolio-img-box">
							<h3>Web Design</h3>
							<img src="http://nicesnippets.com/demo/up-web-design.jpg">
						</div>
						<div class="portfolio-img-box">
							<h3>Web development</h3>
							<img src="http://nicesnippets.com/demo/up-web-development.png">
						</div>
						<div class="portfolio-img-box">
							<h3>SEO</h3>
							<img src="http://nicesnippets.com/demo/up-seo.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="footer">
			<p><strong></strong></p><br>
			<div class="footer-box"><i class="fa fa-facebook"></i></div>
			<div class="footer-box"><i class="fa fa-twitter"></i></div>
			<div class="footer-box"><i class="fa fa-linkedin"></i></div>
			<div class="footer-box"><i class="fa fa-google"></i></div>
			<div class="footer-box"><i class="fa fa-instagram"></i></div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		});
	});
</script>
</body>
</html>