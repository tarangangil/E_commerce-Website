<?php
session_start();
if(isset($_SESSION["uid"])){
header("location:profile.php");}
?>

<html>

<head>
<title>welcome to store</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>

 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="main.js"></script>

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
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" id="search" class="form-control" placeholder="Search for products">
      </div>
      <button id="search_btn" class="btn btn-primary">Search</button>
    </form>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>cart<span class="badge">0</span></a>
	  <ul class="dropdown-menu" style="width:400px;">
	  <div class="panel panel-success">
	     <div class="panel-heading">
		 <div class="row">
   <div class="col-md-3">S1.No</div>
   <div class="col-md-3">Product Image</div>
   <div class="col-md-3">Product Name</div>
   <div class="col-md-3">Price in $.</div>
   
	  </div></div> <div class="panel-heading"></div>
	  </div></ul></li>
      
	  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>signIn</a>
	  
	  <ul class="dropdown-menu" style="width:300px;">
	   <div class="panel panel-primary">
      <div class="panel-heading">Login</div>
      <div class="panel-heading">
	  <label>EMAIL</label>
	  <input type="email" class="form-control" id="email" required/>
	  <label>PASSWORD</label>
	  <input type="password" class="form-control" id="password" required/><br/>
	  <a href="#" style="color:white; list-style:none;">forgotten password</a>
	  <input type="submit" class="btn btn-success  btn-xs" style="float:right;" value="login" id="login">
	  </div></div></ul>
	   </li>
	  
	  
	  
	   <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>signUp</a></li>
   </ul>
  </div>
</nav>
</br></br></br>




 <div class="container-fluid">
  <div class="row">
   <div class="col-md-1"></div>
   
      <div class="col-md-2">
	  <div id="get_category"></div>
  <!--<ul class="nav nav-pills nav-stacked" >
    <li class="active" style="box-shadow:6px 6px 12px #888888;"><a href="#"><h4>categories</h4></a></li>
    <li><a href="#">mens wear</a></li>
    <li><a href="#">electronics</a></li>
    <li><a href="#">kids wear</a></li>       
  </ul> -->
    <div id="get_brand"></div>
  <!--<ul class="nav nav-pills nav-stacked">
    <li class="active" style="box-shadow:6px 6px 12px #888888;"><a href="#"><h4>brand</h4></a></li>
    <li><a href="#">Apple</a></li> 
    <li><a href="#">samsung</a></li>
    <li><a href="#">LG</a></li>       
  </ul>-->
  </div>
  
	  <div class="col-md-8">
	      <div class="panel panel-info">
      <div class="panel-heading">Products</div>
      <div class="panel-body">
	  <div id="get_product"></div>
	   <!--<div class="col-md-4">
	     <div class="panel panel-info">
		 <div class="panel-heading">Redmi 3s</div>
		 <div class="panel-body">
		
		<img src=""/>	  </div>
		 <div class="panel-heading">$.500.00
		 <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
		 </div>
	  </div>
    </div>-->
      </div></div></div>
	  
	   <div class="col-md-1"></div>
	   </div>
	   </div>
	 


</body>
</html>




