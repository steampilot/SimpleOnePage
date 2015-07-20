<body>
<div id="plane" class="parallax-container"
     data-parallax="scroll"
     data-bleed="0"
     data-z-index="-200"
     data-image-src="assets/img/banner/space_invader.jpg">
    <section class="container">
        <?php require_once "nav.php"; ?>

        <div id="banner" class="parallax-container"
             data-parallax="scroll"
             data-z-index="-100"
             data-bleed="0"
             data-natural-width="650"
             data-natural-height="366"
             data-image-src="<?= getRandomBanner(); ?>">


            <div id="start" class=" col-lg-2 pull-right  text-vertical-center">
                <object id="logo" width="100%" type="image/svg+xml"
                        data="assets/img/orca-logo.svg">
                    Your browser does not support SVG
                </object>


            </div>
            <div class="col-xs-12 col-lg-12 text-vertical-center">
                <h1 class="slogan">The Web starts with us</h1>
            </div>

        </div>

    </section>
    <!-- Container-->
    <?php require_once "about.php"; ?>


    <!-- About -->


    <!-- Header -->
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="partner" class="partner bg-primary spc-orca-4 spc-inverse">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Partners and Clients</h2>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
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
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
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
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
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
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
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
             data-bleed="50" data-image-src="assets/img/impressions/coffee_drop.jpg"
             data-z-index="-50"
             data-natural-width="650"
             data-natural-height="366">
            <h1 class="slogan">Come and get your coffee</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <?php require_once "portfolio.php"; ?>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary spc-orca-1">
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


    <section id="contact" class="container ">
        <div class="row spc-orca-0 spc-inverse">
            <address id="address" class="col-lg-4 col-md-4 col-xs-8
                           text-center pull-right spc-orca-4 spc-inverse">

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
            </address>
            <div id="map" class="col-lg-8 col-md-8 col-xs-4 ">
                <div id="map_canvas" class="Flexible-container">
                </div>
                <div id="map_button"><a href="#gogogoogle" class="btn btn-dark btn-lg">Open Map</a></div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <section>
            <div class="container">
                <section class="col-md-3">
                    <article class="tweet">

                        <div class="panel">
                            <div class="panel panel-title">
                                Orca Willy Twitter <em>Apr 16, 2015</em>
                            </div>
                            <p>Seit heute morgen wieder genug Luft.
                            </p>
                        </div>

                    </article>
                    <p class="padd-bott">
                        Let everyone know about ORCA.
                    </p>
                    <section class="">
                        <span class="">
                        <i class="fa fa-facebook-square fa-fw fa-lg"></i>
                            Like it
                                </span>

                    </section>
                    <section class="">
                        <span class="">
                        <i class="fa fa-pinterest-square fa-fw fa-lg"></i>
                            Pin it
                                </span>

                    </section>
                    <section class="">
                        <span class="">
                        <i class="fa fa-twitter-square fa-fw fa-lg"></i>
                            Tweet about
                                </span>

                    </section>
                    <section class="">
                        <span class="">
                        <i class="fa fa-google-plus-square fa-fw fa-lg"></i>
                            Share it
                                </span>

                    </section>


                </section>

                <section class="col-md-6">
                    <h2>Our Team</h2>
                    <ul>
                        <li>
                            <strong>
                                Rolf Gerber
                            </strong>
                            <em>CEO</em>
                        </li>
                        <li>
                            <strong>Marc Würth</strong>
                            <em>Head of Development</em>
                        </li>
                        <li>
                            <strong>
                                Dino Fellmann
                            </strong>
                            <em>Design and Projectmanagement</em>
                        </li>
                        <li>
                            <strong>Daniel Opitz</strong>
                            <em>Development and Education</em>
                        </li>
                        <li>
                            <strong>
                                Jérôme Röthlisberger
                            </strong>
                            <em>Junior Developer</em>
                        </li>
                    </ul>
                </section>
                <section class="col-md-3">
                    <address>
                        <h4>ORCA Services AG</h4>

                        <p><em>Hauptsitz</em><br/>
                            Bahnofstrasse 11</br>
                            4133 Pratteln</br>
                            Schweiz
                        </p>
                    </address>
                    <address>
                        <h4>ORCA Solution AG</h4>
                        <em>Body Leasing</em>
                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <small>Vertretung in Basel</small>
                                    <br/>
                                    Aechengraben 10</br>
                                    4010 Basel</br>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <small>Vertretung in Zürich</small>
                                    <br/>
                                    Flurstrasse 74</br>
                                    8048 Zürich
                                </p>
                            </li>
                        </ul>

                    </address>
                </section>
            </div>
        </section>
    </footer>

    <!-- div#plane.paralax-container -->
</div>
</body>
