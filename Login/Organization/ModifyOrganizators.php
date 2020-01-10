<?php
   include('../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $ModifiedRestaurantType = $_POST['OrganizatorsType'];
      $ModifiedValueType = $_POST['ValueType'];
	  $ModifiedValue = $_POST['Value']; 

	  $sql = "UPDATE Organizators SET $ModifiedValueType = '$ModifiedValue' WHERE OrganizatorsID = $ModifiedOrganizatorsType";

	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a> <br>