<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
        </li>
        <li>
            <a href="#top" onclick = $("#menu-close").click(); >Home</a>
        </li>
        <li>
            <a href="#about" onclick = $("#menu-close").click(); >About</a>
        </li>
        <li>
            <a href="#partner" onclick = $("#menu-close").click(); >Partner</a>
        </li>
        <li>
            <a href="#impressions" onclick = $("#menu-close").click(); >Impressions</a>
        </li>
        <li>
            <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<div class="container">
<div class="row">
    <header id="top" class="header parallax-container"
            data-parallax="scroll"
            data-image-src="<?= getRandomBanner(); ?>">

        <div id="start" class=" col-lg-4 col-md-4 pull-right  text-vertical-center">
            <object width="100%" type="image/svg+xml"
                    data="assets/img/orca-logo.svg">
                Your browser does not support SVG
            </object>


            <h3>The Web starts with us</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>
</div>


<!-- About -->
<section id="about" class="about">
        <div class="row parallax-container"
             data-parallax="scroll"
             data-image-src="<?= getRandomBanner(); ?>">
            <div id="business" class="col-lg-4 col-md-6 col-sm-10  col-xs-12 pull-left text-left">
                <article id="sketch">
                    <h2>
                        <span class="fa-stack fa-1x">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-shield fa-stack-1x text-primary"></i>
                        </span>
                        Drawing
                        <strong>
                            Sketch
                        </strong>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                </article>
                <article id="design">
                    <h2>
                        <span class="fa-stack fa-1x">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-paint-brush fa-stack-1x text-primary"></i>
                        </span>
                        Making
                        <strong>
                            Design
                        </strong>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                </article>
                <h2>
                        <span class="fa-stack fa-1x">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-file-code-o fa-stack-1x text-primary"></i>
                        </span>
                    Developing
                    <strong>
                        Product
                    </strong>
                </h2>

                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                </article>

            </div>
            <aside id="news" class="col-lg-6 col-md-6 col-sm-8 col-xs-12 pull-right text-left">
                <div id="best">
                    <h2>Best <strong>Services</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                        est Lorem ipsum dolor sit amet.
                    </p>
                    <a href="#" class="btn btn-dark">Learn More</a>

                </div>
                <div id="verified" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <h2>Verified <strong>Partner</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
                </div>
                <div id="regional" class="col-lg-3 col-md-6 col-sm-8 col-xs-12 pull-right">
                    <h2>Regional <strong>Aproach</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
                </div>
            </aside>
        </div>
        <!-- /.row -->

</section>
</div>
<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="partner" class="partner bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Our Partners and Clients</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-cloud  fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Partner Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square  fa-stack-2x"></i>
                                <i class="fa fa-compass fa-inverse fa-stack-1x primary"></i>
                            </span>
                            <h4>
                                <strong>Client Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square  fa-stack-2x"></i>
                                <i class="fa fa-flask  fa-inverse fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Client Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-shield fa-inverse fa-stack-1x text-primary"></i>
                                </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
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
    <div id="callout" class="text-vertical-center parallax-container"
         data-parallax="scroll"
         data-bleed="0" data-image-src="assets/img/impressions/coffee_drop.jpg"
         data-natural-width="650"
         data-natural-height="366">
        <h1>Come and get your coffee</h1>
    </div>
</aside>

<!-- Portfolio -->
<section id="impressions" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Our Work</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/blue_willy.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/blue_willy.jpg 1800w,
                                             assets/img/impressions/mid/blue_willy.jpg  800w,
                                             assets/img/impressions/min/blue_willy.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/blue_willy.jpg"
                                     alt="Blue Willy"/>
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/clothes_rack.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/clothes_rack.jpg 1800w,
                                             assets/img/impressions/mid/clothes_rack.jpg  800w,
                                             assets/img/impressions/min/clothes_rack.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/clothes_rack.jpg"
                                     alt="Clothes Rack"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/nian_cat.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/nian_cat.jpg 1800w,
                                             assets/img/impressions/mid/nian_cat.jpg  800w,
                                             assets/img/impressions/min/nian_cat.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/nian_cat.jpg"
                                     alt="Nian Cat" />
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/space_invader.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/space_invader.jpg 1800w,
                                             assets/img/impressions/mid/space_invader.jpg  800w,
                                             assets/img/impressions/min/space_invader.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/space_invader.jpg"
                                     alt="Space Invader" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/code_buddha.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     src="assets/img/impressions/code_buddha.jpg"
                                     alt="Bright Wall"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/bright_wall.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/bright_wall.jpg 1800w,
                                             assets/img/impressions/mid/bright_wall.jpg  800w,
                                             assets/img/impressions/min/bright_wall.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/bright_wall.jpg"
                                     alt="Bright Wall"
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/coffee_drop.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/coffee_drop.jpg 1800w,
                                             assets/img/impressions/mid/coffee_drop.jpg  800w,
                                             assets/img/impressions/min/coffee_drop.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/bright_wall.jpg"
                                     alt="Coffee Drop"
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/sound_beat.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/sound_beat.jpg 1800w,
                                             assets/img/impressions/mid/sound_beat.jpg  800w,
                                             assets/img/impressions/min/sound_beat.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/sound_beat.jpg"
                                     alt="Sound Beat"
                            </a>
                        </div>
                        <div class="portfolio-item">
                            <a href="assets/img/impressions/system_plant.jpg" target="_blank">
                                <img class="img-portfolio img-responsive"
                                     srcset="assets/img/impressions/max/system_plant.jpg 1800w,
                                             assets/img/impressions/mid/system_plant.jpg  800w,
                                             assets/img/impressions/min/system_plant.jpg  300w"
                                     sizes="1800w, 800w, 300w"
                                     src="assets/img/impressions/system_plant.jpg"
                                     alt="System Plant"
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
                </div>
                    <a href="#" class="btn btn-dark">View More Items</a>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Call to Action -->
<aside id="action" class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>The buttons below are impossible to resist.</h3>
                <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
            </div>
        </div>
    </div>
</aside>
<!-- Map -->
<section id="contact" class="container">
        <div class="row">
            <address id="address" class="col-lg-4 col-md-4 col-xs-8  text-center pull-right text-info">
                <div class="address">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                    <h4>
                        <strong>Contact</strong>
                    </h4>
                    <p><strong>Company Name</strong>
                    Streetname Nr#</br>
                        PO Boxnumber</br>
                        Cityname</br>
                        Countryname
                    </p>

                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </address>
            <div id="map" class="col-lg-8 col-md-8 col-xs-4 ">
                <div id="map_canvas" class="Flexible-container">
                </div>
                <div id="map_button"><a href="#gogogoogle" class="btn btn-dark btn-lg">Open Map</a></div>
            </div>
        </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                <h4><strong>Orca Services AG</strong>
                </h4>
                <p>Bahnhofstrasse 11<br>4133 Pratteln</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i>+41 60 205 80 80</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:info@orca.ch">info@orca.ch</a>
                    </li>
                </ul>
                <br>
                <!--
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                -->
            </div>
        </div>
    </div>
</footer>
</body>
