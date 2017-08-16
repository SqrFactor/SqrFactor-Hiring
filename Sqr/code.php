<?php
if (isset($_POST["ref"]) && $_POST["ref"] !="") { 
define('DB_HOST', 'localhost');
define('DB_NAME', 'sqrfaave_g16');
define('DB_USER','sqrfaave_g16');
define('DB_PASSWORD','sqrfactor@129');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$ref_code_used =$_POST['ref'];
session_start();
$team_id = $_SESSION['team_id'];
$query = "SELECT ref_code from member where ref_code='".$ref_code_used."'";
$res = mysql_query($query);
if (mysql_num_rows($res) >= 1)
    {
    	$_SESSION["amount"] = 1500;
    	$amount = $_SESSION["amount"];
    	
    	$result = mysql_query("UPDATE `member` SET `amount` = '$amount' WHERE `team_id` = '$team_id'");
    	
        $result1 = mysql_query("UPDATE `member` SET `ref_code_used` = '$ref_code_used' WHERE `team_id` = '$team_id'"); 
        echo $amount;
    	exit();
     }
     else {	
     	echo 0;
        exit();
     }
 }
     ?>