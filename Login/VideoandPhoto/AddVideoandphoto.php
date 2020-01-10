<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $VName = $_POST['VideoandphotoName'];
      $VAbout = $_POST['VideoandphotoAbout'];
      $VContact = $_POST['VideoandphotoContact'];
      
      $sql = "INSERT INTO Videoandphoto (Name,About,Contact) VALUES ('$VName','$VAbout','$VContact')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a>