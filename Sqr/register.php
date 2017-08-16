<?php

	if(isset($_POST['member']))
	{


		$conn = mysql_connect('localhost', 'sqrfaave_g16', 'sqrfactor@129');

		$db = mysql_select_db('sqrfaave_g16') or die('Error Connecting To Database');

		$date = date('Y-m-d H:i:s');

		$amount = 1800;

		$insert1 = mysql_query("INSERT INTO team (id, team_id, created_dt) values ('','','$date')");
		if(!($insert1)){
			echo "Error in saving data."; exit;
		}

		$query = mysql_query("SELECT * from team");
		if ($query==false) 
		{
			die(mysql_error());
		}
		
		$count = mysql_num_rows($query);
		
		
		if(($_POST['member'][0]['type']=="STUDENT")&&($_POST['member'][1]['type']=="STUDENT")&&($_POST['member'][2]['type']=="STUDENT"))
		{
			$set_type="S";
		}
		else{
			$set_type="A";
		}
		
		if(($_POST['member'][3]['name']!=""))
		{
			$set_mentor="M";
		}
		else{
			$set_mentor="";
		}
		
		$query = mysql_query("Select * from member");
		$parentId = mysql_num_rows($query);
		
		$clg_code = $_POST['member'][0]['college'];
		 
		$query = mysql_query("Select * from member where parent_id='' and college='$clg_code'");
		$teamCount = mysql_num_rows($query);
		$teamCount = $teamCount+1;
		
		$id =  sprintf("%03d", $teamCount);
		
		$individual = "";
		if(($_POST['member'][1]['name']=="")&&($_POST['member'][2]['name']=="")&&($_POST['member'][3]['name']==""))
		{
			$individual = "I";
		}
		
		$teamId = 'G16'.$clg_code.$set_type.$id.$set_mentor.$individual;
		
		mysql_query("UPDATE `team` SET `team_id` = '$teamId' WHERE `id` = '$count'");
		
		for($i=0;$i<=3;$i++)
		{
			$name = $_POST['member'][$i]['name'];
			if($i==0)
				$parent_id = '';
			else
				$parent_id = $parentId;
			
			$email = $_POST['member'][$i]['email'];
			$phone = $_POST['member'][$i]['phone'];
			$college = $_POST['member'][$i]['college'];
			$type = $_POST['member'][$i]['type'];
			$year_of_passing = $_POST['member'][$i]['year_of_passing'];
			$qualification = $_POST['member'][$i]['qualification'];
			
			if($name!="")
			{
				$insert = mysql_query("INSERT INTO member (id, parent_id, name, email, phone, college, year_of_passing, type, qualification, team_id, amount) values ('', '$parent_id','$name', '$email', '$phone', '$college', '$year_of_passing', '$type', '$qualification', '$teamId', '$amount')");
			}
			if(!($insert)){
				echo "Error in saving data.";exit;
			}
		}
		
		$name = $_POST['member'][0]['name'];

		$from="noreply@sqrfactor.in";
		
		$headers = "From:".strip_tags($from)."\r\n";
		$headers .= "Reply-To:".strip_tags($from)."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8\r\n";		
			
		$mail_subject = "Reinventing Gwalior'16 : Complete the Registration Process";
		
		$to = $_POST['member'][0]['email'];

		$body='<h2>Dear '.$name.',</h2><br>
			<h4>Thank You For the Registration. Your Team Code is '.$teamId.'.<br>To participate in the competition and to get your REFERAL CODE. You need to complete the transaction process.<br><br><br><span><b>Competition Fee : INR ' .$amount. '+ 2.5% tax</b></span></h4>
			<a href="https://www.sqrfactor.in/payment.php?teamId='.$teamId.'"><img src="https://www.sqrfactor.in/assets/img/payumoney.png" class="payumoney"></a>
			<h4>Best Of Luck,<br>Team SqrFactor</h4>';
		
		if(!mail($to, $mail_subject, $body,$headers))
		{
		 echo "Error in mail";
		 exit;
		}
		
	   $mailto="aditya.ogale@gmail.com,agnimgupta11@gmail.com";
			
			$pcount=0;
			$gcount=0;
			$subject = "Mail from Registration Form";

			$from="noreply@sqrfactor.in";
			
			$headers = "From: " . strip_tags($from) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$message_body= "Team Id:".$teamId;
			
			$message_body.= "\n\nFirst Member:";
			$message_body.= "\nName:".$_POST['member'][0]['name'];
			$message_body.= "\nEmail:".$_POST['member'][0]['email'];
			$message_body.= "\nCollege:".$_POST['member'][0]['college'];
			$message_body.= "\nPhone:".$_POST['member'][0]['phone'];
			$message_body.= "\nType:".$_POST['member'][0]['type'];
			$message_body.= "\nYear of Passing:".$_POST['member'][0]['year_of_passing'];
			
			$message_body.= "\n\nSecond Member:";
			$message_body.= "\nName:".$_POST['member'][1]['name'];
			$message_body.= "\nEmail:".$_POST['member'][1]['email'];
			$message_body.= "\nCollege:".$_POST['member'][1]['college'];
			$message_body.= "\nPhone:".$_POST['member'][1]['phone'];
			$message_body.= "\nType:".$_POST['member'][1]['type'];
			$message_body.= "\nYear of Passing:".$_POST['member'][1]['year_of_passing'];
			
			$message_body.= "\n\nThird Member:";
			$message_body.= "\nName:".$_POST['member'][2]['name'];
			$message_body.= "\nEmail:".$_POST['member'][2]['email'];
			$message_body.= "\nCollege:".$_POST['member'][2]['college'];
			$message_body.= "\nPhone:".$_POST['member'][2]['phone'];
			$message_body.= "\nType:".$_POST['member'][2]['type'];
			$message_body.= "\nYear of Passing:".$_POST['member'][2]['year_of_passing'];
			
			$message_body.= "\n\nMentor:";
			$message_body.= "\nName:".$_POST['member'][3]['name'];
			$message_body.= "\nEmail:".$_POST['member'][3]['email'];
			$message_body.= "\nPhone:".$_POST['member'][3]['phone'];
			$message_body.= "\nType:".$_POST['member'][3]['qualification'];
			
			mail($mailto,$subject,$message_body,"From:".$headers);
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
			<script src="https://code.jquery.com/jquery-1.12.1.js"></script>
			<script>
				function chk() {
					var status = document.getElementById('status');
					var code = document.getElementById('code').value;
					
					if (code != "") {
						status.innerHTML = 'checking....';
						var hr = new XMLHttpRequest();
						hr.open("post", "code.php", true);
						hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						hr.onreadystatechange = function() {
							if(hr.readyState == 4 && hr.status == 200){
								status.innerHTML = "";
								if(hr.responseText == 0){
									status.style.color = "red";
									status.innerHTML = "Referal Code is not valid. Please try again.";

									document.getElementById("finalAmount").innerHTML = 1800;
									$('#finalAmount').animateNumber({ number: 1800 })

									$amount = 1800;
								}
								else{
									status.style.color = "green";
									status.innerHTML = "Referal Code is applied successfully.";
									document.getElementById("finalAmount").innerHTML = hr.responseText;
									$('#finalAmount').animateNumber({ number: hr.responseText })

									$amount = hr.responseText;
								}
							}
						}
						
						<?php session_start(); $_SESSION['team_id'] = $teamId; ?>	
						var v = "ref="+code;
			
						hr.send(v);
					}
				}
			</script>
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

		  <!-- After Registration Prompt -->
		  <div class="container after_reg">
			<h2>Dear <span></span><?php echo $_POST['member'][0]['name'];?></h2><br>
			<h4 class="after_reg_text">Thank You For the Registration. Your Team Code is <span class="turn-red"><?php echo $teamId;?></span>.<br>To participate in the competition and to get your REFERAL CODE. You need to complete the transaction process.<br><br><br><span class="bold">Competition Fee : INR <span id="finalAmount"><?php echo $amount; ?></span> + 2.5% tax</span></h4>
			 <div>
			 <h4 class="sub-title-field ref-title">*Have a <a class="turn-red link-register1" href="javascript:window.open('ref_code_dsc.html', 'yourWindowName', 'width=500,height=500');">referal code</a> ? Apply to get offer</h4>
             </div>
             <form action="" method="post">
             <div class="col-md-12 refcode">
             <input type="hidden" id="team_id" name="team_id" value="<?php echo $teamId;?>" />
             <input type="text" placeholder="Referal Code(Optional)" class="ref-field registration-field" id="code" name="ref">
             <input type="button" value="APPLY" class="apply-button" name="aply-btn" onclick="return chk()">
             </div>
             <span id="status"></span>
             
             </form>
			<a href="payment.php?teamId=<?php echo $teamId?>"><img src="assets/img/payumoney.png" class="payumoney"></a>
			<h4>Best Of Luck,<br>Team SqrFactor</h4>
		  </div>
		   
		 <!-- Footer Page : Contact Details -->
		  <div class="container-fluid footer-page">
			<div class="col-md-12 footer-img">
			  <img src="assets/img/footer.png" class="img-footer">
			  <p class="footer-allrights">&copy; 2016. All Rights Reserved | SqrFactor India Pvt. Ltd</p>
			</div>
		  </div>
		  <script type="text/javascript" src="assets/js/jquery-2.2.0.min.js"></script>
		  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		  <script type="text/javascript" src="assets/js/select2.js"></script>
		  <script type="text/javascript" src="assets/js/nav.js"></script>
		  <script type="text/javascript" src="assets/js/app.js"></script>
          <script>
			$(document).ready(function(e){
            $("#ref-msg").hide();
         });

       $('.apply-button').click(function(e){
          var ref = $('.ref-field').val();
          if (!ref.trim()){
              alert('Enter Code');
              return false;
          }
          else
          {
          	
            // $("#number").text("1650");
            // $("#ref-msg").show();
          }
      })

		</script>

		</body>
		  <!-- jquery and scriptsheets -->
		  <script type="text/javascript" src="assets/js/jquery-2.2.0.min.js"></script>
		  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		  <script type="text/javascript" src="assets/js/select2.js"></script>
		  <script type="text/javascript" src="assets/js/nav.js"></script>
		  <script type="text/javascript" src="assets/js/app.js"></script>
		  <script type="text/javascript" src="assets/js/jquery.animateNumber.js"></script>
		  <script type="text/javascript" src="assets/js/jquery.animateNumber.min.js"></script>
		</html>
		<!--Developed By: Huzaifa Pitolwala -->
<?php
	}
	else
	{
?>
		<!--<script>
			window.location = "registration.php"
		</script> -->
		
<?php
	}
?>