<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Grante Online</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
     <style>
		tr{
            cursor: pointer;
        }
	</style>
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/blue-scheme.css">
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-png"/>
<?php 
// Start session
session_start(); 

// Username and password


    if ($_POST["ID"] === "admin" && $_POST["pass"] ==="admin") { 
    
    $_SESSION['user'] = $user_id;

    header("Location: index1.html"); 
    exit; 
    } 
        // Wrong login - message
        else { $_SESSION['user'] = 123;} 

?> 
</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index1.html">Home</a></li>
            <li><a href="#">Portfolio</a>
            	<ul>
            		<li><a href="portfolio.html">Portfolio Grid</a></li>
            		<li><a href="project-image.html">Project Image</a></li>
            		<li><a href="project-slideshow.html">Project Slideshow</a></li>
            	</ul>
            </li>
            <li><a href="#">Blog</a>
				<ul>
					<li><a href="blog.html">Blog Standard</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="#">visit templatemo</a></li>
				</ul>
            </li>
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-10">

					<div class="pull-left logo" style="width:100%; height:50px">
						
						<a href="index.html">
							<img style="width:70px;" src="images/logo1.png" alt="Medigo by templatemo"><h3 style="padding-left:10px;" class="archive-title">Komuna e Prizrenit</h3>
						</a>
					</div>	<!-- /.logo -->

					<div style="top:-30px;" class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="index1.html">Ballina</a></li>
					            <li><a href="legjislacioni.html">Legjislacioni</a>
								</li>
					            <li><a href="arkiva.html">Arkiva</a>
					            </li>
					            <li><a href="#">Shqip</a>
									<ul>
										<li><a href="blog.html"></a>Serbisht</li>
									</ul>
					            </li>
                                <li>
                                   <a href="login.html">Login</a>
                                </li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4 col-lg-offset-5 col-lg-2">
                <form action="" method="post" style="background-color:white; border-radius:0.5em; box-shadow:1px 1px 8px lightgray; padding: 15px;">
                    <h3 style="text-align:center;">Login</h3>
  <div class="form-group">
    <input type="text" class="form-control" id="email" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="pass"  placeholder="Password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" style="width:100%;" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
	<footer class="site-footer" style="margin-top: 30px;">
		<div class="fliud-container">
			<div class="row">
			
				<div class="col-md-10">
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-10">
					<p class="copyright-text">Copyright &copy; 2017</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	
    <!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/min/plugins.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
    <script src="js/script.js"></script>
    </body>
    </html>