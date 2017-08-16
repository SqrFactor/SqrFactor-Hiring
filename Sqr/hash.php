<?php
// Merchant key here as provided by Payu
$key = "gtKFFx";

// Merchant Salt as provided by Payu
$salt = "eCwWELxi";

$PAYU_BASE_URL = "https://test.payu.in";

$amount="1230";

$txnid = "G1600000001";

$productinfo = "Registration Fee";

$firstname = "Aditya Ogale";

$email = "aditya.ogale@gmail.com";

$phone = "9673063056";

$surl = "https://www.facebook.com";

$furl = "https://www.youtube.com";



// Hash Sequence
//	$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
	$hashSequence = $key.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|'.$phone.'|'.$surl.'|'.$furl;
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= $hash_var;
      $hash_string .= '|';
    }

    $hash_string .= $salt;
	
	$hash_string = "gtKFFx|G1600000001|1230|Registration Fee|Aditya Ogale|aditya.ogale@gmail.com|||||||||||eCwWELxi";
	//echo $hash_string;exit;

    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
	<form action="<?php echo $action;?>" method="POST" name="payuForm">
		<input type="hidden" name="key" value="<?php echo $key;?>">
		<input type="hidden" name="txnid" value="<?php echo $txnid;?>">
		<input type="hidden" name="amount" value="<?php echo $amount;?>">
		<input type="hidden" name="productinfo" value="<?php echo $productinfo;?>">
		<input type="hidden" name="firstname" value="<?php echo $firstname;?>">
		<input type="hidden" name="email" value="<?php echo $email;?>">
		<input type="hidden" name="phone" value="<?php echo $phone;?>">
		<input type="hidden" name="surl" value="<?php echo $surl;?>">
		<input type="hidden" name="furl" value="<?php echo $furl;?>">
		<input type="hidden" name="hash" value="<?php echo $hash;?>">
	</form>
  </body>
</html>
