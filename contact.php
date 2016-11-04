<?php require_once './header.php';?>
        <section class="contact-title text-center">
            <div class="contact-wrapper">
                <div class="container">
                    <div class= "row">
                        <div>
                            <h1 class="headline">Contact us</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sub-headline">
                            <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                    </div>	
                </div>
            </div>
        </section>


        <section class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                        <div class="quick-contact">
                            <h3>Quick Contact</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa fa-home"></i> 
                                        <span>Full Address:</span> 
                                        62 West 55th Street, Suite 302 New York, NY, 10230
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        <span>Cell No:</span>
                                        +880 1234567890
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa fa-fax"></i> 
                                        <span>Fax No:</span>
                                        +58 - 0123456789
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa fa-ambulance"></i>
                                        <span>Ambulance:</span>
                                        + 000 987654321
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class= "appointment">

                            <div class="header text-center">
                                <h2>Make an Appointment</h2>
                                <a href="#" class="number">
                                    <i class="fa fa-phone fa-fw"></i>
                                    1-234-567-890
                                </a>
                                <span class="or">OR</span>
                            </div>

                            <!-- form of appointment -->
                            <div class="row">
                                <form method="post" action="#">
                                    <div class= "form">
                                        <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                            <input class="form-control" type="text" placeholder="Full Name *" required>
                                        </div>
                                        <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                            <input class="form-control" type="text" placeholder="Email Address *" required>
                                        </div>
                                        <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                            <input class="form-control" type="text" placeholder="Appointment Date *" required>
                                        </div>
                                        <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                            <input class="form-control" type="text" placeholder="Mobile Number *" required>
                                        </div>
                                    </div>
                                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <textarea class="form-control" rows="6" placeholder="Your Problem *" required></textarea>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <div class="captcha-container">
                                            <label>Are you human? </label><br/>
                                            <img src="http://inspirythemesdemo.com/healthpress/wp-content/themes/healthpress-theme/captcha/captcha.php" alt="">
                                            <input type="text" class="captcha required" name="captcha" maxlength="5" title=" Please enter the code characters displayed in image!">
                                        </div>
                                        <input class="btn btn-primary send" type="submit" value="Send">
                                    </div>
                                </form>
                            </div>
                            <!-- end of form -->
                        </div><!-- end of appointment-->
                    </div>
                </div>
            </div>
        </section>

<?php require_once './footer.php';?>