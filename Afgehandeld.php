<!DOCTYPE html>
<html lang="nl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JBVC</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom fonts for this template -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!--Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/favicon-16x16.png">
    <link rel="manifest" href="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/site.webmanifest">
    <link rel="mask-icon" href="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/faviconnew.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="http://tirpitz-gaming.ddns.net/WebsiteProject/icons/browserconfig.xml">
    <meta name="theme-color" content="#009fe3">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Home</a>
      </div>
    </nav>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-black mb-0 bedankt">Bedankt</h2>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form action="tirpitz-gaming.ddns.net/WebsiteProject/Afgehandeld.php" name="sentMessage" id="contactForm" method="post" >
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <p class="font-weight-light mb-0 topper">Wij hebben alle informatie ontvangen</br> Hieronder alle gegeven informatie</p>
                <?php
                  		if (isset($_POST["naam"]) && $_POST["naam"] != "") {
                  			echo "<label>Naam: " . $_POST["naam"] . "</label>";
                  		} else {
                  			echo "<label> Naam werd niet ingevuld </label>";
                  		}
                 ?>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <?php
                 		if (isset($_POST["email"]) && $_POST["email"] != "") {
                 			echo "<label> Email: " . $_POST["email"] . "</label>\n";
                 		} else {
                 			echo "<label> Email werd niet ingevuld </label>\n";
                 		}

                 ?>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <?php
                  		if (isset($_POST["message"]) && $_POST["message"] != "") {
                  			echo "<label> Bericht: " . $_POST["message"] . "</label>\n";
                  		} else {
                  			echo "<label> message werd niet ingevuld </label>\n";
                  		}
                ?>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
