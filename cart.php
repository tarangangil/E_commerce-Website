<?php 
session_start();
if(!isset($_SESSION["uid"])){
header("location:index.php");}
?>
<html>
<head>
<title>welcome to store</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="main.js"></script>
<script>

</script>
</head>
<body>

<nav class="navbar navbar-inverse" style="box-shadow:6px 6px 12px #888888;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">scratch</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
      </ul>
	  </div></nav> 
	  </br> </br> </br>
	  <div class="container-fluid">
	  
	  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8" id="cart_msg">
   
   </div></div>
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
    <div class="panel panel-primary">
      <div class="panel-heading">Cart Checkout</div>
      <div class="panel-body">
	  <div class="row">
     <div class="col-md-2"><b>Action</b></div>
	 <div class="col-md-2"><b>Product Image</b></div>
	 <div class="col-md-2"><b>Product Name</b></div>
	  <div class="col-md-2"><b>Product price</b></div>
	  <div class="col-md-2"><b>Quantity</b></div>
	  <div class="col-md-2"><b>Price in $</b></div>
	  </div>
	  <div id="cart_checkout"></div>
	 <!--<div class="row">
     <div class="col-md-2">
	 <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
	 <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
	 </div>
	 <div class="col-md-2"><img src=''></div>
	 <div class="col-md-2"><b>Product Name</b></div>
	  <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
	  <div class="col-md-2"><input type="text" class="form-control" value="5000" ></div>
	  <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
	  </div>-->
	  
	 <!-- <div class="row">
   <div class="col-md-8"></div>
   <div class="col-md-4">
   <b>Total $50000</b>
   </div></div>-->
   
   
   </div></div></div>
   <div class="col-md-2"></div>
	  </body>
	  </html>