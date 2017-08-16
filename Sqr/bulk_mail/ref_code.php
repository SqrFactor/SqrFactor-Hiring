<?php  
$username = "sqrfaave_agnim";
$password = "Agnim123";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db("sqrfaave_agnim",$dbhandle) 
  or die("Could not select examples");


$result = mysql_query("SELECT * FROM member WHERE ref_code IS NOT NULL AND ref_code != '' limit  99, 448") or die(mysql_error());

while($row = mysql_fetch_array($result)){
	$emailId = $row['email'];
	$name = $row['name'];  	
	$referralCode = $row['ref_code'];

$from="noreply@sqrfactor.in";
		
$headers = "From:".strip_tags($from)."\r\n";
$headers .= "Reply-To:".strip_tags($from)."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";		
			
$subject = "Reinventing Gwalior'16 : Registration Successful | Referral Code ";

$mailto = $emailId;

$body = "Dear ".$name.",<br><br>

Thank you for registering with us. Please find your referral code below. Refer your friends and colleagues to get the referral bonus.<br><br>

Referral Code : ".$referralCode.'<br>
 
Know more about Referral Code Program <a href="www.sqrfactor.in/ref_code_dsc.html">click here</a><br><br>

To Stay Updated! Follow us on <br>
<a href="https://www.facebook.com/SqrFactor">Facebook</a>
<a href="https://twitter.com/SqrFactor">Twitter</a>
<a href="https://plus.google.com/b/114936707287339735860/114936707287339735860">Google+</a>
<a href="https://www.linkedin.com/company/6615617?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6615617%2Cidx%3A1-1-1%2CtarId%3A1451305821587%2Ctas%3Asqrfactor">LinkedIn</a>
<a href="https://www.instagram.com/sqrfactor/">Instagram</a><br><br>

Best of luck, <br>
Team SqrFactor';	

if(!mail($mailto,$subject,$body,$headers)){
	echo "Error in sending mail to " . $emailId;
	exit;
}else{
	echo "Mail sent to " . $emailId."\n<br>";
}

}




// $mail = new PHPMailer;

// //Enable SMTP debugging. 
// //$mail->SMTPDebug = 3;                               
// //Set PHPMailer to use SMTP.
// $mail->isSMTP();            
// //Set SMTP host name                          
// $mail->Host = "cp-23.webhostbox.net";
// //Set this to true if SMTP host requires authentication to send email
// $mail->SMTPAuth = true;                          
// //Provide username and password     
// $mail->Username = "create@sqrfactor.in";                 
// $mail->Password = "sqrfactor@129";                           
// //If SMTP requires TLS encryption then set it
// $mail->SMTPSecure = "ssl";                           
// //Set TCP port to connect to 
// $mail->Port = 465;                                   

// $mail->From = "create@sqrfactor.in";
// $mail->FromName = "Team SqrFactor";

// $result = mysql_query("SELECT * FROM member WHERE ref_code IS NOT NULL AND ref_code != '' limit 7 , 10") or die(mysql_error());

// while($row = mysql_fetch_array($result)){
// 	$emailId = $row['email'];
// 	$name = $row['name'];  	
// 	$referralCode = $row['ref_code'];
	
// 	//First clear all addresses if any
// 	$mail->ClearAllRecipients();
//   	$mail->addAddress("$emailId");
  	
// 	$mail_body = "Dear ".$name.",<br><br>

// Thank you for registering with us. Please find your referral code below. Refer your friends and colleagues to get the referral bonus.<br><br>

// Referral Code : ".$referralCode.'<br>
 
// Know more about Referral Code Program <a href="www.sqrfactor.in/ref_code_dsc.html">click here</a><br><br>

// To Stay Udpated! Follow us on <br>
// <a href="https://www.facebook.com/SqrFactor">Facebook</a>
// <a href="https://twitter.com/SqrFactor">Twitter</a>
// <a href="https://plus.google.com/b/114936707287339735860/114936707287339735860">Google+</a>
// <a href="https://www.linkedin.com/company/6615617?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6615617%2Cidx%3A1-1-1%2CtarId%3A1451305821587%2Ctas%3Asqrfactor">LinkedIn</a>
// <a href="https://www.instagram.com/sqrfactor/">Instagram</a><br><br>

// Best of luck, <br>
// Team SqrFactor';	

// $mail ->Body = $mail_body;

// $mail->isHTML(true);

// $mail->Subject = "Reinventing Gwalior'16 : Registration Successful | Referral Code ";

// $mail->AltBody = "This is the plain text version of the email content";

// if(!$mail->send()) 
// {
// 	echo "Mail Sent to: ".$emailId."\n<br>";
//     echo "Mailer Error: " . $mail->ErrorInfo;
// } 
// else 
// {
// 	echo "Mail Sent to: ".$emailId. "\n<br>";
//     echo "Message has been sent successfully";
// }
// }

mysql_close($dbhandle);
?>