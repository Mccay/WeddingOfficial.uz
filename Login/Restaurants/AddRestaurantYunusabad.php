<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $RName = $_POST['RestaurantName'];
      $RAddress = $_POST['RestaurantAddress'];
      $RType = $_POST['RestaurantType'];
      $RCuisine = $_POST['RestaurantCuisine'];
      $RWH = $_POST['RestaurantWH'];
      $RDetails = $_POST['RestaurantDetails'];
      $RCuisineDetails = $_POST['RestaurantCD'];
      $RBar = $_POST['RestaurantBar'];
	  $RService = $_POST['RestaurantService'];
      
      $sql = "INSERT INTO RestaurantsYunusabad (Name,address,type,cuisine,workinghours,details,cuisinedetails,bar,service) VALUES ('$RName','$RAddress','$RType','$RCuisine','$RWH','$RDetails','$RCuisineDetails','$RBar','$RService')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a> <br>