
<?php


require_once("db_info.php");
if(!(isset($_POST['submit'])))
{
echo "You came here by Mistake ;-)";
exit;
}

	else
	{
function died($error) {
       
include('header.php');
echo "<h2>OOPS Error......</h2>";
echo "<br/><br/>";
echo "<img src='images/emailerror.jpg'>";
echo "<br/><br/>";
echo "<h5>There is some problem with your form submission";
echo "<br/><br/>";
echo $error;
echo "<br/><br/>";
echo "<a href='projects.php#contact'> <b>Click here to go back to Feedback form</a></b>";
echo "<br/><br/>";
echo "Thank you for your co-operation</h5>";
               die();
    }

	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
			if(empty($name) ||  empty($comment) || empty($email))
		{
$error_message1 = "OOPS Please enter all details";
died($error_message1);

						}

   $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= '<b>The Email Address you entered does not appear to be valid.</b><br /><br />';
  }
$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= '<b>The First Name you entered does not appear to be valid.</b><br /> <br />';
  }
if(strlen($comment) < 2) {
    $error_message .= '<b>The Comments you entered do not appear to be valid.</b><br /><br />';
  }
if(strlen($error_message) > 0) {
    died($error_message);
  }


			else
			{
	
			
			//Commented out to keep spammers at bay........
			
			$query = "insert into comments(name,emailid,comments,date,time) values (
			 '".$_POST['name']."' ,'".$_POST['email']."' ,'".$_POST['comment']."',CURDATE(),CURTIME())" ;
			$query_result=mysql_query($query);

			if($query_result)
			{
			header('Location: index.php');
			}
			else
			{
			die("failed");
			}
			}		
			}			
?>
<div id="templatemo_footer_wrapper">

    <div id="templatemo_footer">
        Copyright &copy;  2012 Jayesh Kawli | 
        <a href="acknowledgements.html" target="_parent">Acknowledgements</a> |  
        <a href="copy.html" >Copyrights</a> | <a href="sitemap.php">Sitepmap</a>
<div style="text-align: center; font-size: 0.75em;">Design Downloaded from <a href="http://www.template4all.com/joomla/">free Joomla templates</a> | 
<a href="http://www.freethemes4all.com/">free website templates</a> | <a href="http://www.seodesign.us/" title="free psd files" target="_blank">Free PSD Files</a>.</div>

        <div class="cleaner"></div>
    </div>
</div> 
