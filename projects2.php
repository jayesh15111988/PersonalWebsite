<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projects Page 3</title>
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
                        Nov <span>2011</span>
                    </div>
                    <h2 id="karatsuba">Implementation of Karatsuba multiplication Algorithm</h2>
                </div>
                <div class="post_inner"> <img src="images/mult.jpg"  alt="Image" />                
                    <p>Fast multiplication algorithm for multiplying two n-bit numbers. Implmented using GMP library.</p>
                    <p align="justify">PRegular multiplication algorithms work in O(n^2) complexity Karatsuba was designed to work with complexity O(n^1.58).
Study of this algorithm is reasonably important as compared to grade school or classic algorithm which performs large number 
of multiplications karatsuba algorithm reduces total number of multiplications to be done and saves reasonable amount of 
time. But this saving comes at the cost of additional additions and subtractions that to be done to perform multiplications of 
numbers. But since cost of addition and subtraction operations is much less than multiplication operation, it ends up saving 
reasonable amount of time at the end especially for numbers having large number of bits. </p> 
					<br/><b>Additional Resources</b></p>
					
					<ul class="tmo_list">
					<li><a href="images/naive.jpg">Comparison with naive Algorithm</a></li>
                	<li><a href="images/graphics.jpg">Graphical Representation</a></li>
                    <li><a href="docs/karreport.pdf">Report</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> <!-- end of post -->
		<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Jan<span>2012</span>
                    </div>
                    <h2 id="inventory">Online Inventory System</h2>
                </div>
                <div class="post_inner"> <img src="images/oi.jpg"  alt="Image" />
                    
                    <p>Online inventory to manage item list in the store. Functionalities included adding and updating items in the store. Whenever vendor adds item in the inventory,
administrator will update the list online using this website. While whenever there is a sell reduces the quantity in the store.
 Avoids necessity to manually updating items in the store.  </p>
					<ul class="tmo_list">
                	<li><a href="http://www.cs.indiana.edu/cgi-pub/jkawli/inventory" target="_blank">Website</a></li>
                    <li><a href="images/oi.jpg">Snapshot 1</a></li>
   <li><a href="images/add.jpg">Snapshot 2</a></li>
   <li><a href="images/display.jpg">Snapshot 3</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div>   
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                       Nov<span>2012</span>
                    </div>
                    <h2 id="inventory">Naive Bayes data classification Algorithm (C++)</h2>
                </div>
                <div class="post_inner"> <img src="images/ILNaiveBayesDemo.jpg"  alt="Source: http://www.mitov.com/products/intelligencelab#screenshots" /><br/>
				Source: http://www.mitov.com/products/intelligencelab#screenshots<br/><br/>
                    
                    <p>Implemented and analyzed simple probabilistic Naive Bayes data classification algorithm on fraudulent sales data.
Executed algorithm on more than 4 lakh input records with approximately 15000 training and 3.5 lakh test records.
Observed more than 90% final accuracy on final classification model by applying it on training data with known labels. </p>
					<ul class="tmo_list">
                	<!-- li><a href="http://archive.ics.uci.edu/ml/machine-learning-databases/breast-cancer-wisconsin/">Dataset and its details</a></li>-->
					<li><a href="docs/SourceCodesandDependenciesnb.zip">Naive Bayes data classification Algorithm - Full Source code and dependencies</a></li>
                	<li><a href="docs/DMHW3Fall2012.pdf">Project Report</a></li>
					 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> 
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Apr<span>2012</span>
                    </div>
                    <h2 id="imagewarping">Image warping using Projective Transformation and Bilinear Interpolation (C++)</h2>
                </div>
                <div class="post_inner"> <img src="images/warping.jpg"  alt="Image" />
                    
                    <p>This is the special kind of transformation applied on the image that transforms images from projection space to image plane. It can be considered as combination of affine transformation and image warp.
This kind of transformation is useful to get straight image when picture is taken from slanted angle.</p>
<p>Since we are applying image warping, the pixel in output image can land at any position in input image which causes noisy output image. To alleviate this problem we use bilinear interpolation technique.
For pixel (i, j) in input image which falls in between two pixel positions we calculate intensity value of corresponding pixel in output image using bilinear interpolation</p>
<ul class="tmo_list">
                	<li><a href="images/warping/lincoln.png">Original Image</a></li>
					<li><a href="images/warping/proj1 no interpolate.png">Image after applying projective transformation</a></li>
					<li><a href="images/warping/Projective_Transform interpolate.png">Image after applying projective transformation and bilinear interpolation</a></li>
<li><a href="docs/protransform.pdf">Report</a></li>
					                   		
							<div class="cleaner h20"></div>
                         
			  
                </ul>
            

</div>

			</div> 
            
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        May<span>2012</span>
                    </div>
                    <h2 id="locationshare">Secure location sharing website</h2>
                </div>
                <div class="post_inner"> <a href="https://lab009g09amt.soic.indiana.edu/apps/locationshare"><img src="images/sl.jpg"  alt="Image" /></a>
                    
                    <p>This project was developed as a part of course Systems and Protocol security. Purpose was not only to build a website but also to build a 'Secure' website.</p>
<p>Began with basic security features such as authentication and then moved on to more advanced security features such as Secure socket layer connections, Digital certificates and firewall.
Included methods to avoid more common mode of attack such as SQL injection, cross site scripting and database attack. Made use of in built security libraries in PHP.</p>
<ul class="tmo_list">
                	<li><a href="https://lab009g09amt.soic.indiana.edu/apps/locationshare">Website</a></li>
                    					 <div class="cleaner h20"></div>
                         
			  
                </ul>
            

</div>

			</div> <!-- end of post -->
            
                        
                                  
                       

                <div class="cleaner h20"></div>    
          		<div class="templatemo_paging">
                    <ul>
                        <li><a href="projects1.php" target="_parent">Previous</a></li>
                        <li><a href="projects.php" target="_parent">1</a></li>
                        <li><a href="projects1.php" target="_parent">2</a></li>
                        <li><a href="projects2.php" target="_parent">3</a></li>
                        <li><a href="projects3.php" target="_parent">4</a></li>
                        <li><a href="projects4.php" target="_parent">5</a></li>
                        <li><a href="projects3.php" target="_parent">Next</a></li>
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