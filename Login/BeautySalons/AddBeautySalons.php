<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $BName = $_POST['BeautySalonsName'];
      $BAddress = $_POST['BeautySalonsAddress'];
      $BDetails = $_POST['BeautySalonsDetails'];
      $BWH = $_POST['BeautySalonsWH'];
      
      $sql = "INSERT INTO BeautySalons (Name,address,details,WorkingHours) VALUES ('$BName','$BAddress','$BDetails','$BWH')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://Weddingofficial.uz/login/welcome.php"> Back </a>