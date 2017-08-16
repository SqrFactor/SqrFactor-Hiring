<?php
require_once "PHPMailer/PHPMailerAutoload.php";
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db("email",$dbhandle) 
  or die("Could not select examples");

  $result = mysql_query("SELECT * FROM mail_send ORDER BY id ASC") or die(mysql_error());
 
 //$emails[3];

 $count = 0;
  while ($row = mysql_fetch_array($result)) {
   
   $emails[$count] = $row['email'];
   $names[$count] = $row['name'];
   $team_ids[$count] = $row['team_id'];

   $count++;
}

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.live.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "venkatsudhir92@hotmail.com";                 
$mail->Password = "MOMdadand";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "venkatsudhir92@hotmail.com";
$mail->FromName = "Venkat Sudhir";

foreach($emails as $email){
	//$mail->addAddress("$email");
	$mail->addBCC("$email");
}

//$mail->addAddress("$email");

$mail->isHTML(true);

$mail->Subject = "Subject Text";

$mail_body = "";
for($i = 0 ; $i < $count ; $i++){
	$mail_body = $mail_body . "Dear Team : ". $team_ids[$i].\n"Thank you for registering with us. To participate in the competition and to get your REFERAL CODE you need to complete the transaction process. Please use the link below to complete the process.\nCompetition Fee : INR 2000 +2.5% tax (Only for Registration before 29th feb 2016)\n"; 
	//$mail->Body = "<i>Mail body".$names[$i]." in HTML</i>";	
	//$mail->Body = "<i>Mail body".$team_ids[$i]." in HTML</i>";
}
$mail ->Body = $mail_body;

//foreach($team_ids as $team_id){
//$mail->Body = "<i>Mail body".$team_id." in HTML</i>";
//}

$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
mysql_close($dbhandle);
?>