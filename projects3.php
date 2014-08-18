<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projects Page 4</title>
<meta name="keywords" content="Chrome Web, Blog Page, CSS, HTML, free template, templatemo" />
<meta name="description" content="Chrome Web Blog - free CSS template brought to you by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31656196-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>

<div id="templatemo_wrapper">

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    
    	<div id="site_title"><h1><a href="index.php" target="_parent">Free CSS Templates</a></h1></div>
        
        <div id="templatemo_menu" class="ddsmoothmenu">
        
            <ul>
              	<li><a href="index.php" >Home</a></li>
          		<li><a href="education.html">Education</a>
                    <ul>
                        <li><a href="highschool.html">High School</a></li>
                        <li><a href="undergraduate.html">Undergraduate</a></li>
                        <li><a href="graduate.html">Graduate</a></li>
                  	</ul>
              	</li>
          		<li><a href="tcs.html" >Work</a>
                    <ul>
                        <li><a href="tcs.html">TCS </a></li>
						<ul>
                        <li><a href="mainframe.html">Mainframe</a></li>
                        <li><a href="db2.html" class="selected">DB2</a></li>
                        <li><a href="cobol.html">COBOL</a></li>
						</ul>
					</ul>
              	</li>
              	<li><a href="languages.html" class="selected">Skills</a>
                	<ul>
                        <li><a href="languages.html">Languages</a></li>
                        <li><a href="tools.html">Tools</a></li>
                        <li><a href="platforms.html">Platforms</a></li>
                        <li><a href="databases.html">Databases</a></li>
						 <li><a href="projects.php" class="selected">Projects</a></li>
                        <li><a href="miscellaneous.html">Miscellaneous</a></li>
						
					</ul>
                </li>
                
              	<li><a href="contact.html" >About Me</a>
				<ul>
                        <li><a href="contact.html" >Contact</a></li>
                        <li><a href="resume.html">Resume</a></li>
                         <li><a href="gallery.html">Gallery</a></li>
					</ul>
				
				
				</li>

            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	<div id="templatemo_content">
    	
           
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Mar <span>2012</span>
                    </div>
                    <h2 id="imagestitch">Image stitching on multiple photographic images</h2>
                </div>
                <div class="post_inner"> <a href="images/bignew3.jpg"><img src="images/new3.jpg"  alt="Image" /></a>
                <p><em>Above image was stitched using 3 input scene images</em></p>
                    <p>Project involved stitching given set of images to create panoramic creation of the scene
                    Implemented in C++ usinf vector descriptor and harris corner detector</p>
<p> Work was based upon finding significant features from the set of images. Once these features are found make their comparison to find best stitching point. For better results used Harris corner
detector and 128 dimensional descriptor.</p> 
					<br/><b>Additional Resources</b></p>
					
					<ul class="tmo_list">
					<li>Demo <ul><a href="images/mcfaddin_1.png">Image 1</a></ul>  <ul><a href="images/mcfaddin_2.png">Image 2</a></ul> 
<ul><a href="images/new_mcfaddin.png">Result</ul></li>

                	<li><a href="images/corner.png">Harris Corner Detector</a></li>
                    <li><a href="docs/a2.pdf">Report</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> <!-- end of post -->
			 <div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        May <span>2012</span>
                    </div>
                    <h2 id="timedetect">Time detection from object shadow</h2>
                </div>
                <div class="post_inner"> <img src="images/gnomon.jpg"  alt="Image" /></a>
                    
                    <p>In this project we explore the problem of shadow detection and interpretation. As a part of 
interpretation we try to infer useful information such as direction of light source and time of the day 
from the shadow in given image. Shadow detection is a foundation step in this project. In order to 
facilitate accurate results we use a special construct called a 'Gnomon'. This device is traditionally used 
to calculate time from the object shadows. We used our algorithm to interpret the shadow cast by 
gnomon and calculate the time using given formula. In order to evaluate our method for automatic 
time detection, we used data with temporal spread provided with ground truth value for experiment. </p>
					<ul class="tmo_list">
                	<li><a href="docs/Test Result.rar">Test data and Results</a></li>
                    <li><a href="docs/Computer_Vision_Project_Report.pdf">Detailed Report</a></li>
					<li><a href="docs/vision_final.pptx">Project Presentation</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> <!-- end of post -->
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Jun<span>2012</span>
                    </div>
                    <h2 id="geo">Geo Location detection from object shadows</h2>
                </div>
                <div class="post_inner"> <img src="images/geo.jpg"  alt="Image" /></a>
                    
<p align="justify">This can be regarded as one of the Coolest projects I have ever done. When I first read this paper regarding geolocation detection from object shadows, I was really surprised to know there exist 
techniques which allow you to determine your latitude and longitude just from object shadows. This technique eliminates the use of GPS and other 
sophisticated equipments which are quite expensive.
</p>
<p align="justify">
From the experiment it is evident that, this technique does not take long time for geolocation detection. It is fast and accurate and can be performed anywhere as it does not 
necessiates the use of special equipments. For more information about this project, please refer to the copy of Details Report and Experiment result set.

</p>
	<ul class="tmo_list">
                	<li><a href="docs/Test Results Geo Location.rar">Test data and Results</a></li>
                    <li><a href="docs/Geo Location Detection Report.pdf">Report</a></li>
<li><a href="docs/Detailed Result Analysis.xlsx">Detailed Result Analysis</a> &nbsp;(<a href="docs/Detailed Result Analysis.pdf">PDF</a>)</li>
 <li><a href="docs/fulltext.pdf">Original Paper by Prof. Sandnes</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>

<!--                    <p>Morbi venenatis augue sit amet ante facilisis feugiat sed in lectus. Vivamus imperdiet, ante a pretium <a href="#">vehicula</a>, ante enim sodales mi, eu rutrum odio turpis eget arcu. Proin a elit nisl, id aliquam felis. Nunc ultrices iaculis quam, sed commodo erat tempus mollis. Duis ultricies nulla sed dolor egestas id.</p>
                    <p align="justify">Etiam nec turpis bibendum massa dapibus dictum. Donec eu odio sapien. Donec tincidunt eleifend mauris, 
ac volutpat leo tincidunt. Vestibulum lectus sem, porttitor non molestie quis, pulvinar nec nulla. Maecenas id orci vitae lectus fermentum posuere. 
<a href="#">Phasellus</a> lacinia eleifend elit, eu mollis erat consectetur et. Integer semper sollicitudin quam a ornare. Nam venenatis nibh ac sem 
faucibus et imperdiet magna <a href="#">laoreet</a>.</p>-->
</div>
			</div> <!-- end of post -->
            
            <div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Apr<span>2012</span>
                    </div>
                    <h2 id="geo">Depth Map Estimation from 2-D images (C++)</h2>
                </div>
                <div class="post_inner"> <img src="images/depthmap.jpg"  alt="Image" /></a>
                    
<p align="justify">Created a simple disparity and depth map for pair of 2-Dimensional images using Hidden Markov Model.
Disparity map was created for a given set of images using pixel window and minimizing sum squared error.
Depth map was built using Markov Random fields using bidirectional message passing technique between two neighboring pixels.
</p>
<p align="justify">
From the experiment it is evident that, this technique does not take long time for geolocation detection. It is fast and accurate and can be performed anywhere as it does not 
necessiates the use of special equipments. For more information about this project, please refer to the copy of Details Report and Experiment result set.

</p>
	<ul class="tmo_list">
                	<li><a href="docs/depthmaptest.zip">Test data and Results</a></li>
                    <li><a href="docs/depthmapdoc.pdf">Report</a></li>

 <li><a href="docs/stereo.cpp">Depth Map estimation - Full source code (C++)</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>

<!--                    <p>Morbi venenatis augue sit amet ante facilisis feugiat sed in lectus. Vivamus imperdiet, ante a pretium <a href="#">vehicula</a>, ante enim sodales mi, eu rutrum odio turpis eget arcu. Proin a elit nisl, id aliquam felis. Nunc ultrices iaculis quam, sed commodo erat tempus mollis. Duis ultricies nulla sed dolor egestas id.</p>
                    <p align="justify">Etiam nec turpis bibendum massa dapibus dictum. Donec eu odio sapien. Donec tincidunt eleifend mauris, 
ac volutpat leo tincidunt. Vestibulum lectus sem, porttitor non molestie quis, pulvinar nec nulla. Maecenas id orci vitae lectus fermentum posuere. 
<a href="#">Phasellus</a> lacinia eleifend elit, eu mollis erat consectetur et. Integer semper sollicitudin quam a ornare. Nam venenatis nibh ac sem 
faucibus et imperdiet magna <a href="#">laoreet</a>.</p>-->
</div>
			</div> <!-- end of post -->
                        
                                  
                       

                <div class="cleaner h20"></div>    
          		<div class="templatemo_paging">
                    <ul>
                        <li><a href="projects2.php" target="_parent">Previous</a></li>
                        <li><a href="projects.php" target="_parent">1</a></li>
                        <li><a href="projects1.php" target="_parent">2</a></li>
                        <li><a href="projects2.php" target="_parent">3</a></li>
                        <li><a href="projects3.php" target="_parent">4</a></li>
                        <li><a href="projects4.php" target="_parent">5</a></li>
                        <li><a href="projects4.php" target="_parent">Next</a></li>
                    </ul>
                </div>    
                    
                </div>
                <div class="cleaner h30"></div>
                        <h3>Comments</h3>
                <div class="cleaner h20"></div>
                
                <div id="comment_form">
                    <h3>Leave your comment</h3>
                    
                    <form action="insert.php" method="post">
                        <div class="form_row">
                            <label>Name (* required )</label>
                            <br />
                            <input type="text" name="name" />
                        </div>
                        <div class="form_row">
                            <label>Email  (* required but it will not be published )</label>
                            <br />
                            <input type="text" name="email" />
                        </div>
                        <div class="form_row">
                            <label>Comment</label><br />
                            <textarea  name="comment" rows="" cols=""></textarea>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="submit_btn" />
						
                    </form>
					
                    
                
            	</div>
                
		</div> <!-- end of content -->
        
        <form action="fetch.php" method="post">
                        
                        <input type="submit" name="Submit" value="View Previous Comments" class="submit_btn" />
						
                    </form>
        
        
        <div class="cleaner"></div>
    </div>
    
    <div class="cleaner"></div>
</div>

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright &copy;  2012 Jayesh Kawli | 
        <a href="acknowledgements.html" target="_parent">Acknowledgements</a> |  
        <a href="copy.html" >Copyrights</a> | <a href="sitemap.php">Sitepmap</a>
<div style="text-align: center; font-size: 0.75em;">Design Downloaded from <a href="http://www.template4all.com/joomla/">free Joomla templates</a> | <a href="http://www.freethemes4all.com/">free website templates</a> | <a href="http://www.seodesign.us/" title="free psd files" target="_blank">Free PSD Files</a>.</div>

        <div class="cleaner"></div>
    </div>
</div> 
  
</body>
</html>