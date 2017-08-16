<?php

	if(isset($_POST['status']))
	{
			$conn = mysql_connect('localhost', 'sqrfaave_g16', 'sqrfactor@129');

			$db = mysql_select_db('sqrfaave_g16');
			
			$txnid = $_POST['txnid'];
			$mihpayid = $_POST['mihpayid'];
			$mode = $_POST['mode'];
			$status = $_POST['status'];
			$unmappedstatus = $_POST['unmappedstatus'];
			$addedon = $_POST['addedon'];
			$field1 = $_POST['field1'];
			$field2 = $_POST['field2'];
			$field3 = $_POST['field3'];
			$field4 = $_POST['field4'];
			$field5 = $_POST['field5'];
			$field6 = $_POST['field6'];
			$field7 = $_POST['field7'];
			$field8 = $_POST['field8'];
			$field9 = $_POST['field9'];
			$payment_source = $_POST['payment_source'];
			$PG_TYPE = $_POST['PG_TYPE'];
			$bank_ref_no = $_POST['bank_ref_num'];
			$bankcode = $_POST['bankcode'];
			$error = $_POST['error'];
			$error_Message = $_POST['error_Message'];
			
			$query = mysql_query("Update transaction SET
			`mihpayid`='$mihpayid',
			`mode`='$mode',
			`status`='$status',
			`unmappedstatus`='$unmappedstatus',
			`addedon`='$addedon',
			`field1`='$field1',
			`field2`='$field2',
			`field3`='$field3',
			`field4`='$field4',
			`field5`='$field5',
			`field6`='$field6',
			`field7`='$field7',
			`field8`='$field8',
			`field9`='$field9',
			`payment_source` = '$payment_source',
			`PG_TYPE` = '$PG_TYPE',
			`bank_ref_no`='$bank_ref_no',
			`bankcode` = '$bankcode',
			`error` = '$error',
			`error_message` = '$error_Message'");
			
			$headers = "From:".strip_tags($from)."\r\n";
			$headers .= "Reply-To:".strip_tags($from)."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8\r\n";	
			
			$mailto = "aditya.ogale@gmail.com,agnimgupta11@gmail.com";
			$subject = "Transaction Information - Gwalior'16";
			$body ="";
			
			foreach($_POST as $key => $value)
			{
				$body .= $key.":".$value."<br />";
			}
			
			mail($mailto,$subject,$body,$headers);
		if($_POST['status']=="success")
		{

			$conn = mysql_connect('localhost', 'sqrfaave_g16', 'sqrfactor@129');

			$db = mysql_select_db('sqrfaave_g16');

			//Send the mail to all the team members
			$name = $_POST['firstname'];
			$teamId = $_GET['teamId'];

			$from="noreply@sqrfactor.in";
		
			$headers = "From:".strip_tags($from)."\r\n";
			$headers .= "Reply-To:".strip_tags($from)."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8\r\n";		
			
			$mail_subject = "Reinventing Gwalior'16 : Registration Process Completed Successfully";

			//Create the referal code for all the members
			$query = mysql_query("Select * from member where team_id='$teamId' ORDER BY id ASC" );
			$memberCount = 0;
			while ($row = mysql_fetch_array($query)){
				$memberCount++;
				//Add 01 02 so on at the end for refcode
				$refCode = $row['team_id'].'0'.$memberCount;	
				$rowId = $row['id'];
				$result = mysql_query("UPDATE `member` SET `ref_code` = '$refCode' WHERE `id` = '$rowId' ");
			}
		
			$toEmails = "";
			//Fetch the emails of all the users
			$query = mysql_query("Select * from member where team_id='$teamId' ORDER BY id ASC" );
			while ($row = mysql_fetch_array($query)){
				$toEmails = $toEmails.$row['email'] . ",";	
			}
			$toEmails = rtrim($toEmails, ",");

			$to = $toEmails;
			
			//Write ref code for each user
			$referalBody = "";
			$query = mysql_query("Select * from member where team_id='$teamId' ORDER BY id ASC" );
			while ($row = mysql_fetch_array($query)){
				$referalBody = $referalBody."Name : ".$row['name']." and Referal Code : ".$row['ref_code'].nl2br("\n<br>");
			}	

			$body='<h2>Dear Team '.$teamId.',</h2>
			<h4>Your have successfully Completed the transaction.<br><br>The last Date of Submission is 28<sup>th</sup> April 2016.<br>Please Use Your Team Registration Code for submission entries.</h4>
			<h4>Please find your referal codes below.</h4>
			<h4>'.$referalBody.'</h4>
			<h4>Invite your friends to get referal bonus. To know more how referal code works <a href="https://sqrfactor.in/ref_code_dsc.html">click here</a></h4>
			<p>In case you still have questions related to the briefs and the competition,<br>please send us an email with \'FAQ\' subject until 15<sup>th</sup> March 2015 on queries@sqrfactor.in.</p><br>
			<h4>Best Of Luck,<br>Team SqrFactor</h4>
			<div><a href="http://www.sqrfactor.in/" target="_blank">www.sqrfactor.in</a></div>';

			if(!mail($to, $mail_subject, $body,$headers))
			{
			 echo "Error in mail";
			 exit;
			}
		?>
		<!DOCTYPE html>
		<html>
		<head>
		  <title>Registration Form</title>
		  <link rel="shortcut icon" href="assets/img/favicon.ico" />
		  <!-- Bootstrap and stylesheets -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/select2.css">
			<link rel="stylesheet" type="text/css" href="assets/css/app.css">
		</head>
		<body>
		  <!-- Header -->
		  <div class="container-fluid header-registration">
			<div class="col-xs-6 col-lg-4">
			  <a href="index.html"><img src="assets/img/logo_main.png" class="cmpny-logo animated slideInLeft"></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-8 animated slideInRight">
			  
			  <div class="nav nav-pills">
				<ul class="social-link">
				  <li><a href="https://www.facebook.com/SqrFactor" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
				  <li><a href="https://twitter.com/SqrFactor" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
				  <li><a href="https://plus.google.com/b/114936707287339735860/114936707287339735860"><i class="fa fa-google-plus fa-2x"></i></a></li>
				  <li><a href="https://www.instagram.com/sqrfactor/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
				  <li><a href="https://www.linkedin.com/company/6615617?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6615617%2Cidx%3A1-1-1%2CtarId%3A1451305821587%2Ctas%3Asqrfactor" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
				  <br/>
				</ul>
			  </div>
			</div>

			  <div>
				<button class="nav-button"><img src="assets/img/navbar-button.png"></button>
			  </div>
			  <div>
				<ul class="nav-bar">
				  <li id="home"><a href="index.html" class="link-register">Home</a></li>
				  <li id="home"><a href="index.html#about-new" class="link-register">About</a></li>
				  <li id="competition"><a href="index.html#competition-down" class="link-register">Competition</a></li>
				  <li id="brief"><a href="brief.html" class="link-register">Brief</a></li>
				  <li id="register"><a href="registration.php" class="link-register">Register</a></li>
				  <li id="contactus"><a href="index.html#contact" class="link-register">Contact Us</a></li>
				</ul>
			  </div>
			</div>


		  
		  <!-- After Registration Payment Success -->
		  <div class="container payment_success">
			<h2>Dear <?php echo $_POST['firstname']?>,</h2>
			<h4 class="after_reg_text"><span class="turn-red bold">Your have succesfully Completed the transaction.</span><br><br>The last Date of Submission is <span class="turn-red">28<sup>th</sup> April 2016.</span><br>Please Use Your Team Registration Code for submission of entries.</h4>
			<h4 class="after_reg_text">Invite your friends to get referal bonus. To know more how referal code works <a href="ref_code_dsc.html" class="link-register">click here</a></h4>
			<p>In case you still have questions related to the briefs and the competition,<br>please send us an email with 'FAQ' subject until 15<sup>th</sup> March 2015 on queries@sqrfactor.in.</p><br>
			<h4>Best Of Luck,<br>Team SqrFactor</h4>
		  </div>



		  <!-- Footer Page : Contact Details -->
		  <div class="container-fluid footer-page">
			<div class="col-md-12 footer-img">
			  <img src="assets/img/footer.png" class="img-footer">
			  <p class="footer-allrights">&copy; 2016. All Rights Reserved | SqrFactor India Pvt. Ltd</p>
			</div>
		  </div>
		</body>
		  <!-- jquery and scriptsheets -->
		  <script type="text/javascript" src="assets/js/jquery-2.2.0.min.js"></script>
		  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		  <script type="text/javascript" src="assets/js/select2.js"></script>
		  <script type="text/javascript" src="assets/js/nav.js"></script>
		  <script type="text/javascript" src="assets/js/app.js"></script>
		</html>
		<!--Developed By: Huzaifa Pitolwala -->
		<?php
		}else{
		?>
			<!DOCTYPE html>
			<html>
			<head>
			  <title>Registration Form</title>
			  <link rel="shortcut icon" href="assets/img/favicon.ico" />
			  <!-- Bootstrap and stylesheets -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="assets/css/select2.css">
				<link rel="stylesheet" type="text/css" href="assets/css/app.css">
			</head>
			<body>
			  <!-- Header -->
			  <div class="container-fluid header-registration">
				<div class="col-xs-6 col-lg-4">
				  <a href="index.html"><img src="assets/img/logo_main.png" class="cmpny-logo animated slideInLeft"></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-8 animated slideInRight">
				  
				  <div class="nav nav-pills">
					<ul class="social-link">
					  <li><a href="https://www.facebook.com/SqrFactor" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
					  <li><a href="https://twitter.com/SqrFactor" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
					  <li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>
					  <li><a href="https://www.instagram.com/sqrfactor/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					  <li><a href="https://www.linkedin.com/company/6615617?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6615617%2Cidx%3A1-1-1%2CtarId%3A1451305821587%2Ctas%3Asqrfactor" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					  <br/>
					</ul>
				  </div>
				</div>

				  <div>
					<button class="nav-button"><img src="assets/img/navbar-button.png"></button>
				  </div>
				  <div>
					<ul class="nav-bar">
					  <li id="home"><a href="index.html" class="link-register">Home</a></li>
					  <li id="home"><a href="index.html#about-new" class="link-register">About</a></li>
					  <li id="competition"><a href="index.html#competition-down" class="link-register">Competition</a></li>
					  <li id="brief"><a href="brief.html" class="link-register">Brief</a></li>
					  <li id="register"><a href="registration.php" class="link-register">Register</a></li>
					  <li id="contactus"><a href="index.html#contact" class="link-register">Contact Us</a></li>
					</ul>
				  </div>
				</div>
				
			  <!-- After Registration Payment Success -->
			  <div class="container payment_success">
				<h2>Dear <?php echo $_POST['firstname']?>,</h2>
				<h4 class="after_reg_text"><span class="turn-red bold">There was a following error during Transaction.</span><br><br></h4>
				<?php
					if(isset($_POST['error'])&&$_POST['error']!="")
							echo "<h4>".$_POST['error'].":".$_POST['error'];
						else
							echo "<h4> Error : ".$_POST['field9']."</h4>";
					
					$conn = mysql_connect('localhost', 'sqrfaave_g16', 'sqrfactor@129');
					$db = mysql_select_db('sqrfaave_g16');
					
					$txnid = $_POST['txnid'];
					$query = mysql_query("Select * from transaction where txnid = '$txnid'");
					$row = mysql_fetch_assoc($query);
				?>
				
				<h4>To participate in the competition, You need to complete the transaction process.</h4>
				<a href="payment.php?teamId=<?php echo $row['team_id']?>"><img src="assets/img/payumoney.png" class="payumoney"></a>
				<h4>Best Of Luck,<br>Team SqrFactor</h4>
			  </div>
			  
			  <!-- Footer Page : Contact Details -->
			  <div class="container-fluid footer-page">
				<div class="col-md-12 footer-img">
				  <img src="assets/img/footer.png" class="img-footer">
				  <p class="footer-allrights">&copy; 2016. All Rights Reserved | SqrFactor India Pvt. Ltd</p>
				</div>
			  </div>
			</body>
			  <!-- jquery and scriptsheets -->
			  <script type="text/javascript" src="assets/js/jquery-2.2.0.min.js"></script>
			  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
			  <script type="text/javascript" src="assets/js/select2.js"></script>
			  <script type="text/javascript" src="assets/js/nav.js"></script>
			  <script type="text/javascript" src="assets/js/app.js"></script>
			</html>
			<!--Developed By: Huzaifa Pitolwala -->
		<?php
			
		}
		//print_r($_POST);
	}
	elseif(isset($_GET['teamId'])){
		
		$teamId = $_GET['teamId'];
		
		$conn = mysql_connect('localhost', 'sqrfaave_g16', 'sqrfactor@129');

		$db = mysql_select_db('sqrfaave_g16');
		
		$query = mysql_query("Select * from team where team_id='$teamId'");
		$is_team = mysql_num_rows($query);
		if($is_team!=0)
		{
			$query = mysql_query("Select * from transaction where team_id='$teamId' and status='success'");
			$is_successful = mysql_num_rows($query);
			if($is_successful<1)
			{
				$query = mysql_query("Select * from member where team_id='$teamId' ORDER BY id ASC" );
				$row = mysql_fetch_assoc($query);
				
				// Merchant Salt as provided by Payu
				//$key = "gtKFFx";
				$key = "xrrZdj";

				//$salt = "eCwWELxi";
				$salt = "FlVk5hXQ";

				$PAYU_BASE_URL = "https://secure.payu.in";
				//$PAYU_BASE_URL = "https://test.payu.in";

				//$amount="1230";

				$amount = $row['amount'];
				
				$tax = ($amount * 2.5)/100;
				$amount = $amount + $tax;
			
				$firstname = $row['name'];
				$email = $row['email'];
				$phone = $row['phone'];
				
				// Generate random transaction id
				$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

				$txnid = "G16".$txnid;
				$date = date('Y-m-d H:i:s');
				$link = mysql_query("INSERT INTO `transaction`
(`id`, `team_id`, `txnid`, `mihpayid`, `mode`, `status`, `unmappedstatus`, `addedon`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `payment_source`, `PG_TYPE`, `bank_ref_no`, `bankcode`, `error`, `error_message`) VALUES
(NULL, '$teamId', '$txnid', '', '', '', '', '$date', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
				$productinfo = "Registration Fee";

				$surl = "https://www.sqrfactor.in/payment.php" . "?teamId=" .$teamId;

				$furl = "https://www.sqrfactor.in/payment.php" . "?teamId=" . $teamId;
				
				// Hash Sequence
				//	$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
				$hashSequence = $key.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'||||||||||';
				$hashVarsSeq = explode('|', $hashSequence);
				$hash_string = '';	
				foreach($hashVarsSeq as $hash_var) {
				  $hash_string .= $hash_var;
				  $hash_string .= '|';
				}

				$hash_string .= $salt;

				$hash = strtolower(hash('sha512', $hash_string));
				
				$action = $PAYU_BASE_URL . '/_payment';
				
				?>
				
				<html>
				  <head>
				  <script>
					function submitPayuForm() {
					  var payuForm = document.forms.payuForm;
					  payuForm.submit();
					}
				  </script>
				  </head>
				  <body onload="submitPayuForm()">
					<form action="<?php echo $action;?>" method="POST" name="payuForm">
						<input type="hidden" name="key" value="<?php echo $key;?>">
						<input type="hidden" name="hash" value="<?php echo $hash;?>">
						<input type="hidden" name="txnid" value="<?php echo $txnid;?>">
						<input type="hidden" name="amount" value="<?php echo $amount;?>">
						<input type="hidden" name="firstname" value="<?php echo $firstname;?>">
						<input type="hidden" name="email" value="<?php echo $email;?>">
						<input type="hidden" name="phone" value="<?php echo $phone;?>">
						<input type="hidden" name="productinfo" value="<?php echo $productinfo;?>">
						<input type="hidden" name="surl" value="<?php echo $surl;?>">
						<input type="hidden" name="furl" value="<?php echo $furl;?>">
						<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
					</form>
				  </body>
				</html>
<?php
			}
			else{
			?>
			<script>
				window.location="error.html";
			</script>
			<?php
			}
		}
		else{
		?>
		<script>
			window.location="error.html";
		</script>
		<?php
			}
	}
	else{
	?>
	<script>
		window.location="register.php";
	</script>
	<?php
		}
?>