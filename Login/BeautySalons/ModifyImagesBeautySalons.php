<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $ModifiedBeautySalonsType = $_POST['BeautySalonsType'];
	  $ModifiedImageNumber = $_POST['ImgNumber']; 
	  $ModifiedImgUrl = $_POST['ImgURL']; 

	  $sql = "UPDATE BeautySalonsImages SET Path = '$ModifiedImgUrl' WHERE ImageNumber = '$ModifiedImageNumber' AND SalonID = '$ModifiedBeautySalonsType'";

	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a> <br>