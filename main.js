$(document).ready(function(){
	tar();
	tara();
	taran();
	function tar(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {category:1},
			success:function(data){
			$("#get_category").html(data);}
		})
	}
		function tara(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {brand:1},
			success:function(data){
			$("#get_brand").html(data);}
		})
	}
	function taran(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {product:1},
			success:function(data){
			$("#get_product").html(data);}
		})
	}
	
	$("body").delegate(".ab","click",function(event){
	event.preventDefault();
	var cid=$(this).attr('cid');
		$.ajax({
		url: "action.php",
		method: "POST",
		data : {get_selected_category:1,cat_id:cid},
		success:function(data){
			$("#get_product").html(data);}
		})
	
	})
	
	$("body").delegate(".cd","click",function(event){
	event.preventDefault();
	var bid=$(this).attr('bid');
		$.ajax({
		url: "action.php",
		method: "POST",
		data : {get_selected_brand:1,brand_id:bid},
		success:function(data){
			$("#get_product").html(data);}
		})
	
	})
	
	$("#search_btn").click(function(){
	var keyword=$("#search").val();
	if(keyword != ""){
		$.ajax({
		url: "action.php",
		method: "POST",
		data : {search:1,keyword:keyword},
		success:function(data){
			$("#get_product").html(data);}
		})
	}
		})
		
	$("#signup_button").click(function(event){
	event.preventDefault();
       $.ajax({
		url: "register.php",
		method: "POST",
		data : $("form").serialize(),
		success:function(data){
			$("#signup_msg").html(data);}
		})
		
	})
	
	$("#login").click(function(event){
	event.preventDefault();
	var email=$("#email").val();
	var pass=$("#password").val();
       $.ajax({
		url: "login.php",
		method: "POST",
		data : {userLogin:1,userEmail:email,userPassword:pass},
		success:function(data){
			if(data=="hhhh")
		{window.location.href="profile.php";}}
		})
		
	})
	
		$("body").delegate("#product","click",function(event){
	event.preventDefault();
	var p_id=$(this).attr('pid');
	$.ajax({
		url: "action.php",
		method: "POST",
		data : {addToProduct:1,proId:p_id},
		success:function(data){
		$("#product_msg").html(data);	
		}
		})	
})

    $("#cart_container").click(function(event){
	event.preventDefault();
	$.ajax({
		url: "action.php",
		method: "POST",
		data : {get_cart_product:1},
		success:function(data){
		$("#cart_product").html(data);	
		}
})
		})
		
		cart_checkout();		
		function cart_checkout(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {cart_checkout:1},
			success:function(data){
			$("#cart_checkout").html(data);}
		})
}

$("body").delegate(".qty","keyup",function(){
	var pid=$(this).attr('pid');
	var qty=$("#qty-"+pid).val();
	var price=$("#price-"+pid).val();
	var total=qty*price;
	$("#total-"+pid).val(total);
})

$("body").delegate(".remove","click",function(event){
	event.preventDefault();
	var pid=$(this).attr('remove_id');
	$.ajax({
			url: "action.php",
			method: "POST",
			data : {removeFromCart:1,removeId:pid},
			success:function(data){
			$("#cart_msg").html(data);
			cart_checkout();	}
		})
})

$("body").delegate(".update","click",function(event){
	event.preventDefault();
	var pid=$(this).attr('update_id');
	var qty=$("#qty-"+pid).val();
	var price=$("#price-"+pid).val();
	var total=$("#total-"+pid).val();
	$.ajax({
			url: "action.php",
			method: "POST",
			data : {updateProduct:1,updateId:pid,qty:qty,price:price,total:total},
			success:function(data){
				$("#cart_msg").html(data);
				cart_checkout();
				}
		})
	})
	
	page();
	function page(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data : {page:1},
			success:function(data){
	          $("#pageno").html(data);    }
		})
}

$("body").delegate("#page","click",function(){
    var pn=$(this).attr("page");
	$.ajax({
			url: "action.php",
			method: "POST",
			data : {product:1,setPage:1,pageNumber:pn},
			success:function(data){
				$("#get_product").html(data);
				}
		})
})



})