<?php
session_start();
include "../db/connect.php";
if (isset($_POST["full_name"])) {

	
	$full_name = $_POST["full_name"];
	$email = $_POST['email'];
	$event_id = $_POST['event_id'];
	$mobile = $_POST['mobile'];
	$college = $_POST['college'];
	$branch = $_POST['branch'];
	$upi = $_POST['upi'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	$upivalidation = "/^[0-9]+$/";

if(empty($full_name)  || empty($email)  ||
	empty($mobile) || empty($upi) ) {
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$full_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $full_name is not valid..!</b>
			</div>
		";
		exit();
	}
	
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
		exit();
	}
	if(!preg_match($upivalidation,$upi)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>upi reference number $upi is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($upi) == 12)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>reference number must be 12 digit</b>
			</div>
		";
		exit();
	}
	//existing email address in our database
	
		$sql = "INSERT INTO `participants` 
		(`p_id`,`event_id`, `fullname`, `email`, 
		 `mobile`,  `college`, `branch`,`reference`) 
		VALUES (NULL,'$event_id', '$full_name',  '$email', 
		 '$mobile', '$college', '$branch','$upi')";
		
		if(mysqli_query($con,$sql)){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>success!</strong> YOUR HAVE BEEN REGISTERED 
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
			<span aria-hidden="true"></span></button></div>';
		//	echo "<script> location.href='index.php'; </script>";
            exit;
		}
	}
	
}



?>






















































