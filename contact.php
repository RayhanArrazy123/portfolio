
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>CV Rayhan Arrazy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Leven - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body class="page">

    <div class="lm-animated-bg"></div>
    
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
      <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        <!-- Header -->
        <header id="site_header" class="header">
          <div class="header-content clearfix">
                
            <?php include 'config/nav.php'; ?>

            <a class="menu-toggle mobile-visible">
                <i class="fa fa-bars"></i>
            </a>
          </div>
        </header>
        <!-- /Header -->

        <div id="main" class="site-main">
          <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">

              <div class="page-title">
                <h1>Contact</h1>
                <div class="page-subtitle">
                    <h4> Get in Touch</h4>
                </div>
              </div>

              <div id="content" class="page-content site-content single-post" role="main">


                <div class="row">
                  <div class=" col-xs-12 col-sm-4 ">
                        
                  <div id="info_list_1" class="info-list-w-icon">
                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-phone"></i>
                        </div>
                        <div class="ci-text">
                          <h4>+62-813-8767-9258</h4>
                          <!-- <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p> -->
                        </div>
                      </div>

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-location"></i>
                        </div>
                        <div class="ci-text">
                          <h4>Tangerang</h4>
                          <!-- <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p> -->
                        </div>
                      </div>

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-camera"></i>
                        </div>
                        <div class="ci-text">
                          <h4>@rayhan.projek</h4>
                          <!-- <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p> -->
                        </div>
                      </div>
                      
                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-mail"></i>
                        </div>
                        <div class="ci-text">
                          <h4>rayhanprojek@gmail.com</h4>
                          <!-- <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p> -->
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class=" col-xs-12 col-sm-8 ">

                    <div class="block-title">
                      <h2>How Can I Help You?</h2>
                    </div>

                    <form action="https://formspree.io/f/xwkzvbbz" method="POST">

                      <div class="messages"></div>

                      <div class="controls two-columns">
                        <div class="fields clearfix">
                          <div class="left-column">
                            <div class="form-group form-group-with-icon">
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group form-group-with-icon">
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group form-group-with-icon">
                              <input id="form_name" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="right-column">
                            <div class="form-group form-group-with-icon">
                              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>
      
                        <input type="submit" class="button btn-send disabled" value="Send message">
                      </div>
                    </form>

                  </div>


                </div>

              </div>
            </div>
          </div>
        </div>

        <?php include 'config/footer.php'; ?>
        
      </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7819d554edd09e22","version":"2022.11.3","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}' crossorigin="anonymous"></script>
</body>
</html>
