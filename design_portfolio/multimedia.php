<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Allin Harmon's Portfolio</title>
<meta content="/images/aph_favicon.png" itemprop="image">
<link rel="icon" href="http://www.allinharmon.com/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.allinharmon.com/images/favicon.ico" type="image/x-icon" /><link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dropdown.css" rel="stylesheet" type="text/css">
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
     
        <div id="pg_title">
          <h6>Adobe Flash Projects</h6>
        </div>
        
        <div class="content_frame">
        
          <div class="web_btns">
          
            <div class="content_div">
            
            	<ul class="launch_btn">
                    <li>
                        <a href="multimedia/project1.html" target="_blank">Paint with Project 1</a>
                    </li>
                </ul>  
              
              <div id="proj1_content" class="show_content_845px">
                  
                  <a href="#" class="show_content_btn">Show/Hide</a>
                  
                  <div id="proj1" class="main_image"></div>
            
                  <div class="description">
                    <h2>Project 1 - Random Object Placement</h2>
                    <p>This is my first project in IMD 230 Programming Concepts. For this project we had to use Action Script to place random objects on the stage.</p>
                    <p>I thought back to my Art History classes and it seemed like a high tech version of the splatter art that Jackson Pollock created would be a fun interpretation of the assignment, so I created a simple game where the user could “Paint like Pollock”.</p>
                  </div>         

            </div><!--closes .show_content-->
            
          </div><!--closes .content_div-->
          
          <div class="content_div">
            
            	<ul class="launch_btn">
                    <li>
                        <a href="multimedia/project2.html" target="_blank">See Project 2</a>
                    </li>
                </ul>  
              
              <div id="proj2_content" class="show_content_845px">
                  
                  <a href="#" class="show_content_btn">Show/Hide</a>
                  
                  <div id="proj2" class="main_image"></div>
            
                  <div class="description">
                    <h2>Project 2 - Dynamic Scene Generation from Static Images</h2>
                    <p>This is my second project in IMD 230 Programming Concepts. For this project we had to use Action Script to make still pictures move around on the stage.</p>
                    <p>The scene you are looking at is actually just 8 still life pictures that are being regenerated with Action Script so fast that it looks like they are moving in real life. I used Scale, Layering and Depth, among other techniques to enhance the illusion.</p>
                  </div>         

            </div><!--closes .show_content-->
            
          </div><!--closes .content_div-->
        
          <div class="content_div">
            
            	<ul class="launch_btn">
                    <li>
                        <a href="multimedia/project3.html" target="_blank">Play Project 3</a>
                    </li>
                </ul>  
              
              <div id="proj3_content" class="show_content_865px">
                  
                  <a href="#" class="show_content_btn">Show/Hide</a>
                  
                  <div id="proj3" class="main_image"></div>
            
                  <div class="description">
                    <h2>Project 3 - Interactive Flash Video Game</h2>
                    <p>This is my third project in IMD 230 Programming Concepts. For this project we had to use Action Script to make an interactive video game.</p>
                    <p>I have always enjoyed the spot the difference games because I think they help me spot flaws in my photo manipulation work and strengthen my overall design skills. I also enjoy manipulating images and having people try to figure out what I changed, but my serious attempts at image enhancement are much harder to spot. </p>
                  </div>         

            </div><!--closes .show_content-->
            
          </div><!--closes .content_div-->
        
          </div><!--closes .web_btns-->
        
        </div><!--closes .content_frame--> 
                            
      </div><!--closes main content-->    
    
    <footer>
		<?php require_once('inc/footer.php'); ?>
    </footer>
    <div id="top_btn">
    	<a href="#main_content">Back to top</a>
    </div>       
  </div><!--closes wrapper-->

    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
