<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $OName = $_POST['OrganizatorsName'];
      $OInfo = $_POST['OrganizatorsDistrict'];
      $OAddress = $_POST['OrganizatorsAddress'];
      $OMobile = $_POST['RestaurantType'];
      
      
      $sql = "INSERT INTO Organizators (Name,address,info,mobile) VALUES ('$OName','$OAddress','$OInfo','$OMobile')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a> <br>