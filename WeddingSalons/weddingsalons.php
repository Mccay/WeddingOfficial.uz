<?php
   include('../login/Config.php');
   include ('../inc/count.php');
   session_start(); 

for ($x = 1; $x <= 10; $x++) {
$sql[$x] = "SELECT * FROM weddingsalons WHERE SalonID = $x";
for ($y = 1; $y <= 10; $y++) {
$sqlIMAGE[$x][$y] = "SELECT Path FROM WeddingSalonsImages WHERE SalonID = $x AND ImageNumber = $y";
$resultIMAGE[$x][$y] = mysqli_query($db, $sqlIMAGE[$x][$y]);
$rowIMAGE[$x][$y] = mysqli_fetch_assoc($resultIMAGE[$x][$y]);
}
$result[$x] = mysqli_query($db, $sql[$x]);
$row[$x] = mysqli_fetch_assoc($result[$x]);
}




?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Wedding salons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="weddingsalons.css" type = "text/css" rel="stylesheet">
  <link rel="stylesheet" href="http://WeddingOfficial.uz/Bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="http://WeddingOfficial.uz/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body style = "background-image: url('http://WeddingOfficial.uz/images/home2.jpg');background-repeat: no-repeat; background-size:1845px 	;">

<div class="container-fluid" style = "font-family: Nautilus Pompilius; color: white;">
  <div class="row">
  <div class="col-sm-11"></div>
  <?php 

if(!isset($_SESSION['login_user'])){ ?>

<a href = "http://WeddingOfficial.uz/login/login.php">
<div class="col-sm-1 LogButtons" style = "transition: ease-out 0.5s;border: solid 1px black; border-bottom: solid black 1px;height: 40px;">Login</div>
</a>

<?php }
else{?>

<a href = "http://WeddingOfficial.uz/login/welcome.php">
<div class="col-sm-1 LogButtons" style = "transition: ease-out 0.5s;border: solid 1px black; border-bottom: solid black 1px;height: 40px;">Back to menu</div>
</a>

<?php }?>
  
</div>
  <div class = "row">
  <a href = "http://weddingofficial.uz/index.php"><div class="col-sm-12" style="background-color:transparent; font-size: 50px; height:270px;	text-shadow: 1px 3px 0.5px black"> Wedding.uz
  </div></a>
  </div>

<div class = "row"  style="background-color:transparent; 	text-align: center;	line-height: 130px;text-shadow: 1px 3px 0.5px black;">
  <a href = "http://WeddingOfficial.uz/organization/organization.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s; border-left: solid 1px black; height: 142px; border-top: solid black 1px;">Organization</div></a>
  <a href = "http://WeddingOfficial.uz/restaurants/restaurants.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s; border-left: solid 1px black; height: 142px; border-top: solid black 1px;">Restaurants</div></a>
  <a href = "http://WeddingOfficial.uz/Videoandphoto/Videoandphoto.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s; border-left: solid 1px black; height: 142px; border-top: solid black 1px;">Video/Photo Montage</div></a>
  <a href = "http://WeddingOfficial.uz/complimentary/complimentary.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s; border-left: solid 1px black; height: 142px; border-top: solid black 1px;">Complimentary</div></a>
  <a href = "http://WeddingOfficial.uz/WeddingSalons/WeddingSalons.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s; border-left: solid 1px black; height: 142px; border-top: solid black 1px;">Wedding Salons</div></a>
  <a href = "http://WeddingOfficial.uz/Toasters/ToastMasters.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s; border-left: solid 1px black; height: 142px; border-top: solid black 1px;">Toast Master</div></a>
  </div>

<div class = "row"  style="background-color:transparent; text-align: center; line-height: 130px; font-size: 30px;text-shadow: 1px 3px 0.5px black">
  <a href = "http://WeddingOfficial.uz/Leading/leading.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s;border-left: solid 1px black; height: 142px; border-bottom: solid black 1px; border-top: solid black 1px;">Leading</div></a>
  <a href = "http://WeddingOfficial.uz/Decoration/decorations.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s;border-left: solid 1px black; height: 142px; border-bottom: solid black 1px; border-top: solid black 1px;">Decoration</div></a>
  <a href = "http://WeddingOfficial.uz/Balletshow/balletshow.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s;border-left: solid 1px black; height: 142px; border-bottom: solid black 1px; border-top: solid black 1px;">Ballet Show</div></a>
  <a href = "http://WeddingOfficial.uz/Accessories/accessories.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s;border-left: solid 1px black; height: 142px; border-bottom: solid black 1px; border-top: solid black 1px;">Accessories</div></a>
  <a href = "http://WeddingOfficial.uz/Musicians/musicians.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s;border-left: solid 1px black; height: 142px; border-bottom: solid black 1px; border-top: solid black 1px;">Musicians</div></a>
  <a href = "http://WeddingOfficial.uz/BeautySalons/beautysalons.php">
  <div class="col-sm-2 headers" style = "transition: ease-out 0.5s;border-left: solid 1px black; height: 142px; border-bottom: solid black 1px; border-top: solid black 1px;">Beauty Salons</div></a>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
  
    <div class="col-sm-12" style="border-bottom: solid 1px #f1f1f1; height: 80px; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); z-index:1; padding: 20px;">
	<div class = "col-sm-5" style = "font-family: Nautilus Pompilius; font-size:25px;">
	Wedding salons	
	</div>
	<div class = "col-sm-7">
<div class="dropdown">
<small>Choose district</small>
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose District <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:7px;">
  <ul class = "nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="tab" href="#yunusabad">Yunusabad district</a></li>
    <li><a data-toggle="tab" href="#mirabad">Mirabad district</a></li>
 <li><a data-toggle="tab" href="#shaykhatahur">Shaykhantahur district    </a></li>
 
    </ul>
  </ul>
</div>
</div>
</div>
</div>
</div>
<div class = "tab-content">

<div id="yunusabad" class="tab-pane fade in active">

<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto; text-align:left;">
  <ul class="nav nav-pills nav-stacked primary" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
    <li class="active" ><a data-toggle="pill" href="#lasposa" style="nav-color:none;color:black;" >LA SPOSA    </a></li>
	<hr>
    <li><a data-toggle="pill" href="#peramor" style="nav-color:none;color:black;" >Per Amor   </a></li>
	<hr>
    <li><a data-toggle="pill" href="#milano" style="nav-color:none;color:black;" >Milano         </a></li>
	
  </ul>
    </div>

<div class="tab-content" >
<div id="lasposa" class="tab-pane fade in active">
<div class="col-sm-10 main" >
<h3 >
<?php
echo $row[1]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
	  <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[1]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3><?php echo $row[1]["Details"];?>
	  
	
  </div>

  <div class="media-right media-bottom">
  
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel" style = "width:700px; height: 400px; ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[1][1]["Path"]; ?>" alt="dress one">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[1][2]["Path"]; ?>" alt="dress two">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[1][3]["Path"]; ?>" alt="dress three">
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
  </div>
</div>



<div class="media">

  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  <div class="media-right media-middle">
  
  
  </div>
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[1]["Address"];?>
<p> </p>
   
   <div id="map" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    <script>
      function myMap() {
		 
		$("a[href='#menu1']").on('shown.bs.tab', function () {
		  google.maps.event.trigger(map1, 'resize');
		});
		 $("a[href='#menu2']").on('shown.bs.tab', function () {
		  google.maps.event.trigger(map2, 'resize');
		});
		 
		
        var uluru = {lat: 41.297929, lng:69.280555};
		var uluru1 = {lat: 41.291699, lng:69.281435};
		var uluru2 = {lat:  41.267753, lng:69.234018};       
       
		
		

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
		var map1 = new google.maps.Map(document.getElementById('map1'), {
          zoom: 18,
          center: uluru1
        });
		var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 18,
          center: uluru2
        });
	
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
		 var marker1 = new google.maps.Marker({
          position: uluru1,
          map: map1
        });
			 var marker2 = new google.maps.Marker({
          position: uluru2,
          map: map2
        });
		

		
      }
	  map1.checkResize();
	  map2.checkResize();
	  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcxQiyHHWitQ-pGzwOUWPIB8ofvKG7QKc&callback=myMap">
    </script>
    </div>
  </div>

    <div id="peramor" class="tab-pane fade">
     <div class="col-sm-10 main" >
<h3 >
<?php
echo $row[2]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[2]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[2]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[2][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[2][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[2][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[2]["Address"];?>
<p> </p>
   <div id="map1" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
  </div>
    <div id="milano" class="tab-pane fade">
     <div class="col-sm-10 main" >
<h3 >
<?php
echo $row[3]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[3]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[3]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[3][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[3][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[3][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[3]["Address"];?>
<p> </p>
   <div id="map2" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
    </div>
	<!-- MENU3-->
   
  </div>
</div>
</div>


</div>
<div id="mirabad" class="tab-pane fade">


<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto;">
  <ul class="nav nav-pills nav-stacked primary" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
    <li class="active"><a data-toggle="pill" href="#kamilla" style="nav-color:none;color:black;">Miss Kamilla</a></li>
	<hr>
    <li><a data-toggle="pill" href="#teamo" style="nav-color:none;color:black;">Teamo</a></li>
	<hr>
    <li><a data-toggle="pill" href="#weddhouse"style="nav-color:none;color:black;">Wedd House</a></li>
   
  </ul>
    </div>

<div class="tab-content" >
<div id="kamilla" class="tab-pane fade in active">
<!--Miss Kamilla-->

     <div class="col-sm-10 main" >
<h3 >
<?php
echo $row[4]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[4]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[4]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[4][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[4][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[4][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[4]["Address"];?>
<p> </p>
   <div id="map" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
	
</div>
<!-- Teamo-->
    <div id="teamo" class="tab-pane fade">
	
	<div class="col-sm-10 main" >
<h3 >
<?php
echo $row[5]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[5]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[5]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[5][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[5][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[5][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>

<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[5]["Address"];?>
<p> </p>
   <div id="map1" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
     
    </div>
    
    <div id="weddhouse" class="tab-pane fade">
	<div class="col-sm-10 main" >
<h3 >
<?php
echo $row[6]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[6]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[6]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[6][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[6][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[6][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>

<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[6]["Address"];?>
<p> </p>
   <div id="map1" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
     
    </div>  
    </div>
    
	</div>
  </div>
</div>
<div id="shaykhatahur" class="tab-pane fade">

<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto; text-align:left;">
  <ul class="nav nav-pills nav-stacked primary" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
    <li class="active" ><a data-toggle="pill" href="#rose" style="nav-color:none;color:black;" >De La Rose   </a></li>
	<hr>
    <li><a data-toggle="pill" href="#amore" style="nav-color:none;color:black;" >Amore Mio   </a></li>
	<hr>
    <li><a data-toggle="pill" href="#sapfir" style="nav-color:none;color:black;" >Sapfir         </a></li>
	
  </ul>
    </div>

<div class="tab-content" >
<div id="rose" class="tab-pane fade in active">
<div class="col-sm-10 main" >
<h3 >
<?php
echo $row[7]["Name"];
?>
<small>  salon </small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
	  <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[7]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3><?php echo $row[7]["Details"];?>
	  
	
  </div>

  <div class="media-right media-bottom">
  
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel" style = "width:700px; height: 400px; ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[7][1]["Path"]; ?>" alt="dress one">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[7][2]["Path"]; ?>" alt="dress two">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[7][3]["Path"]; ?>" alt="dress three">
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
  </div>
</div>



<div class="media">

  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  <div class="media-right media-middle">
  
  
  </div>
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[7]["Address"];?>
<p> </p>
   
   <div id="map" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>

    </div>
  </div>

    <div id="amore" class="tab-pane fade">
     <div class="col-sm-10 main" >
<h3 >
<?php
echo $row[8]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[8]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[8]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[8][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[8][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[8][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[8]["Address"];?>
<p> </p>
   <div id="map1" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
  </div>
    <div id="sapfir" class="tab-pane fade">
     <div class="col-sm-10 main" >
<h3 >
<?php
echo $row[9]["Name"];
?>
<small>  salon</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" >Information</h3>
   <br>
	 
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[9]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;"></h3> <?php echo $row[9]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">NEW COLLECTION</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel"  style = "width:700px; height: 400px;  ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $rowIMAGE[9][1]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo $rowIMAGE[9][2]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
       <img src="<?php echo $rowIMAGE[9][3]["Path"]; ?>" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
</div>
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">

  
 </div>
  
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[10]["Address"];?>
<p> </p>
   <div id="map1" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
    </div>
    </div>
   
  </div>
</div>
</div>


</div>







</div>
</div>
	
<style>

.nav-pills > li.active > a{
color: black;
background-color: #f1f1f1;
border-radius: 0px;
width:110%;
}
.nav-pills > li.active > a:focus {
color: black;
background-color: #f1f1f1;
border-radius: 0px;

}

.nav-pills > li.active > a:hover {
background-color: #f1f1f1
color:black;

}
.nav-pills > li > a:hover {
background-color: white;
color:black;
border-radius: 0px;

}
a {
color:white;
text-decoration:none
}
a:active {
color:white;
text-decoration:none
}
a:visited {
color:white;
text-decoration:none
}
a:hover {
color:white;
text-decoration: underline
}
 
</style>
	

<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Wedding Official web-site</p> 
</footer>
	
</body>
</html>
