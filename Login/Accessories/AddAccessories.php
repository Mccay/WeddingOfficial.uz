<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $AName = $_POST['AccessoriesName'];
      $ADetails = $_POST['AccessoriesDetails'];
      $AAddress = $_POST['AccessoriesAddress'];
	  $AWH = $_POST['AccessoriesWH'];
      
      $sql = "INSERT INTO Accessories (Name,details,address,workinghours) VALUES ('$AName','$ADetails','$AAddress','$AWH')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a>