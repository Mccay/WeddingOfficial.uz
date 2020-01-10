<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $DName = $_POST['DecorationsName'];
      $DAbout = $_POST['DecorationsAbout'];
      $DContact = $_POST['DecorationsContact'];
      
      $sql = "INSERT INTO Decorations (Name,About,Contact) VALUES ('$DName','$DAbout','$DContact')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a>