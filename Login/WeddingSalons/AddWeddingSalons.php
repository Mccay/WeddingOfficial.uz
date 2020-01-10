<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $WName = $_POST['WeddingSalonsName'];
      $WAddress = $_POST['WeddingSalonsAddress'];
      $WDetails = $_POST['WeddingSalonsDetails'];
      $WWH = $_POST['WeddingSalonsWH'];
      
      $sql = "INSERT INTO WeddingSalons (Name,address,details,WorkingHours) VALUES ('$WName','$WAddress','$WDetails','$WWH')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a>