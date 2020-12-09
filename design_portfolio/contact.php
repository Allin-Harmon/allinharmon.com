<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','4design@allinharmon.com');
	define('MESSAGE_SUBJECT','Contact');
	define('REPLY_TO', '4design@allinharmon.com');
	define('FROM_ADDRESS', '4design@allinharmon.com');
	define('REDIRECT_URL', 'http://www.allinharmon.com/');
	
	require_once('inc/validation.php');

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allin Harmon's Portfolio</title>
<meta content="/images/aph_favicon.png" itemprop="image">
<link rel="icon" href="http://www.allinharmon.com/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.allinharmon.com/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all">
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

</head>

<body>

  <div id="wrapper">
  
    <header>
		<h1>Allin Harmon's Portfolio Site</h1>

        <div class="parallax-btn"><a href="http://www.allinharmon.com/parallax/"><p>Parallax Site</p></a></div>

        <ul>
          <li><a href="contact.php">Contact Me</a></li>
        </ul>
    </header>
    
    <div id="main_content">
      
        <nav>
			<?php require_once('inc/nav.php'); ?>
        </nav>
        
          <div id="contact">
            <form id="contact_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <fieldset>
                <legend>Message Form</legend>
                  <p>
                      <label for="name">Name:</label><?php echo @$name_error; ?>
                      <input type="text" id="name" name="name" placeholder="First and Last Name" value="<?php echo @$name ?>" class="required" />
                  </p>
                  <p>
                      <label for="email">Email:</label><?php echo @$email_error; ?>
                      <input type="text" id="email" name="email" placeholder="Example: yourname@gmail.com" value="<?php echo @$email ?>" class="email required" />
                  </p>
                  <p>
                      <label for="message">Message:</label><?php echo @$message_error; ?>
                      <textarea cols="45" rows="7" id="message" name="message" placeholder="How can I help you?" class="required"><?php echo @$message ?></textarea>
                  </p>
                  <input name="submitted" id="submit" type="submit" value="Send" />
              </fieldset>
            </form>
          </div><!--closes contact--> 
      
      </div><!--closes main_content-->
      
      <footer>
		<?php require_once('inc/footer.php'); ?>
      </footer>
	
  </div><!--closes wrapper-->

    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
