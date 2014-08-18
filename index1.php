<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
 function died($error) {
        // your error code can go here
include('header.php');
echo "<h2>OOPS Error......</h2>";
echo "<br/><br/>";
echo "<img src='images/emailerror.jpg'>";
echo "<br/><br/>";
echo "<h5>There is some problem with your form submission";
echo "<br/><br/>";
echo $error;
echo "<br/><br/>";
echo "<a href='contact.html'> <b>Click here to go back to Feedback form</a></b>";
echo "<br/><br/>";
echo "Thank you for your co-operation</h5>";
               die();
    }
$email_from = 'j.kawli@gmail.com';//<== update the email address//<== update the email address
//$email_from = "admin@jayeshkawli.com";
$email_subject = "New Website Feedback";
$name = $_POST['author'];
$visitor_email = $_POST['email'];
$message = $_POST['comments'];
//Validate first
if(empty($name)||empty($visitor_email)|| empty($message)) 
{
header('Location: error.php');


   
exit;    
}
 $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$visitor_email)) {
    $error_message .= '<b>The Email Address you entered does not appear to be valid.</b><br /><br />';
  }
$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= '<b>The First Name you entered does not appear to be valid.</b><br /> <br />';
  }
if(strlen($message) < 10) {
    $error_message .= '<b>The Comments you entered do not appear to be valid.</b><br /><br />';
  }
if(strlen($error_message) > 0) {
    died($error_message);
  }

 $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($name)."\n\n";
      $email_message .= "Email: ".clean_string($visitor_email)."\n\n";
       $email_message .= "Comments: ".clean_string($message)."\n\n";
     
     
// create email headers
$headers = 'From: '.$visitor_email."\r\n".
'Reply-To: '.$visitor_email."\r\n" .
'X-Mailer: PHP/' . phpversion();//Send the email!
if(!(mail($email_from,$email_subject,$email_message,$headers)))
{
header('Location: emailerror.php');

}
else
{


//done. redirect to thank-you page.
header('Location: thank-you.html');
}

   
?> 