<?php
   include("config.php");
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $ContactName = $_POST['name'];
	  $ContactEmail = $_POST['email']; 
	  $ContactComment = $_POST['message']; 
      
      $sql = "INSERT INTO Comments (name,email,comment) VALUES ('$ContactName','$ContactEmail','$ContactComment')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
<html>
<link href="Insertcss.css" type = "text/css" rel="stylesheet">
<body>
<a href = "http://weddingofficial.uz/index.php"> Back to page </a>
<div class = "photo">
<img src ="http://test.ru/Data/thank-you-png-icon-22.png" width = "390" height = "100">
</div>
<div class = "photo1">
<img src ="http://test.ru/Data/943d6fbc4f24ad35e0fdea8c9988cf4b.png">

</div>
<title>Thank you!</title>
</body>
</html>