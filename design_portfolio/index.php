<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','4design@allinharmon.com');
	define('MESSAGE_SUBJECT','Contact');
	define('REPLY_TO', '4design@allinharmon.com');
	define('FROM_ADDRESS', '4design@allinharmon.com');
	define('REDIRECT_URL', 'http://www.allinharmon.com/parallax/');
	
	require_once('inc/validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="IE=edge,chrome=1">
<title>Allin Harmon's Portfolio</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<meta content="/images/aph_favicon.png" itemprop="image">
<link rel="icon" href="http://www.allinharmon.com/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.allinharmon.com/images/favicon.ico" type="image/x-icon" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="galleria/galleria-1.2.9.js"></script>
</head>

<body>

  <nav id="nav" class="showNav">
  	<ul>
    	<li class="homeBtn"><a href="#first" title="HOME">Home</a></li>
        <li class="aboutBtn"><a href="#aboutPG" title="ABOUT ME">About Me</a></li>
        <li class="webBtn"><a href="#webPG" title="WEB DESIGN">Web Design</a></li>
        <li class="mobileBtn"><a href="#mobilePG" title="MOBILE WEB DESIGN">Mobile Web Design</a></li>
        <li class="advertBtn"><a href="#advertPG" title="ADVERTISING">Advertising</a></li>
        <li class="multiBtn"><a href="#multiPG" title="MULTIMEDIA">Multimedia</a></li>
        <li class="printBtn"><a href="#printPG" title="PRINT DESIGN">Print Design</a></li>
        <li class="contactBtn"><a href="#eighth" title="CONTACT ME">Contact Me</a></li>
    </ul>
  </nav>

  <div id="main" role="main">
  	<section id="first" class="story" data-speed="8" data-type="background">
    	<div class="portfolioSite" data-type="sprite" data-offsetY="100" data-Xposition="50%" data-speed="-2"></div>
          <article>
          	<div class="logoWrap">
              <img src="images/logo.png" alt="Portfolio-Title">
              <p><a href="tel:4043042440">404.304.2440</a></p>
              <p><a href="mailto:4design@allinharmon.com">4design@allinharmon.com</a></p>
            </div>
          </article>  
  	</section>
  	
    <section id="second" class="story" data-speed="4" data-type="background">
    	<article>
           <div id="aboutPG" class="main_content">  
           	   <div class="info">
                 <div class="slider">
                  <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="images/slider/img01.jpg" data-thumb="images/slider/img01.jpg" alt="Marta Picture" data-transition="slideInRight" />
                        <img src="images/slider/img02.jpg" data-thumb="images/slider/img02.jpg" alt="Folding@home Picture" data-transition="slideInRight" />
                        <img src="images/slider/img03.jpg" data-thumb="images/slider/img03.jpg" alt="Surrealist Picture" data-transition="slideInRight" />
                        <img src="images/slider/img04.jpg" data-thumb="images/slider/img04.jpg" alt="CSS Zen Picture" data-transition="slideInRight" />
                        <img src="images/slider/img05.jpg" data-thumb="images/slider/img05.jpg" alt="Dynamic Picture" data-transition="slideInRight" />
                        <img src="images/slider/img06.jpg" data-thumb="images/slider/img06.jpg" alt="AlienWare Picture" data-transition="slideInRight" />
                        <img src="images/slider/img07.jpg" data-thumb="images/slider/img07.jpg" alt="WCAF Picture" data-transition="slideInRight" />
                        <img src="images/slider/img09.jpg" data-thumb="images/slider/img09.jpg" alt="Pet Finder Picture" data-transition="slideInRight" />
                        <img src="images/slider/img10.jpg" data-thumb="images/slider/img10.jpg" alt="AlienWare Picture" data-transition="slideInRight" />
                    </div>
                  </div>
                 </div> 
                </div> 
               
               <div class="info marginTop10px">       
                  <div class="pg_title">
                    <p><img src="images/about-me-lg.png" alt="About Me Title" /></p>
                    <p class="button"><a href="resume.pdf" target="blank">Click here to see my resume</a></p>
                  </div>
                  
                  <div class="col">
                    <h2>Web Design</h2>
                    <p>Though new to web design, I have learned much about it in the last year. Thanks to the help of my web design instructors I am proficient in HTML5 and CSS3. However, the most important thing I learned in school was how to find  the answer to any problem through research on the internet.</p>
                  </div><!--closes col_1-->
                  
                  <div class="col">
                    <h2>Print Design</h2>
                    <p>I worked at a print shop for two years doing everything from typesetting to running a printing press and before that I was a desktop publisher at a repro shop for seven years. I feel this gives me a clear understanding of the needs and demands of print design.</p>
                  </div><!--closes col_2-->
                  
                  <div class="col">
                    <h2>Advertising</h2>
                    <p>In August of 2012, I earned a Bachelor of Arts in Advertising Summa Cum Laude from the Art Institute of Atlanta. The degree requirements were a combination of Graphic Design and Marketing classes. The classes gave me a great insight into the philosophy of design with the good of the business being the most important part.</p>
                  </div><!--closes col-->
                </div><!--closes info-->
            
            </div><!--closes main content-->
        </article>
        
        <article class="about-title">
            <img src="images/about-me.png" alt="About Me Title" />
        </article>
        
    </section>    
        
    <section id="third" class="story" data-speed="6" data-type="background" data-offsetY="250">
      <div class="web-page-container">	
        <div class="web-container stillwaterPos">
        	<div class="stillwater" data-type="sprite" data-offsetY="50%" data-Xposition="95%" data-speed="2">
            	<div class="webLnkBtn"><h3>Stillwater Taproom Website</h3><a href="http://www.allinharmon.com/courses/imd410/expeng/" target="blank">View Site</a>
                </div>
            </div>
        </div>
  
        <div id="webPG" class="web-container wcfPos">
        	<div class="wcf" data-type="sprite" data-offsetY="1%" data-Xposition="8%" data-speed="2">
            	<div class="webLnkBtn"><h3>World Children's Festival Website</h3><a href="http://www.allinharmon.com/webdesign/wcf/" target="blank">View Site</a>
                </div>
            </div>
        </div>

        <div class="web-container galapagosPos">
        	<div class="galapagos" data-type="sprite" data-offsetY="12" data-Xposition="1%" data-speed="2">
            	<div class="webLnkBtn"><h3>The Galapagos Island's Website</h3><a href="http://www.allinharmon.com/webdesign/galapagos/" target="blank">View Site</a>
                </div>
            </div>
        </div>
        
        <div class="web-container-lg cssZenPos">
        	<div id="panda"></div>
            <div id="horde"></div>
            <div id="alliance"></div>
        	<div class="cssZen" data-type="sprite" data-offsetY="1650" data-Xposition="1%" data-speed="2">
            	<div class="webLnkBtn largeBtn"><h3>CSS Zen Garden Website</h3><a href="http://www.allinharmon.com/webdesign/cssZen/" target="blank">View Site</a>
                </div>
            </div>
        </div>
      </div>

        <article class="web-design">
          <div class="web">	
            <img src="images/web-design.png" alt="Web Design Title" />
          </div>
        </article>
    </section>
  
    <section id="fourth" class="story" data-speed="6" data-type="background" data-offsetY="250">
                 	
        <article class="mobile-web-design">
          <div class="mobile-web-iPhone">	
            <img src="images/mobile-web-design.png" alt="Mobile Web Design Title" />
          </div>
        </article>
     
      <div>  
        <div class="phone">
          <div class="aia_iPhone">
  
          <iframe width="341" height="480" class="aiaFrame" src="http://www.allinharmon.com/webdesign/aia_app/"></iframe>
          </div>
          
          <div id="mobilePG" class="pet_galaxy">
                <iframe width="359" height="631" class="petFrame" src="http://www.allinharmon.com/webdesign/pet_minder/"></iframe>
            </div>
        </div>
      </div>
    </section>
    
    <section id="fifth" class="story" data-speed="6" data-type="background" data-offsetY="450">
		<div class="advert">
          <div id="advertPG" class="galleria-border">
			<div id="galleria">
            	<img src="images/advertising/cover.jpg" alt="Portfolio Cover">
                <img src="images/advertising/alienware-intro.jpg" alt="Alienware Intro Page">
                <img src="images/advertising/alienware-print-ad.jpg" alt="Alienware Print Ad Page">
                <img src="images/advertising/alienware-bling.jpg" alt="Alienware Bling Page">
                <img src="images/advertising/alienware-car-wrap.jpg" alt="Alienware Car Wrap Page">
                <img src="images/advertising/fah-intro.jpg" alt="FAH Intro Page">
                <img src="images/advertising/fah-print-ad.jpg" alt="FAH Print Ad Page">
                <img src="images/advertising/fah-facebook.jpg" alt="FAH Facebook Page">
                <img src="images/advertising/fah-trophy.jpg" alt="FAH Trophy Page">
                <img src="images/advertising/fah-creator.jpg" alt="FAH Creator Page">
                <img src="images/advertising/falcons-intro.jpg" alt="Falcons Intro Page">
                <img src="images/advertising/falcons-event.jpg" alt="Falcons Event Page">
                <img src="images/advertising/falcons-mobile.jpg" alt="Falcons Mobile Page">
                <img src="images/advertising/lego-intro.jpg" alt="Lego Intro Page">
                <img src="images/advertising/lego-popup.jpg" alt="Lego Pop Up Page">
            	<img src="images/advertising/lego-commercial.jpg" alt="Lego Commercial Page">
                <img src="images/advertising/lego-google.jpg" alt="Lego Google Page">
                <img src="images/advertising/lego-advergaming.jpg" alt="Lego Advergaming Page">
                <img src="images/advertising/marta-intro.jpg" alt="MARTA Intro Page">
                <img src="images/advertising/marta-mobile.jpg" alt="MARTA Mobile Page">
                <img src="images/advertising/marta-billboard.jpg" alt="MARTA Billboard Page">
                <img src="images/advertising/marta-print-ad.jpg" alt="MARTA Print Ad Page">
                <img src="images/advertising/back-cover.jpg" alt="Back Cover">
          </div>
        </div>
          
		  <script>
              Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
              Galleria.run('#galleria');
          </script>
        
        </div>
        
        <article>
            <div class="advert-title">	
              <img src="images/advertising.png" alt="Advertising Title" />
            </div>
        </article>
        
    </section>
    
    <section id="sixth" class="story" data-speed="6" data-type="background" data-offsetY="450">
    	 
      <article class="multimedia">
        <div class="multimedia-title">	
          <img src="images/multimedia.png" alt="Multimedia Title" />
        </div>
      </article>
        
      <div class="multimedia-page-container">	
      
        <div id="multiPG" class="multimedia-container project1-pos">
        	<div class="project1">
            	<div class="project-title projLnkBtn"><h3>Paint Like Pollock Game</h3><a href="http://www.allinharmon.com/multimedia/project1.html" target="blank">Play Game</a></div>
            </div>
        </div>

		<div class="multimedia-container project2-pos">
        	<div class="project2">
            	<div class="project-title projLnkBtn"><h3>Dynamic Screen Saver</h3><a href="http://www.allinharmon.com/multimedia/project2.html" target="blank">See It</a></div>
            </div>
        </div>
        
        <div class="web-container-lg project3-pos">
        	<div class="project3">
            	<div class="webLnkBtn largeBtn"><h3>Spot the Difference Game</h3><a href="http://www.allinharmon.com/multimedia/project3.html" target="blank">Play Game</a></div>
            </div>
        </div>
              
      </div>      
    
    </section>

    <section id="seventh" class="story" data-speed="6" data-type="background" data-offsetY="950">
		<div class="advert">
          <div id="printPG" class="galleria-border">
			<div id="galleria2">
            	<img src="images/print-design/menu1.jpg" alt="Menu Front">
				<img src="images/print-design/menu2.jpg" alt="Menu Back">
                <img src="images/print-design/newsletter1.jpg" alt="Newsletter Front">
				<img src="images/print-design/newsletter2.jpg" alt="Newsletter Back">
                <img src="images/print-design/sf-print-ad.jpg" alt="Storefloors Print Ad">
                <img src="images/print-design/photoshop1.jpg" alt="Pimp my Renaissance">
                <img src="images/print-design/photoshop4.jpg" alt="Surrealism">
                <img src="images/print-design/photoshop2.jpg" alt="Exotic Car Race">
                <img src="images/print-design/photoshop3.jpg" alt="Photo Colorization">
				<img src="images/print-design/illust_1.jpg" alt="Penguin Illustration">
                <img src="images/print-design/illust_2.jpg" alt="Self Portrait">
                <img src="images/print-design/illust_3_1.jpg" alt="ComicCon Poster">      
                <img src="images/print-design/webfinity_logo.png" alt="Webfinity Logo">      
             </div>
        </div>
        
          <script>
              //Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
              Galleria.run('#galleria2');
          </script>
        
        </div>
        
        <article>
            <div class="print-title">	
              <img src="images/print-design.png" alt="Print Design Title" />
            </div>
        </article>
        
    </section>
    
    <section id="eighth" class="story" data-speed="6" data-type="background" data-offsetY="1150">
    
         <div id="contact" class="logoWrap">
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
          
        <article>
            <div class="contact-title">	
              <img src="images/contact-me.png" alt="Contact Me Title" />
            </div>
        </article>
        
    </section>

  </div>
  
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
	<script src="js/script.js"></script>
	<script src="js/nav.js"></script>



    <script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider({
				effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
				slices: 15, // For slice animations
				boxCols: 8, // For box animations
				boxRows: 4, // For box animations
				animSpeed: 500, // Slide transition speed
				pauseTime: 5000, // How long each slide will show
				startSlide: 0, // Set starting Slide (0 index)
				directionNav: true, // Next & Prev navigation
				controlNav: true, // 1,2,3... navigation
				controlNavThumbs: false, // Use thumbnails for Control Nav
				pauseOnHover: true, // Stop animation while hovering
				manualAdvance: false, // Force manual transitions
				prevText: 'Prev', // Prev directionNav text
				nextText: 'Next', // Next directionNav text
				randomStart: false, // Start on a random slide
				beforeChange: function(){}, // Triggers before a slide transition
				afterChange: function(){}, // Triggers after a slide transition
				slideshowEnd: function(){}, // Triggers after all slides have been shown
				lastSlide: function(){}, // Triggers when last slide is shown
				afterLoad: function(){} // Triggers when slider has loaded
			});
		});
    </script>

</body>
</html>
