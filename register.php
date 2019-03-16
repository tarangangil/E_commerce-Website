<?php
include 'dbh.php';
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword =$_POST['repassword'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$name="/^[A-Z][a-zA-Z ]+$/";
$emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";
if(empty($f_name)||empty($l_name)||empty($email)||empty($password)||empty($repassword)||empty($mobile)||empty($address)||empty($landmark))
{
echo"
     <div class='alert alert-warning'>
	 <a href='#' class='close' data-dismiss='alert' alert-label='close'>&times;</a><b>please fill all fields..!<b></div>
	 ";
	 exit();}
	 
     else{
		 if(!preg_match($name,$f_name)){
		 echo"this $f_name is not valid";
		 exit();
	 }
	if(!preg_match($name,$l_name)){
		 echo"this $l_name is not valid";
		 exit();
	 }
	 if(!preg_match($emailValidation,$email)){
	 echo"this is $email address is not valid";
	 exit();}

  
   if(strlen($password)<6){
		 echo"Password is weak";
		 exit();
	 }
	 
	 if($password!=$repassword){
		 echo"password is not same";
		 exit();
	 }
	 
	  if(!preg_match($number,$mobile)){
		 echo"Mobile number $mobile is not valid";
		 exit();
	 }
	 
	 if(strlen($mobile)!=10)
	 {echo"Mobile number must be 10 digit";
	 exit();}
	 
	 $sql="SELECT user_id FROM user_info WHERE email='$email' LIMIT 1";
	 $check_query=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($check_query)>0)
	 {
		 echo"Email Address is already available try another email address";
		 exit();
	 }
	 else{
		 $password=md5($password);
		 $sql= "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address`, `landmark`) 
		 VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$address', '$landmark')";
	 $run_query=mysqli_query($conn,$sql);
	 if($run_query){
	 echo"you are registered successfully..!";}
	 }}
	?>