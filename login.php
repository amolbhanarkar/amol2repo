<?php 
  include_once 'config.php';
  if(isset($_POST["btnlogin"]) && ($_POST["btnlogin"]=="Login"))
    {
      $error = '';
      $email= $_POST["email"] ;
      $pass= $_POST["password"] ;
        $pass = md5($pass);
        $sqlSU = "SELECT * FROM tbl_user WHERE email='$email' and password='$pass' LIMIT 1";
        $resSU = $adb->prepare($sqlSU);
        $resSU->execute();
        $detCTD = array();
        if($resSU->rowCount()){
          header("location:welcome.php");
        }else{
          $error = "User Not Found Or Wrong Email/ Password";
        }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    body{
        margin: 0;padding: 0;
        width: 100%;
    }
    .container-fluid{
        padding:50px 0;
        /*height: 100vh;
        */
        min-height: 100vh;
        height:auto;
        background-color: #ccc;
        box-sizing: border-box;
    }
    .content {
        position: relative;
        margin:0 auto;
        padding: 20px;
        width:400px;
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
<div class="container-fluid">
  <div class="d-flex justify-content-center align-content-center"  >
        <div class="content">
            <form name="login" method="post" target=""action="" enctype="multipart/form-data">
              <div class="text-center mb-3">
                <p>Sign in</p>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <?php if(isset($error) && $error != ''){echo '<span name="mobileErrorMessage" style="color:#FF0000;">'.$error.'</span>'; }?>
              </div>
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="loginName">Email</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
              </div>

              <!-- 2 column grid layout -->
              <!-- Submit button -->
              <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
               -->
               <input name="btnlogin" id="btnlogin" type="submit" class="btn btn-primary btn-block mb-4" value="Login" style="display:block;">
          
              <!-- Register buttons -->
              <div class="text-center">
                <p>Not a member? <a href="register.php">Register</a></p>
              </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).on("blur","#email",function(){
      var emailId = $("#email").val();
      if(emailReg.test(emailId)){
        $("#email").css("border","1px solid #000000");
      }else{
        $("#email").css("border","1px solid #FF0000");
      }
    });
    $( "#btnlogin" ).click(function(e) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var email = $( "#email" ).val();
      var pass = $( "#password" ).val();
      if(email == ''){
        alert("please Enter Email");
        return false;
      }else if(pass == ''){
        alert("please Enter Password");
        return false;
      }else if(!emailReg.test(email)){
          alert("please Check Email Id");
        return false;
      }
    });
</script>
</body>
</html>