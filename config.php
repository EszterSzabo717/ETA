<?php

//print_r($_POST);

//exit;
/*
echo urlencode('???áélőp ??/');
exit;
*/
	//error_reporting(0);  //noticokat es warningokat elttunteti
	session_start();
	
	//unset($_SESSION);
	
	//echo hash('sha256', '123123');
	header('Content-type: text/html; charset=utf-8');
	ini_set('mbstring.internal_encoding','UTF-8');



      // sql injecttion
      if (!empty($_POST)) {
		foreach($_POST as  $key => $value){
		   $_POST[$key] = addslashes($_POST[$key]);
		}
	  }
	  
      if (!empty($_GET)) {
		foreach($_GET as  $key => $value){
		   $_GET[$key] = addslashes($_GET[$key]);
		}
	  }
	  
      if (!empty($_PUT)) {
		foreach($_PUT as  $key => $value){
		   $_PUT[$key] = addslashes($_PUT[$key]);
		}
	  }
      if (!empty($_REQUEST)) {
		foreach($_REQUEST as  $key => $value){
		   $_REQUEST[$key] = addslashes($_REQUEST[$key]);
		}
	  }
	  
	  
	  
	$host = 'localhost';
	$user = 'root';
	$pswd = '';
	$database = 'eta';
	
	
	$connect = mysqli_connect($host,$user,$pswd,$database);

	mysqli_query($connect,'set names utf8');
	mysqli_select_db($connect,$database);
	
	/*------------------Translators-----------------*/
	$query="
		SELECT photo, translator, greeting
		FROM profiles		
	";
	$sql_result = mysqli_query($connect,$query);
	
	$profile=array();
	while($row = mysqli_fetch_array($sql_result)) {
		$profile[] = $row;		
	}
	/*------------------Translators-----------------*/
	
	/*
	if (!empty($_GET['id'])) {
	
	//lekerjuk a termke adatait
	$query = "
		SELECT products.*
		FROM products	
		WHERE products.id='".$_GET['id']."'
	";

	$sql_result = mysqli_query($connect,$query);
	
	$product=array();
	while($row = mysqli_fetch_array($sql_result)) {
		$product[] = $row;		
	}
	// print_r
	
	
	//termekhez tartozo kepeket
	$query = "
		SELECT url
		FROM images	
		WHERE p_id='".$_GET['id']."'
	";

	$sql_result = mysqli_query($connect,$query);
	
	$images=array();
	while($row = mysqli_fetch_array($sql_result)) {
		$images[] = $row;		
	}
	
	}
	*/

?>


