<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projects Main Page</title>
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
    
    	<div id="site_title"><h1><a href="index.php">Free CSS Templates</a></h1></div>
        
        <div id="templatemo_menu" class="ddsmoothmenu">
        
            <ul>
              	<li><a href="index.php" >Home</a></li>
          		<li><a href="graduate.html">Education</a>
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
                        Oct<span>2008</span>
                    </div>
                    <h2>Digital address book in Java</h2>
                </div>
                <div class="post_inner"> <img src="images/main.jpg"  alt="Image" />
                
                    <p>Implemented during undergraduation as a part of CPL (Computer Programming Laboratory) course with Shashank Chorge</p>
                    <p align="justify">Project was implmented using core java features and Java swing library. It involved adding personal details
 in the database through swing interface and later retrieving it from database. Used JDBC drivers to connect to database, swing for user interface and 
core Java for logic implementation. <p>Functionalities involved adding, deleting and updating personal records in address book. Also user could search for specific record in the database. In order to 
enhance security, administration authentication interface was provided at the very beginning before using diary. This password and username preset by the developer.    </p><p>Once logged in
user could perform above mentioned activities viz. inserting or searching for existing record in the database.</p> 
					<br/><b>Additional Resources</b></p>
					
					<ul class="tmo_list">
                	<li><a href="images/login.jpg">Snapshot 1</a></li>
                    
                    <li><a href="images/add.jpg">Snapshot 2</a></li>
					<li><a href="images/search.jpg">Snapshot 3</a></li>
 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> <!-- end of post -->
			 <!--<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Apr<span>2012</span>
                    </div>
                    <h2>Analysis of Open Flow Network</h2>
                </div>
                <div class="post_inner"> <img src="images/openflow.jpg"  alt="Image" /></a>
                    
                    <p>The purpose of this project was to study, implement and find some vulnerabilities in the Open flow network. Open flow networks are SDN, i.e. Software defined Networks, and it was 
developed by a team of SDN from Stanford. It consists of two layers 1) hardware layer and 2) a 
software layer to manage the hardware layer. Although there have been problems incurred in the 
software layers, some kind of network layer attacks like DOS attack or Switch Poisoning  which have 
created a Havoc in a networks. Open Flow Networks provides and awesomely solution to most of those 
problems. </p> <p>Well then can there be 
some security vulnerability with this Upcoming project? Can there be some way for attacker to channel 
the traffic to one of the port of the switch and break down a network. Some of those threat models are 
appropriately explained in this paper. This paper was written in collaboration with Vikram Kulkarni.</p>
					<br/><b>Additional Resources</b></p>
					<ul class="tmo_list">
                	<li><a href="docs/Analysis of OpenFlow Networks.pdf">Project Report</a></li>
                    
 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> --><!-- end of post -->
			
			<!-- Another project PageRank algorithm -->
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Aug<span>2012</span>
                    </div>
                    <h2>Implementation of Google PageRank algorithm</h2>
                </div>
                <div class="post_inner"> <img src="images/pagerank.jpg"  alt="Source: http://calvinayre.com/2011/09/06/marketing/ryan-murton-the-ultimate-truth-regarding-pagerank/" /></a>
                    (Source:http://calvinayre.com/2011/09/06/marketing/ryan-murton-the-ultimate-truth-regarding-pagerank/)<br/><br/>
                    <p>In this project we implemented Sequential PageRank algorithm. The algorithm calculates the PageRank value of each page depending on the inbound links to that page. Each inbound link is like a vote. These votes are used to determine which pages are more important. 
In regular implementation calculations are done iteratively until the values converge. But in out implementation we have two options - Until the values converge or the specified number iterations are executed.
 </p> <p>In addition to sequential version, we also implemented its parallel version as MPI PageRank algorithm. We implemented this algorithm using MPJ open source library. This algorithm is revision of first part in which the same algorithm was implemented in a sequential manner. We used java for parallel page rank implementation because java is considered as excellent language for running high performance parallel applications on grids and clusters.
</b></p>
<p>This project was selected among top 3 projects in the class and our group was invited to give class presenation. You can view the presenation <a href="docs/seqpagerankpresenation.pdf">here</a>. <!--We successfully implemented efficent pagerank version and analyzed system performance in terms of execution time as a function of various input parameters.--></p>
					<ul class="tmo_list">
                	<li><a href="docs/Group01_Report.pdf">Project Report - Sequential PageRank</a></li>
					<li><a href="docs/Group01_Project1P2_Report.pdf">Project Report - Parallel PageRank</a></li>
					<li><a href="docs/pagerank.java">Source Code - PageRank (Java)</a></li>
					<li><a href="docs/pagerank.zip">PageRank Project (Please refer to Readme file)</a></li>
                    <li><a href="docs/pagerank.10k">Sample input file</a></li>
 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> <!-- end of post -->
			 <div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Apr<span>2012</span>
                    </div>
                    <h2>Analysis of Open Flow Network</h2>
                </div>
                <div class="post_inner"> <img src="images/openflow.jpg"  alt="Image" /></a>
                    
                    <p>The purpose of this project was to study, implement and find some vulnerabilities in the Open flow network. Open flow networks are SDN, i.e. Software defined Networks, and it was 
developed by a team of SDN from Stanford. It consists of two layers 1) hardware layer and 2) a 
software layer to manage the hardware layer. Although there have been problems incurred in the 
software layers, some kind of network layer attacks like DOS attack or Switch Poisoning  which have 
created a Havoc in a networks. Open Flow Networks provides and awesomely solution to most of those 
problems. </p> <p>Well then can there be 
some security vulnerability with this Upcoming project? Can there be some way for attacker to channel 
the traffic to one of the port of the switch and break down a network. Some of those threat models are 
appropriately explained in this paper. This paper was written in collaboration with Vikram Kulkarni.</p>
					<br/><b>Additional Resources</b></p>
					<ul class="tmo_list">
                	<li><a href="docs/Analysis of OpenFlow Networks.pdf">Project Report</a></li>
                    
 <div class="cleaner h20"></div>
                         
			  
                </ul>
</div>
			</div> <!-- end of post -->
			<div class="post_box">
                <div class="post_header">
                    <div class="post_date">
                        Oct<span>2012</span>
                    </div>
                    <h2>Port Scanner (C) </h2>
              
				</div>
				  
                <div class="post_inner"><img src="images/noimage.jpg"  alt="Image" /></a>
                    
                    <p>Developed a simple port scanner with Full IPv4 and partial IPv6 support with PCAP - packet capture library.
Studied the interplay of various implementations of firewalls, transport protocols and operating systems.
</p>
                    <p >Verified standard services such as SSH, HTTP, SMTP, POP and IMAP if they are indeed running on respective ports.
Added multi-threading support for faster implementation on multiple ports. </p>
<br/><p><b>Additional Resources</b></p>

<ul class="tmo_list">
                	<li><a href="docs/portScanner">Object File </a></li>
					<li><a href="http://www.cs.indiana.edu/classes/p538-gupt/projects/portScan.html">Additional Project information </a></li>
					
					
                    
 <div class="cleaner h20"></div>
                         
			  
                </ul>
				
To get the list of invocation options, type ./portScanner --help<br/>
				Make Sure you have Root privileges on the system on which code will run <br/><br/>

</div>
			</div>  
            
            
                        
                                  
                       

                <div class="cleaner h20"></div>    
          		<div class="templatemo_paging">
                    <ul>
                        
                        <li><a href="projects.php" target="_parent">1</a></li>
                        <li><a href="projects1.php" target="_parent">2</a></li>
                        <li><a href="projects2.php" target="_parent">3</a></li>
                        <li><a href="projects3.php" target="_parent">4</a></li>
			   <li><a href="projects4.php" target="_parent">5</a></li>

                                               <li><a href="projects1.php" target="_parent">Next</a></li>
                    </ul>
                </div>    
                    
                </div>
                <div class="cleaner h30"></div>
                        <h3>Comments</h3>
                <div class="cleaner h20"></div>
                
                <div id="comment_form">
                    <h3>Leave your comment</h3>
                    
                    <form action="insert.php" method="post" id="contact">
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