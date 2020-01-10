<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = $_POST['usernameloginpage'];
      $mypassword = $_POST['passwordloginpage']; 
      
      $sql = "SELECT id FROM `Admin` WHERE nickname = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

		
      if($count == 1) {
		  session_register;
         $_SESSION['login_user'] = $myusername;
         
         header("location:welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
       <link rel="stylesheet" href="http://WeddingOfficial.uz/Bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="http://WeddingOfficial.uz/Bootstrap/js/bootstrap.min.js"></script>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;	
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 2px;
         }
      </style>
      <style>
@-webkit-keyframes BackgroundGradient {
    0%{background-position:29% 0%}
    50%{background-position:72% 100%}
    100%{background-position:29% 0%}
}
</style>
   </head>
   
   <body style = "height:400px;
background: linear-gradient(76deg, #e66700, #f0a9e1, #5600e6);
background-size: 4000% 4000%;
-webkit-animation: BackgroundGradient 5s ease infinite;
text-align:center;">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; position:relative; top:300px; background-color:white;" align = "left">
            <div style = "background-color:#444333; color:#FFFFFF; padding:5px;"><b>Login</b></div>
				
            <div style = "margin:20px">
               
               <form action = "" method = "post">
			   <div class="form-group">
                  <label>Username  :</label><input type = "text" name = "usernameloginpage" class = "box form-control"/><br /><br />
				</div>
				<div class="form-group">
                  <label>Password  :</label><input type = "password" name = "passwordloginpage" class = "box form-control" /><br/><br />
				  </div>
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <a href = "http://weddingofficial.uz/index.php"> Back to page </a>
               <div style = "font-size:11px; color:#cc2200; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>