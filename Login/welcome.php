<?php
   include('session.php');
   include('../login/Config.php');
   $_GET['interval'] = 10;
?>
<html>
<link href="welcome.css" type = "text/css" rel="stylesheet">
 <head>
<title>Welcome aboard!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="restaurants.css" type = "text/css" rel="stylesheet">
  <link rel="stylesheet" href="http://WeddingOfficial.uz/Bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="http://WeddingOfficial.uz/Bootstrap/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class = "container-fluid" style = "height:400px;
background: linear-gradient(76deg, #e66700, #f0a9e1, #5600e6);
background-size: 4000% 4000%;
-webkit-animation: BackgroundGradient 10s ease infinite;
text-align:center;">
<div class = "row content">
<div class = "col-sm-12">
      <h2 style = "font-family: Nautilus Pompilius; opacity: 0.5;">Welcome <?php echo $login_session; ?></h2> 
</div>
</div>
</div>

	<nav class="navbar navbar-inverse" style = "border-radius:0px;" >
  <div class="container-fluid">
  <div class = "row content">
  <div class = "col-sm-12">

    <div class="navbar-header">
    <a class="navbar-brand" href="#" style = "font-family: Nautilus Pompilius;">Admin Panel</a>
    </div>
	
    <ul class="nav navbar-nav" >
    <li class="active"><a data-toggle="tab" href="#stats">Statistics</a></li>
    <li><a data-toggle="tab" href="#register">Register</a></li>
    <li><a data-toggle="tab" href="#modify">Modify</a></li>
	<li><a data-toggle="tab" href="#comments">Comments</a></li>
    </ul>
	 <a href = "http://weddingofficial.uz/index.php"><button class="btn btn-info navbar-btn">Back</button></a>
	  <a href = "logout.php"><button class="btn btn-danger navbar-btn">Log-out</button></a>

</div>
</div>
</div>
</nav>
  <div class="container-fluid">
  <div class = "col-sm-12" >
    <div class="tab-content" >
	
	
    <div id="stats" class="tab-pane fade in active">
      <h3>Statistics</h3>
	  
     <table class = "table table-hover">

<tr>
    <td style="border: 1px solid silver;">Date</td>
    <td style="border: 1px solid silver;">Unique user</td>
    <td style="border: 1px solid silver;">Views</td>
</tr>
<?php
if ($_GET['interval'])
{
	$interval = $_GET['interval'];
    
    if (!is_numeric ($interval))
    {
        echo '<p><b>Wrong parameter!</b></p>';        
    }
    @mysqli_query ($db, 'set character_set_results = "utf8"');
    
	$res = mysqli_query($db, "SELECT * FROM `visits` ORDER BY `date` DESC LIMIT $interval");    

	while ($row = mysqli_fetch_assoc($res))
    {
		echo '<tr>
			     <td style="border: 1px solid silver;">' . $row['date'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['hosts'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['views'] . '</td>
			 </tr>';
	}
}
?>
</table>
    </div>
	
	
  <div id="register" class="tab-pane fade">
  <div class = "col-sm-2">
    <form action="registeradmin.php" method="POST">
  <div class="form-group">
    <label for="nickname">Enter your username:</label>
    <input type="text" class="form-control" name = "nickname">
  </div>
  <div class="form-group">
    <label for="password">Enter password:</label>
    <input type="password" class="form-control" name = "password">
  </div>
  <button type="submit" class="btn btn-default">Register</button>
</form>
</div>
 </div>
	
	
    <div id = "modify" class="tab-pane fade">
	<div class = "col-sm-2">
	<ul class="nav nav-stacked nav-pills">
    <li class="active"><a data-toggle="tab" href = "#submodify">Modify</a></li>
    <li><a data-toggle="tab" href="#subdelete">Delete</a></li>
    <li><a data-toggle="tab"href="#subadd">Add</a></li>
	</ul>
	</div>
    <div class = "col-sm-8">
    <div class="tab-content">
	
    <div id="submodify" class="tab-pane fade in active">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#ModRestaurants">Restaurants</a></li>
    <li><a data-toggle="tab" href="#ModWeddingSalons">Wedding Salons</a></li>
    <li><a data-toggle="tab" href="#ModBeautySalons">Beauty Salons</a></li>
    <li><a data-toggle="tab" href="#ModMusicians">Musicians</a></li>
    <li><a data-toggle="tab" href="#ModOrganizators">Organizators</a></li>
	<li><a data-toggle="tab" href="#ModVideoandphoto">Video/Photo Specialist</a></li>
	<li><a data-toggle="tab" href="#ModDecorations">Decorations</a></li>
	 <li><a data-toggle="tab" href="#ModAccessories">Accessories</a></li>
  </ul>
  <div class="tab-content" style = "padding:15px;">

    <div id="ModRestaurants" class="tab-pane fade in active">
	
	  <div class="dropdown" style = "padding:15px;">

  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose District <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
  <ul class = "nav nav-pills nav-stacked">
       <li class="active"><a data-toggle="tab" href="#Yunusabad">Yunusabad</a></li>
    <li><a data-toggle="tab" href="#Mirabad">Mirabad</a></li>
    <li><a data-toggle="tab" href="#Shayhantahur">Shayhantahur</a></li>
    </ul>
  </ul>
</div>

<div class="tab-content" >

<div id="Yunusabad" class="tab-pane fade in active">
<div class = "col-sm-4">  

<form action="restaurants/modifyRestaurantYunusabad.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsYunusabad");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Address">Address</option>
    <option value="Type">Type</option>
	<option value="Cuisine">Cuisine</option>
    <option value="WorkingHours">Working Hours</option>
    <option value="Details">Details</option>
	<option value="CuisineDetails">Cuisine Details</option>
    <option value="Bar">Bar</option>
	<option value="Service">Service</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>
<div class = "col-sm-4">
<form action="restaurants/modifyImagesRestaurantYunusabad.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsYunusabad");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
	<option value="5">5th img</option>
    <option value="6">6th img</option>
    <option value="7">7th img</option>
    <option value="8">8th img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
</div>

<div id="Mirabad" class="tab-pane fade">
<div class = "col-sm-4">  

<form action="restaurants/modifyImagesRestaurantMirabad.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsMirabad");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Address">Address</option>
    <option value="Type">Type</option>
	<option value="Cuisine">Cuisine</option>
    <option value="WorkingHours">Working Hours</option>
    <option value="Details">Details</option>
	<option value="CuisineDetails">Cuisine Details</option>
    <option value="Bar">Bar</option>
	<option value="Service">Service</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>
<div class = "col-sm-4">
<form action="Restaurants/modifyImagesRestaurantMirabad.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsMirabad");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
	<option value="5">5th img</option>
    <option value="6">6th img</option>
    <option value="7">7th img</option>
    <option value="8">8th img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
</div>

<div id="Shayhantahur" class="tab-pane fade">
<div class = "col-sm-4">  

<form action="restaurants/modifyRestaurantShaykhnatahur.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsShaykhantahur");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Address">Address</option>
    <option value="Type">Type</option>
	<option value="Cuisine">Cuisine</option>
    <option value="WorkingHours">Working Hours</option>
    <option value="Details">Details</option>
	<option value="CuisineDetails">Cuisine Details</option>
    <option value="Bar">Bar</option>
	<option value="Service">Service</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>
<div class = "col-sm-4">
<form action="Restaurants/modifyImagesRestaurantShaykhantahur.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsShaykhantahur");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
	<option value="5">5th img</option>
    <option value="6">6th img</option>
    <option value="7">7th img</option>
    <option value="8">8th img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
  </div>

</div>
</div>	
 
	<div id="ModWeddingSalons" class="tab-pane fade">


<div class = "col-sm-4">  

<form action="weddingsalons/modifyweddingsalons.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM WeddingSalons");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Address">Address</option>
    <option value="WorkingHours">Working Hours</option>
    <option value="Details">Details</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>
<div class = "col-sm-4">
<form action="restaurants/modifyImagesWeddingSalons.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM WeddingSalons");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>



</div>	

	<div id="ModBeautySalons" class="tab-pane fade">


<div class = "col-sm-4">  

<form action="weddingsalons/modifyweddingsalons.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM WeddingSalons");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Address">Address</option>
    <option value="WorkingHours">Working Hours</option>
    <option value="Details">Details</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>
<div class = "col-sm-4">
<form action="WeddingSalons/modifyImagesWeddingSalons.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM WeddingSalons");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>



</div>	
  
	<div id="ModMusicians" class="tab-pane fade">
	
	<div class = "col-sm-4">
  <form action="Musicians/modifyMusicians.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="MusicianType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Musicians");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Address">Address</option>
	<option value="Mobile">Mobile</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>

	<div class = "col-sm-4">
<form action="restaurants/modifyImagesMusicians.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="MusicianType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Musicians");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
    </div>
    
	<div id="ModOrganizators" class="tab-pane fade">

	
	<div class = "col-sm-4">
  <form action="Organizators/modifyOrganizators.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="OrganizatorsType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Organizators");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
	<option value="Address">Address</option>
    <option value="Info">Info</option>
	<option value="Mobile">Mobile</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
<div class = "col-sm-4">
 <form action="Organizators/modifyOrganizatorsImage.php" method = "POST">
 <div class="form-group">
  <select class="form-control" name="OrganizatorsType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Organizators");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
 <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
 </form>
</div>
  </div>
  
	<div id="ModVideoandphoto" class="tab-pane fade">

	<div class = "col-sm-4">
  <form action="Videoandphoto/modifyVideoandphoto.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="VideoandphotoType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Videoandphoto");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="About">About</option>
	<option value="Contact">Contact</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>

	<div class = "col-sm-4">
<form action="Videoandphoto/modifyImagesVideoandphoto.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="VideoandphotoType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Videoandphoto");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
    </div>
      
	<div id="ModDecorations" class="tab-pane fade">

	<div class = "col-sm-4">
  <form action="Decorations/modifyDecorations.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="DecorationsType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Decorations");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="About">About</option>
	<option value="Contact">Contact</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>

	<div class = "col-sm-4">
<form action="Decorations/modifyImagesDecorations.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="DecorationsType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Decorations");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
    </div>
         
	<div id="ModAccessories" class="tab-pane fade">

	<div class = "col-sm-4">
  <form action="Accessories/modifyAccessories.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="AccessoriesType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Accessories");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <div class="form-group">
    <select class="form-control" name="ValueType">
    <option value="Name">Name</option>
    <option value="Details">Details</option>
	<option value="Address">Address</option>
	<option value="WH">Working Hours</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="Value" class="form-control"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>

	<div class = "col-sm-4">
<form action="Accessories/modifyImagesAccessories.php" method = "POST">
	<div class="form-group">
  <select class="form-control" name="DecorationsType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Accessories");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
  </select>
  </div>
  <div class="form-group">
  <textarea class="form-control" name="ImgURL" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>
</div>
    </div>
    
  
  
  
  </div>
  </div>
  
    <div id="subdelete" class="tab-pane fade">
    <p>Not available</p>
    </div>
    
	<div id="subadd" class="tab-pane fade">
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#AddRestaurants">Restaurants</a></li>
    <li><a data-toggle="tab" href="#AddWeddingSalons">Wedding Salons</a></li>
    <li><a data-toggle="tab" href="#AddBeautySalons">Beauty Salons</a></li>
	<li><a data-toggle="tab" href="#AddMusicians">Musicians</a></li>
    <li><a data-toggle="tab" href="#AddOrganizators">Organizators</a></li>
	<li><a data-toggle="tab" href="#AddVideoandphoto">Add Video/Photo Specialist</a></li>
	<li><a data-toggle="tab" href="#AddDecorations">Add Decorations</a></li>
	<li><a data-toggle="tab" href="#AddAccessories">Add Accessories</a></li>
  </ul>
  <div class="tab-content" style = "padding:15px;">
  
	<div id = "AddRestaurants" class="tab-pane fade in active">
	<div class = "col-sm-2">
	 <div class="dropdown" style = "padding:15px;">

  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose District <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
  <ul class = "nav nav-pills nav-stacked">
       <li class="active"><a data-toggle="tab" href="#subyunusabad">Yunusabad</a></li>
    <li><a data-toggle="tab" href="#submirabad">Mirabad</a></li>
    <li><a data-toggle="tab" href="#subshaykhantahur">Shayhantahur</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "tab-content">

	<div id = "subyunusabad" class = "tab-pane fade in active">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddRestaurants">Add Restaurant</a></li>
    <li><a data-toggle="tab" href="#SubAddRestaurantsImages">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	
	<div class="tab-content">
	
	<div id="SubAddRestaurants" class="tab-pane fade in active">

<form action="Restaurants/AddRestaurantYunusabad.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="RestaurantName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="RestaurantAddress" class = "form-control">
  </div>
  Type
    <div class="form-group">
  <input type="text" name="RestaurantType" class = "form-control">
  </div>
  Cuisine
    <div class="form-group">
   <textarea name="RestaurantCuisine" class="form-control"></textarea><br>
  </div>
  Working Hours
    <div class="form-group">
   <input type="text" name="RestaurantWH" class = "form-control">
  </div>
  Details
   <div class="form-group">
  <textarea name="RestaurantDetails" class="form-control"></textarea><br>
  </div>
  Cuisine Details
  <div class="form-group">
  <textarea name="RestaurantCD" class="form-control"></textarea><br>
  </div>
  Bar
  <div class="form-group">
  <textarea name="RestaurantBar" class="form-control"></textarea><br>
  </div>
  Service
    <div class="form-group">
  <textarea name="RestaurantService" class="form-control"></textarea><br>
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddRestaurantsImages" class="tab-pane fade">

<form action="restaurants/addimagesRestaurantYunusabad.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsYunusabad");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Restaurant can contain only 8 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
	<option value="5">5th img</option>
    <option value="6">6th img</option>
    <option value="7">7th img</option>
    <option value="8">8th img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
</div>


	<div id = "submirabad" class = "tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddRestaurants1">Add Restaurant</a></li>
    <li><a data-toggle="tab" href="#SubAddRestaurantsImages1">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	
	<div class="tab-content">
	
	<div id="SubAddRestaurants1" class="tab-pane fade in active">

<form action="Restaurants/AddRestaurantMirabad.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="RestaurantName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="RestaurantAddress" class = "form-control">
  </div>
  Type
    <div class="form-group">
  <input type="text" name="RestaurantType" class = "form-control">
  </div>
  Cuisine
    <div class="form-group">
   <textarea name="RestaurantCuisine" class="form-control"></textarea><br>
  </div>
  Working Hours
    <div class="form-group">
   <input type="text" name="RestaurantWH" class = "form-control">
  </div>
  Details
   <div class="form-group">
  <textarea name="RestaurantDetails" class="form-control"></textarea><br>
  </div>
  Cuisine Details
  <div class="form-group">
  <textarea name="RestaurantCD" class="form-control"></textarea><br>
  </div>
  Bar
  <div class="form-group">
  <textarea name="RestaurantBar" class="form-control"></textarea><br>
  </div>
  Service
    <div class="form-group">
  <textarea name="RestaurantService" class="form-control"></textarea><br>
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddRestaurantsImages1" class="tab-pane fade">

<form action="restaurants/addimagesRestaurantMirabad.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsMirabad");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Restaurant can contain only 8 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
	<option value="5">5th img</option>
    <option value="6">6th img</option>
    <option value="7">7th img</option>
    <option value="8">8th img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
</div>


	<div id = "subshaykhantahur" class = "tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddRestaurants2">Add Restaurant</a></li>
    <li><a data-toggle="tab" href="#SubAddRestaurantsImages2">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	
	<div class="tab-content">
	
	<div id="SubAddRestaurants2" class="tab-pane fade in active">

<form action="Restaurants/AddRestaurantShaykhantahur.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="RestaurantName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="RestaurantAddress" class = "form-control">
  </div>
  Type
    <div class="form-group">
  <input type="text" name="RestaurantType" class = "form-control">
  </div>
  Cuisine
    <div class="form-group">
   <textarea name="RestaurantCuisine" class="form-control"></textarea><br>
  </div>
  Working Hours
    <div class="form-group">
   <input type="text" name="RestaurantWH" class = "form-control">
  </div>
  Details
   <div class="form-group">
  <textarea name="RestaurantDetails" class="form-control"></textarea><br>
  </div>
  Cuisine Details
  <div class="form-group">
  <textarea name="RestaurantCD" class="form-control"></textarea><br>
  </div>
  Bar
  <div class="form-group">
  <textarea name="RestaurantBar" class="form-control"></textarea><br>
  </div>
  Service
    <div class="form-group">
  <textarea name="RestaurantService" class="form-control"></textarea><br>
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddRestaurantsImages2" class="tab-pane fade">

<form action="restaurants/addimagesRestaurantShaykhantahur.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="RestaurantType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM RestaurantsShaykhantahur");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Restaurant can contain only 8 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
	<option value="5">5th img</option>
    <option value="6">6th img</option>
    <option value="7">7th img</option>
    <option value="8">8th img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
</div>

</div>
   </div>
 
	<div id = "AddMusicians" class="tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddMusicians">Add Musician</a></li>
    <li><a data-toggle="tab" href="#SubAddMusiciansImages">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	<div class="tab-content">
	
	<div id="SubAddMusicians" class="tab-pane fade in active">

<form action="Musicians/AddMusicians.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="MusiciansName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="MusiciansAddress" class = "form-control">
  </div>
  Mobile
    <div class="form-group">
  <input type="text" name="MusiciansMobile" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddMusiciansImages" class="tab-pane fade">

<form action="Musicians/AddImagesMusicians.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="MusicianType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Musicians");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Musician can contain only 4 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
   </div>
	
	 
	<div id = "AddWeddingSalons" class="tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddWeddingSalons">Add Salon</a></li>
    <li><a data-toggle="tab" href="#SubAddWeddingSalonsImage">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	<div class="tab-content">
	
	<div id="SubAddWeddingSalons" class="tab-pane fade in active">

<form action="WeddingSalons/AddWeddingSalons.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="WeddingSalonsName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="WeddingSalonsAddress" class = "form-control">
  </div>
  Details
    <div class="form-group">
  <input type="text" name="WeddingSalonsDetails" class = "form-control">
  </div>
  Working Hours
    <div class="form-group">
  <input type="text" name="WeddingSalonsWH" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddWeddingSalons" class="tab-pane fade">

<form action="WeddingSalons/AddImagesWeddingSalons.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="WeddingSalonsType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM WeddingSalons");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Salon can contain only 3 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
   </div>
	
	 
	<div id = "AddBeautySalons" class="tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddBeautySalons">Add Salon</a></li>
    <li><a data-toggle="tab" href="#SubAddBeautySalonsImages">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	<div class="tab-content">
	
	<div id="SubAddBeautySalons" class="tab-pane fade in active">

<form action="BeautySalons/AddBeautySalons.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="BeautySalonsName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="BeautySalonsAddress" class = "form-control">
  </div>
  Details
    <div class="form-group">
  <input type="text" name="BeautySalonsDetails" class = "form-control">
  </div>
  Working Hours
    <div class="form-group">
  <input type="text" name="BeautySalonsWH" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddBeautySalonsImages" class="tab-pane fade">

<form action="BeautySalons/AddImagesBeautysalons.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="MusicianType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM BeautySalons");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Salon can contain only 3 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
   </div>
	
	
	 
	<div id = "AddOrganizators" class="tab-pane fade">
	<div class = "col-sm-2">

	</div>
	<div class = "col-sm-8">

	<div id="SubAddOrganizators" class="tab-pane fade in active">

<form action="Organizators/AddOrganizators.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="OrganizatorsName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="OrganizatorsAddress" class = "form-control">
  </div>
  Info
    <div class="form-group">
  <input type="text" name="OrganizatorsInfo" class = "form-control">
  </div>
  Mobile
    <div class="form-group">
  <input type="text" name="OrganizatorsMobile" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

   </div>
   </div>
	
	<div id = "AddVideoandphoto" class="tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddVideoandphoto">Add Video/Photo Specialist</a></li>
    <li><a data-toggle="tab" href="#SubAddVideoandphotoImages">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	<div class="tab-content">
	
	<div id="SubAddVideoandphoto" class="tab-pane fade in active">

<form action="Videoandphoto/AddVideoandphoto.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="VideoandphotoName" class = "form-control">
  </div>
  About
    <div class="form-group">
   <input type="text" name="VideoandphotoAbout" class = "form-control">
  </div>
  Contact
    <div class="form-group">
  <input type="text" name="VideoandphotoContact" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddVideoandphotoImages" class="tab-pane fade">

<form action="Videoandphoto/AddImagesVideoandphoto.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="VideoandphotoType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Videoandphoto");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Musician can contain only 4 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
   </div>
	
		 
	<div id = "AddDecorations" class="tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddDecorations">Add Decorator</a></li>
    <li><a data-toggle="tab" href="#SubAddDecorationsImages">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	<div class="tab-content">
	
	<div id="SubAddDecorations" class="tab-pane fade in active">

<form action="Decorations/AddDecorations.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="DecorationsName" class = "form-control">
  </div>
  About
    <div class="form-group">
   <input type="text" name="DecorationsAbout" class = "form-control">
  </div>
  Contact
    <div class="form-group">
  <input type="text" name="DecorationsContact" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddDecorationsImages" class="tab-pane fade">

<form action="Decorations/AddImagesDecorations.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="VideoandphotoType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Decorations");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Decoration Specialist can contain only 4 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
    <option value="4">4th img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
   </div>
	
	  
	<div id = "AddAccessories" class="tab-pane fade">
	<div class = "col-sm-2">
	<div class="dropdown" style = "padding:15px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Option <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#SubAddAccessories">Add Musician</a></li>
    <li><a data-toggle="tab" href="#SubAddAccessoriesImages">Add Images</a></li>
    </ul>
  </ul>
</div>
	</div>
	<div class = "col-sm-8">
	<div class="tab-content">
	
	<div id="SubAddAccessories" class="tab-pane fade in active">

<form action="Accessories/AddAccessories.php" method = "POST">
  Name
  <div class="form-group">
  <input type="text" name="AccessoriesName" class = "form-control">
  </div>
  Address
    <div class="form-group">
   <input type="text" name="AccessoriesAddress" class = "form-control">
  </div>
   Details
  <div class="form-group">
  <input type="text" name="AccessoriesDetails" class = "form-control">
  </div>
  Working Hours
    <div class="form-group">
  <input type="text" name="AccessoriesWH" class = "form-control">
  </div>
     <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>

</div>

	<div id="SubAddAccessoriesImages" class="tab-pane fade">

<form action="Accessories/AddImagesAccessories.php" method = "POST">
<div class="form-group">
  <select class="form-control" name="MusicianType">
	<?php 
	$sql = mysqli_query($db,"SELECT Name FROM Accessories");
	$n = 1;
	while ($rowlist = mysqli_fetch_assoc($sql))
    {
		echo "<option value = " .$n++. ">" . $rowlist['Name'] ."</option>";
	}
	?>
	
  </select>
  </div>
  <label> One Accessories Shop can contain only 3 images at once </label>
  	<div class="form-group">
  <select class="form-control" name="ImgNumber">
    <option value="1">1st img</option>
    <option value="2">2nd img</option>
    <option value="3">3rd img</option>
  </select>
  </div>
   <div class="form-group">
  <textarea name="ImgURL" class="form-control" value = "ImgURL"></textarea><br>
  </div>
   <div class="form-group">
  <input type="submit" class="form-control">
  </div>
</form>


</div>
   
   </div>
   </div>
   </div>
	
	 
	
   </div>

	</div>
	
	</div>
    </div>
	  

	</div>
	
	
	<div id = "comments" class = "tab-pane fade">
     <table class = "table table-hover">

<tr>
    <td style="border: 1px solid silver;">Name</td>
    <td style="border: 1px solid silver;">@mail</td>
    <td style="border: 1px solid silver;">Comments</td>
</tr>
<?php 
$sql = "SELECT CommentID, name, email , comment FROM comments";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         
		 echo '<tr>
			     <td style="border: 1px solid silver;">' . $row["name"] . '</td>
			     <td style="border: 1px solid silver;">' . $row['email'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['comment'] . '</td>
			 </tr>';
     }
} else {
     echo "0 results";
}

mysqli_close($db);
?>
</table>
    </div>
	
	
	</div>
</div>

<style>
@-webkit-keyframes BackgroundGradient {
    0%{background-position:29% 0%}
    50%{background-position:72% 100%}
    100%{background-position:29% 0%}
}
</style>

</body>
</html>