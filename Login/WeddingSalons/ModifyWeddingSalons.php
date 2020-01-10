<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $ModifiedWeddingSalonsType = $_POST['WeddingSalonsType'];
      $ModifiedValueType = $_POST['ValueType'];
	  $ModifiedValue = $_POST['Value']; 

	  $sql = "UPDATE WeddingSalons SET $ModifiedValueType = '$ModifiedValue' WHERE SalonID = '$ModifiedWeddingSalonsType'";

	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a> <br>