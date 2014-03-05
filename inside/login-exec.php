<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	if(isset($_POST['Submit'])){
	//Sanitize the POST values
	$email = clean($_POST['email']);
	$password = clean($_POST['password']);
	$user = clean($_POST['user']);
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($user == '') {
		$errmsg_arr[] = 'user type missing';
		$errflag = true;
	}
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
	if($user=="member"){
	//Create query
	$qry="SELECT * FROM register WHERE email='$email' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['email'] = $member['email'];
			session_write_close();
			header("location: member-home.php");
			exit();
		}
		else {
		die("Query failed");
	}
		}
		}
		else if($user="admin"){
		$qry="SELECT * FROM administrator WHERE loginname='$login' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['email'] = $member['email'];
			session_write_close();
			header("location: admin.php");
			exit();
		}
		else {
		die("Query failed");
                sleep('2');
                header("Location: login.php");   
	}
		}
		}
		else {
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	
}
?>