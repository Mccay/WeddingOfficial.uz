<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $ModifiedAccessoriesType = $_POST['AccessoriesType'];
	  $ModifiedImageNumber = $_POST['ImgNumber']; 
	  $ModifiedImgUrl = $_POST['ImgURL']; 

	  $sql = "UPDATE AccessoriesImages SET Path = '$ModifiedImgUrl' WHERE ImageNumber = '$ModifiedImageNumber' AND MusicianID = '$ModifiedAccessoriesType'";

	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a> <br>