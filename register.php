<?php 
 include_once 'config.php';
 if(isset($_POST["register"]) && ($_POST["register"]=="Submit"))
    {
 	$name= $_POST["fullname"] ;
 	$email= $_POST["email"] ;
 	$phone= $_POST["phone"] ;
 	$pass= $_POST["password"] ;
 	$cpass= $_POST["cpassword"] ;
	 	if($pass !== $cpass){

	 	}else{
	 		$pass = md5($pass);
		 	$sqlAU = "INSERT INTO tbl_user(user_name, email, mobile, password, status) VALUES ('$name','$email','$phone','$pass','0')";
			$resAU = $adb->prepare($sqlAU);
			$resAU->execute();
			$id = $adb->lastInsertId();

			header("location:login.php?msg='$id'");
	 	}
 	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="src/example-styles.css">
	  	<script type="text/javascript" src="src/jquery.multi-select.js"></script>
    
	<style>
		    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
		    body{
		        margin: 0;padding: 0;
		        width: 100%;
		    }
		    .container-fluid{
		        width: 100%;
		        min-height: 100vh;
		        height:auto;
		        background-color: #ccc;
		        padding:50px 0; 
		        position: relative;
		        box-sizing: border-box;
		    }
		    .content {
		        position: relative;
		        margin:0 auto;
		        padding: 20px;
		        width:700px;
		        border-radius: 5px;
		        border:solid 1px #8bc6fc;
		        background-color: #cfecfc;
		        box-shadow:5px 10px 5px #888888;
		        box-sizing: border-box;
		    }
		    /* Set gray background color and 100% height */
		   
		    
		    /* Set black background color, white text and some padding */
		    
		    /* On small screens, set height to 'auto' for sidenav and grid */
		    @media screen and (max-width: 767px) {
		    .container-fluid{
		        padding:auto;
		        height: auto;
		    }
		    .content {height: auto;
		        width:auto;
		        padding:10px;
		        margin:10px;} 
		    }
  	</style>
	</head>
	<body>
		<div class="container-fluid d-flex justify-content-center align-items-center">
    		<div class="content">
  				<form name="form" method="post" target=""action="" enctype="multipart/form-data">
					<div class="">
	                    <h3 style="text-align: center; padding-bottom: 20px;">Registration</h3>
	                </div>
					<div class="form-group row">
	                    <label for="fullname" class="col-sm-4 col-form-label">Full Name*</label>
	                    <div class="col-sm-8">
	                    	<input type="text" class="form-control" name="fullname" id="fullname" data-label="" value="<?php if(isset($name)){echo $name;} ?>" required=""  placeholder="Enter your Full Name" >
	                    </div>
				    </div>
				    <div class="form-group row">
	                    <label for="mobile" class="col-sm-4 col-form-label">Mobile Phone*</label>
	                    <div class="col-sm-8">
	                    	<span><input type="text" class="form-control" name="phone" id="phone" data-label=""  pattern="^[7-9][0-9]{8}$"  maxlength="10" placeholder="Enter 10 digit mobile number"  value="<?php if(isset($phone)){echo $phone;} ?>" required=""  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"></span><span id="mobileErrorMessage" style="color:#FF0000;"></span></td>
	                    </div>
				    </div>
				    <div class="form-group row">
	                    <label for="email" class="col-sm-4 col-form-label">Primary Email*</label>
	                    <div class="col-sm-8">
	                    	<input type="email" name="email" id="email" data-label="" value="<?php if(isset($email)){echo $email;} ?>" required="" class="form-control" placeholder="Enter your Email" />
	                    </div>
				    </div>
				    <div class="form-group row">
	                    <label for="password" class="col-sm-4 col-form-label">Password*</label>
	                    <div class="col-sm-8">
	                    	<input type="text" class="form-control" name="password" id="password" data-label="" value="" required=""  placeholder="Enter Password" >
	                    </div>
				    </div>
				    <div class="form-group row">
	                    <label for="cpassword" class="col-sm-4 col-form-label">Conform Password*</label>
	                    <div class="col-sm-8">
	                    	<input type="text" class="form-control" name="cpassword" id="cpassword" data-label="" value="" required=""  placeholder="Enter Conform Password" >
	                    </div>
				    </div>
				    <div class="form-group row">
					<input name="register" type="submit" class="btn btn-success" value="Submit" style="display:block;">
					<a href="login.php" class="btn btn-secondary" style="margin-left:20px;">Cancle<a></a></div>
				</form>
			</div>
	 	</div>
	<script type="text/javascript">
	 	$( "#fullname" ).keypress(function(e) {
                var key = e.keyCode;
                //alert(key); 
                if(key >= 97 && key <= 122 || key >= 65 && key <= 90 || key == 32) {
                }else{
                	alert("Allow Only Alphabets");
                    e.preventDefault();
                }
     	})
		$(document).on("blur","#phone",function(){
			var mobile = $("#phone").val();
			if(mobile.length<10){
				$("#mobileErrorMessage").html("Please enter 10 digit mobile number.");
				$("#mobileErrorMessage").css("display","block");
			}else{
				var mobileReg = /^[7-9][0-9]{9}$/;
				if(mobileReg.test(mobile)){
					$("#mobileErrorMessage").html("");
					$("#mobileErrorMessage").css("display","none");
				}else{
					$("#mobileErrorMessage").html("Please enter Currect mobile number.");
					$("#mobileErrorMessage").css("display","block");
				}
			}
		});
		$(document).on("blur","#email",function(){
			var emailId = $("#email").val();
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if(emailReg.test(emailId)){
				$("#email").css("border","1px solid #000000");
			}else{
				$("#email").css("border","1px solid #FF0000");
			}
		});
		$(document).on("blur","#password",function(){
			var pass = $("#password").val();
			var reg = /_/;
		    var reg2 = /[a-zA-Z]/;
		    var reg3 = /[0-9]/;
			if(reg.test(pass) && reg2.test(pass) && reg3.test(pass)){
				$("#email").css("border","1px solid #000000");
			}else{
				alert("Password Must Alfanumaric And underscore");
			}
		});
    </script>
	</body>
</html>