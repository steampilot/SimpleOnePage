<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
	<link href="css/landingpage.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
	$pictures = array('b17-1.jpg', 'b17-2.jpg','b17-3.jpg','b17-4.jpg','b17-5.jpg',);
	$i = rand(0, count($pictures)-1);
	$picture_url = 'img/'.$pictures[$i];
	?>
	<style type="text/css">
		.random {
			display: table;
			position: relative;
			width: 100%;
			height: 100%;
			background: url(<?php echo $picture_url; ?>) no-repeat center center scroll;;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
			-o-background-size: cover;
		}
	</style>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper" class="blackgradient">
        <ul class="sidebar-nav text-uppercase">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Steampilot</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#demos">Demo</a>
            </li>
            <li>
                <a href="#portfolio">Portfolio</a>
            </li>
	        <li>
		        <a href="#affiliates">Affiliates</a>
	        </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header random">
	    <div class="text-vertical-center">
		    <div id="title" class=" blackgradient col-lg-4 col-lg-offset-4">
		    <h1>Steampilot</h1>
			    <h3>Tutorials and Prototypes for Web Developer</h3>
			    <br>
			    <a target="_blank" href="#demos" class="btn btn-dark btn-lg">Find Out More</a>
		    </div>
	    </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Presenting cool and innovative little projects as part of the <br><strong>Web Developer Course at GIBM</strong></h2>
                    <p class="lead">Started in 2012, the software developer apprenticeship got me involved in many
	                    interesting little projects.</p>
	                    <p>Please visit the <a target="_blank" href="http://www.gibm.ch">schools official website</a></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="demos" class="services bluegradient bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
	                <h2><strong class="inverted">S</strong>team<strong class="inverted">p</strong>ilot <span class="inverted">Demos</span></h2>
	                <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
	                            <a target="_top" href="spwr/" >
                                <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                                    </span>
		                            <h4>
			                            <strong>SPWR - Weather Report</strong>
		                            </h4>
		                            <p>Creating Weather Maps with the use of GD Library</p>
	                            </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">

	                            <a target="_top" href="spsm/" >
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-gamepad fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>SPSM - Slot Machine</strong>
                                </h4>
                                <p>A tiny tutorial on how to create a slot machine game with javascript</p>
		                    </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
	                            <a target="_top" href="spgb/" >
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-book fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>SPGB - Guest Book</strong>
                                </h4>
                                <p>Open up awesome new possibilities with database objects and web forms</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
	                            <a target="_top" href="spcb/" >
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-chess fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>SPCB Chess Board</strong>
                                </h4>
                                <p>Just a silly little project, developing a chess game in html</p>
                                </a>
                            </div>
                        </div>
	                </div>
	                <div class="col-md-3 col-sm-6">
					    <div class="service-item">
						    <a target="_top" href="spss/" >

                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-graduation-cap fa-stack-1x text-primary"></i>
                        </span>
						    <h4>
							    <strong>SP School Schedule</strong>
						    </h4>
						    <p>Ever wantet to know when your school starts? Wonder no more! Here comes the School Schedule.</p>
							    </a>
						    </div>
					    </div>
	                <div class="col-md-3 col-sm-6">
					    <div class="service-item">
						    <a target="_top" href="spgs/" >

                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-barcode fa-stack-1x text-primary"></i>
                        </span>
						    <h4>
							    <strong>SP GISPO SCAN</strong>
						    </h4>
						    <p>Helping the school host their sport event by speeding up the
							    contestant registration process with a Bar Code Scanner</p>
							    </a>
						    </div>
					    </div>
				    </div>
				    <!-- /.row (nested) -->
			    </div>
			    <!-- /.col-lg-10 -->
		    </div>
		    <!-- /.row -->
	    </div>
	    <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
	    <div class="text-vertical-center">
		    <h1>Having Fun while Coding</h1>
	    </div>
    </aside>
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Impressions</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a target="_blank" href="http://www.steampilot.ch" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside id="affiliates" class="call-to-action bluegradient bg-primary">
	    <div class="container">
		    <div class="row text-center">
			    <div class="col-lg-10 col-lg-offset-1">
				    <h2>Affiliates and Partners</h2>
				    <hr class="small">
				    <div class="row">
					    <div class="col-md-3 col-sm-6 col-lg-offset-3">
						    <div class="service-item">
							    <a target="_top" href="http://www.orca.ch" >
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-joomla fa-stack-1x text-primary"></i>
                            </span>
							    <h4>
								    <strong>ORCA Services AG</strong>
							    </h4>
							    <p>The cool company i work for. Getting bombarded with crazy new concepts every day.</p>
								    </a>
						    </div>
					    </div>
					    <div class="col-md-3 col-sm-6">
						    <div class="service-item">
							    <a target="_top" href="http://www.github.com/steampilot" >
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-github-square fa-stack-1x text-primary"></i>
                            </span>
							    <h4>
								    <strong>GitHub</strong>
							    </h4>
							    <p>Amazing revisioning system, social platform for developers, save haven for all your code.</p>
								    </a>
						    </div>
					    </div>
				    </div>
				    <!-- /.row (nested) -->
			    </div>
			    <!-- /.col-lg-10 -->
		    </div>
		    <!-- /.row -->
	    </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
	    <iframe style="pointer-events:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2693.1226219940054!2d7.620022901049795!3d47.54594213489076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791b82bdf7262c9%3A0x2c728458f4f5cc0b!2sLehenmattstrasse+308%2C+4052+Basel!5e0!3m2!1sde!2sch!4v1410209365102" width="100%" height="100%" frameborder="0" style="border:0"></iframe><br />
        <small>
            <a href="https://www.google.ch/maps/place/Lehenmattstrasse+308,+4052+Basel/@47.5453555,7.6200832,17z/data=!4m2!3m1!1s0x4791b82bdf7262c9:0x2c728458f4f5cc0b"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Steampilot</strong>
                    </h4>
                    <p>Lehenmattstrasse 308<br>4052 Basel</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="info@steampilot.ch">info@steampilot.ch</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/jerome.roeth"><i class="fa fa-facebook-square fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/u/0/+J%C3%A9r%C3%B4meR%C3%B6thlisberger/posts"><i class="fa fa-google-plus-square fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; steampilot.ch 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
