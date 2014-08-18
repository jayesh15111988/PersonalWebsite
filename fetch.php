<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fetch Comments</title>
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

		<div id="templatemo_header">
    
    	<div id="site_title"><h1><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></h1></div>
        
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
                        <li><a href="db2.html" >DB2</a></li>
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
           
        </div> <!-- end of templatemo_menu -->
        
    </div> <!-- end of header -->
    




			<?php
include_once('db_info.php');
//$query1="delete from comments";
//$res=mysql_query($query1);// or die(mysql_error());

$query="select name,emailid,comments,date,time from comments";
 $result = mysql_query($query)
or die(mysql_error());  
?>
    <div id="templatemo_main">
    	<div id="templatemo_content">
    	
           
            
            <div class="cleaner h30"></div>
                        <h3>Comments</h3>
                        
              <div id="comment_section">
                <ol class="comments first_level">
 <?php  while($row = mysql_fetch_array( $result ))
{  ?>
                       <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar"> <a href="#"><img src="images/avator.png" alt="author 3" /></a>
                              </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author"> <?php echo $row['name']; ?>  <span class="date"><?php echo $row['date']; ?></span> <span class="time"><?php echo $row['time']; ?>
									</span></div>
                                    <p><?php echo $row['comments']; ?></p>
								<br/></br>
									 <?php echo $row['emailid']; ?>
                                  <div class="reply"><a href="       mailto:   ' <?php echo $row["emailid"];  ?>'    ">Reply</a></div>
                                </div>
								
                                <div class="cleaner"></div>
<?php } ?> 
                           </div>                        
                            
                        </li>
                        
                        <li>
                        
                     
                <div class="cleaner h20"></div>    
          		 
                  
  
<div class="col_w460 float_l">
            	<h2>Go Back</h2>
                <div class="col_w460">
                	<div class="fp_service_box fp_c1">
                       
                        <a href="projects.php"> Projects</a>   Go back to previous page to browse projects</div>
                </div>
                <div class="col_w460">
                	<div class="fp_service_box fp_c2">
                       
                        <a href="contact.html"> Contact Page</a>
                        Go back to Contact Me page
					</div>
                </div>
                
            </div> 






                </div>
                
                <div class="cleaner h20"></div>
                
                
                
		</div> <!-- end of content -->
       
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