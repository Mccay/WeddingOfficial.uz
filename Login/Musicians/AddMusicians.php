<?php
   include('../../login/Config.php');
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      $MName = $_POST['MusiciansName'];
      $MMobile = $_POST['MusiciansMobile'];
      $MAddress = $_POST['MusiciansAddress'];
      
      $sql = "INSERT INTO Musicians (Name,address,mobile) VALUES ('$MName','$MAddress','$MMobile')";
	  
	  if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

}
   	mysqli_close($db);

?>
   <a href = "http://weddingofficial.uz/login/welcome.php"> Back </a>