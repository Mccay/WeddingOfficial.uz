<?php
   include('../login/Config.php');
   include ('../inc/count.php');
   session_start(); 

for ($x = 1; $x <= 10; $x++) {
$sqlyunus[$x] = "SELECT * FROM RestaurantsYunusabad WHERE RestaurantID = $x";
$sqlmirab[$x] = "SELECT * FROM RestaurantsMirabad WHERE RestaurantID = $x";
$sqlshaykh[$x] = "SELECT * FROM RestaurantsShaykhantahur WHERE RestaurantID = $x";
for ($y = 1; $y <= 10; $y++) {
$sqlIMAGEyunus[$x][$y] = "SELECT Path FROM RestaurantsImagesYunusabad WHERE RestaurantID = $x AND ImageNumber = $y";
$sqlIMAGEmirab[$x][$y] = "SELECT Path FROM RestaurantsImagesMirabad WHERE RestaurantID = $x AND ImageNumber = $y";
$sqlIMAGEshaykh[$x][$y] = "SELECT Path FROM RestaurantsImagesShaykhantahur WHERE RestaurantID = $x AND ImageNumber = $y";
$resultIMAGEyunus[$x][$y] = mysqli_query($db, $sqlIMAGEyunus[$x][$y]);
$resultIMAGEmirab[$x][$y] = mysqli_query($db, $sqlIMAGEmirab[$x][$y]);
$resultIMAGEshaykh[$x][$y] = mysqli_query($db, $sqlIMAGEshaykh[$x][$y]);
$rowIMAGEyunus[$x][$y] = mysqli_fetch_assoc($resultIMAGEyunus[$x][$y]);
$rowIMAGEmirab[$x][$y] = mysqli_fetch_assoc($resultIMAGEmirab[$x][$y]);
$rowIMAGEshaykh[$x][$y] = mysqli_fetch_assoc($resultIMAGEshaykh[$x][$y]);
}
$resultyunus[$x] = mysqli_query($db, $sqlyunus[$x]);
$resultmirab[$x] = mysqli_query($db, $sqlmirab[$x]);
$resultshaykh[$x] = mysqli_query($db, $sqlshaykh[$x]);
$rowyunus[$x] = mysqli_fetch_assoc($resultyunus[$x]);
$rowmirab[$x] = mysqli_fetch_assoc($resultmirab[$x]);
$rowshaykh[$x] = mysqli_fetch_assoc($resultshaykh[$x]);
}




?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Restaurants</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="restaurants.css" type = "text/css" rel="stylesheet">
  <link rel="stylesheet" href="http://WeddingOfficial.uz/Bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="http://WeddingOfficial.uz/Bootstrap/js/bootstrap.min.js"></script>
      
	  <script>
      function myMap() {

		$("a[href='#yunus2']").on('shown.bs.tab', function () {
		  google.maps.event.trigger(map2, 'resize');
		});
		
		$("a[href='#yunus3']").on('shown.bs.tab', function () {
		  google.maps.event.trigger(map3, 'resize');
		});
		$("a[href='#yunus4']").on('shown.bs.tab', function () {
		  google.maps.event.trigger(map4, 'resize');
		});
		  
		  
        var uluru = {lat: 41.303972, lng:69.278699};

		var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 17,
          center: uluru
        });
		var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 17,
          center: uluru
        });
		var map3 = new google.maps.Map(document.getElementById('map3'), {
          zoom: 17,
          center: uluru
        });
		var map4 = new google.maps.Map(document.getElementById('map4'), {
          zoom: 17,
          center: uluru
        });

	
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
		var marker2 = new google.maps.Marker({
          position: uluru,
          map: map2
        });
		var marker3 = new google.maps.Marker({
          position: uluru,
          map: map3
        });
		
      }
	  map1.checkResize();
	  map2.checkResize();
	  map3.checkResize();
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcxQiyHHWitQ-pGzwOUWPIB8ofvKG7QKc&callback=myMap">
    </script>
</head>
<body style = "background-image: url('http://WeddingOfficial.uz/images/home2.jpg');background-repeat: no-repeat; background-size:1845px;" link = "white">

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
	Restaurants	
	</div>
	<div class = "col-sm-7">
<div class="dropdown">

  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose District <span class="caret"></span></button>
  <ul class="dropdown-menu" style = "padding:30px;">
  <ul class = "nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="tab" href="#yunusabad" style="nav-color:none;color:black;">Yunusabad district</a></li>
    <li><a data-toggle="tab" href="#mirabad" style="nav-color:none;color:black;">Mirabad district</a></li>
	<li><a data-toggle="tab" href="#shaykhantahur" style="nav-color:none; color:black;">Shaykhantahur district</a></li>
    </ul>
  </ul>
</div>
</div>
</div>
</div>

</div>

<div class = "tab-content">


<div id="shaykhantahur" class="tab-pane fade">

<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto;">
	<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
 <?php 
 
	$sqlpills = mysqli_query($db,"SELECT Name FROM RestaurantsShaykhantahur");
	$rowlistpills = mysqli_fetch_assoc($sqlpills);
	$n = 1;
	echo "<li class = 'active'><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #shaykh" . $n .">". $rowlistpills['Name'] ."</a></li>";
	while ($rowlistpills = mysqli_fetch_assoc($sqlpills))
    {
		$n++;
	echo "<li class><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #shaykh" . $n .">". $rowlistpills['Name'] ."</a></li>";
	}
	?>
	</ul>
    </div>

<div class="tab-content" >
<?php
		$y = 1;
		$sqlcount = mysqli_query($db,"SELECT RestaurantID FROM RestaurantsShaykhantahur");

		while ($rowcount = mysqli_fetch_assoc($sqlcount))
    {	
		if ($y == 1)
		{
		 echo "<div id= 'shaykh". $y ."' class='tab-pane fade in active'>";
		}
		else{
		 echo "<div id= 'shaykh". $y ."' class='tab-pane fade'>";
		}
         echo "<div class='col-sm-10 main' >
            <h3>" . $rowshaykh[$y]['Name'] . "<small style = 'font-family: Nautilus Pompilius'>" . $rowshaykh[$y]['Type'] . "</small></h3>
            <hr>
	<div class='media'>
    <div class='media-body'; style = 'padding-right:20px;'>
    <br>
	  <span class='label label-info'>Type:</span>". $rowshaykh[$y]["Type"] ." 
	  <br>
	  <span class='label label-info'>Cuisine:</span>" . $rowshaykh[$y]["Cuisine"] ."
	  <br>
	  <span class='label label-info'>Working Hours:</span>" . $rowshaykh[$y]["WorkingHours"] ."
	  <br>
	  <h3 style = 'font-family: Nautilus Pompilius;'>Details:</h3>" . $rowshaykh[$y]["Details"] ."
	
	</div>

              <div class='media-right media-bottom'>
              
              <div id='myCarousel" .$y ."' class='carousel slide' data-ride='carousel' style = 'width:800px; height: 400px'>

                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='1'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='2'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='3'></li>
                </ol>

                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                   <img src = '" . $rowIMAGEshaykh[$y][1]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEshaykh[$y][2]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEshaykh[$y][3]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEshaykh[$y][4]['Path'] ."'>
                  </div>
                </div>

                <a class='left carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
                
              </div>
              </div>
          </div> 
		  
		  <div class='media'>
    <div class='media-body'; style = 'padding-right:20px;'>
    <br>
	<h3 style = 'font-family: Nautilus Pompilius;'>Cuisine:</h3>" . $rowshaykh[$y]["CuisineDetails"] ."

	<h3 style = 'font-family: Nautilus Pompilius;'>Bar:</h3>" . $rowshaykh[$y]["Bar"] ."

	<h3 style = 'font-family: Nautilus Pompilius;'>Servive:</h3>" . $rowshaykh[$y]["Service"] ."
	
  </div>

              <div class='media-right media-bottom'>
              
              <div id='myCarousel" .$y ."' class='carousel slide' data-ride='carousel' style = 'width:800px; height: 400px'>

                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='1'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='2'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='3'></li>
                </ol>

                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                   <img src = '" . $rowIMAGEshaykh[$y][5]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEshaykh[$y][6]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEshaykh[$y][7]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEshaykh[$y][8]['Path'] ."'>
                  </div>
                </div>

                <a class='left carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
                
              </div>
              </div>
          </div> 

                         
          </div>
       </div>";
	   	   	$y++;
		}?>
</div>
</div>
</div>
	
	
</div>
	


<div id="yunusabad" class="tab-pane fade in active">

<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto; text-align:left;">
 
	 <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
   <?php 
	$sqlpills = mysqli_query($db,"SELECT Name FROM RestaurantsYunusabad");
	$rowlistpills = mysqli_fetch_assoc($sqlpills);
	$n = 1;
	echo "<li class = 'active'><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #yunus" . $n .">". $rowlistpills['Name'] ."</a></li>";
	while ($rowlistpills = mysqli_fetch_assoc($sqlpills))
    {
		$n++;
	echo "<li class><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #yunus" . $n .">". $rowlistpills['Name'] ."</a></li>";
	}
	?>
  </ul>

    </div>

<div class="tab-content">

  
  <?php
		$y = 1;
		$sqlcount = mysqli_query($db,"SELECT RestaurantID FROM RestaurantsYunusabad");

		while ($rowcount = mysqli_fetch_assoc($sqlcount))
    {
		if ($y == 1)
		{
		echo "<div id= 'yunus". $y ."' class='tab-pane fade in active'>";
		}
		else{
		 echo "<div id= 'yunus". $y ."' class='tab-pane fade'>";
		}
         echo "<div class='col-sm-10 main' >
            <h3>" . $rowyunus[$y]['Name'] . "<small style = 'font-family: Nautilus Pompilius'> " . $rowyunus[$y]['Type'] . "</small></h3>
            <hr>
	<div class='media'>
    <div class='media-body'; style = 'padding-right:20px;'>
    <br>
	  <span class='label label-info'>Type:</span>". $rowyunus[$y]["Type"] ." 
	  <br>
	  <span class='label label-info'>Cuisine:</span>" . $rowyunus[$y]["Cuisine"] ."
	  <br>
	  <span class='label label-info'>Working Hours:</span>" . $rowyunus[$y]["WorkingHours"] ."
	  <br>
	  <h3 style = 'font-family: Nautilus Pompilius;'>Details:</h3>" . $rowyunus[$y]["Details"] ."
	
	</div>
			  
              <div class='media-right media-bottom'>
              				<h4 class='media-heading' style = 'font-family: Nautilus Pompilius;'>Interiour</h4>
              <div id='myCarousel" .$y ."' class='carousel slide' data-ride='carousel' style = 'width:800px; height: 400px'>

                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='1'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='2'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='3'></li>
                </ol>

                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                   <img src = '" . $rowIMAGEyunus[$y][1]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEyunus[$y][2]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEyunus[$y][3]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEyunus[$y][4]['Path'] ."'>
                  </div>
                </div>

                <a class='left carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
                
              </div>
              </div>
          </div> 
		  
		  <div class='media'>
    <div class='media-body'; style = 'padding-right:20px;'>
    <br>
	<h3 style = 'font-family: Nautilus Pompilius;'>Cuisine:</h3>" . $rowyunus[$y]["CuisineDetails"] ."

	<h3 style = 'font-family: Nautilus Pompilius;'>Bar:</h3>" . $rowyunus[$y]["Bar"] ."

	<h3 style = 'font-family: Nautilus Pompilius;'>Servive:</h3>" . $rowyunus[$y]["Service"] ."
	
  </div>

              <div class='media-right media-bottom'>
              <h4 class='media-heading' style = 'font-family: Nautilus Pompilius;'>Dishes</h4>
              <div id='myCarousel" .$y ."' class='carousel slide' data-ride='carousel' style = 'width:800px; height: 400px'>

                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='1'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='2'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='3'></li>
                </ol>

                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                   <img src = '" . $rowIMAGEyunus[$y][5]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEyunus[$y][6]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEyunus[$y][7]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEyunus[$y][8]['Path'] ."'>
                  </div>
                </div>

                <a class='left carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
                
              </div>
              </div>
          </div> 
		  <hr>
          <div id='map". $y ."' style = 'box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></div>        	
          </div>
       </div>";
	   	   	$y++;
		}?>
</div>
</div>
</div>
</div>


<div id="mirabad" class="tab-pane fade">

<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto;">
	<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
 <?php 
 
	$sqlpills = mysqli_query($db,"SELECT Name FROM RestaurantsMirabad");
	$rowlistpills = mysqli_fetch_assoc($sqlpills);
	$n = 1;
	echo "<li class = 'active'><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #mirab" . $n .">". $rowlistpills['Name'] ."</a></li>";
	while ($rowlistpills = mysqli_fetch_assoc($sqlpills))
    {
		$n++;
	echo "<li class><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #mirab" . $n .">". $rowlistpills['Name'] ."</a></li>";
	}
	?>
	</ul>
    </div>

<div class="tab-content" >
<?php
		$y = 1;
		$sqlcount = mysqli_query($db,"SELECT RestaurantID FROM RestaurantsMirabad");

		while ($rowcount = mysqli_fetch_assoc($sqlcount))
    {
		if ($y == 1)
		{
		 echo "<div id= 'mirab". $y ."' class='tab-pane fade in active'>";
		}
		else{
		 echo "<div id= 'mirab". $y ."' class='tab-pane fade'>";
		}
         echo "<div class='col-sm-10 main' >
            <h3>" . $rowmirab[$y]['Name'] . "<small style = 'font-family: Nautilus Pompilius'> " . $rowmirab[$y]['Type'] . "</small></h3>
            <hr>
	<div class='media'>
    <div class='media-body'; style = 'padding-right:20px;'>
    <br>
	  <span class='label label-info'>Type:</span>". $rowmirab[$y]["Type"] ." 
	  <br>
	  <span class='label label-info'>Cuisine:</span>" . $rowmirab[$y]["Cuisine"] ."
	  <br>
	  <span class='label label-info'>Working Hours:</span>" . $rowmirab[$y]["WorkingHours"] ."
	  <br>
	  <h3 style = 'font-family: Nautilus Pompilius;'>Details:</h3>" . $rowmirab[$y]["Details"] ."
	
	</div>

              <div class='media-right media-bottom'>
              
              <div id='myCarousel" .$y ."' class='carousel slide' data-ride='carousel' style = 'width:800px; height: 400px'>

                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='1'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='2'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='3'></li>
                </ol>

                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                   <img src = '" . $rowIMAGEmirab[$y][1]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEmirab[$y][2]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEmirab[$y][3]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEmirab[$y][4]['Path'] ."'>
                  </div>
                </div>

                <a class='left carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
                
              </div>
              </div>
          </div> 
		  
		  <div class='media'>
    <div class='media-body'; style = 'padding-right:20px;'>
    <br>
	<h3 style = 'font-family: Nautilus Pompilius;'>Cuisine:</h3>" . $rowmirab[$y]["CuisineDetails"] ."

	<h3 style = 'font-family: Nautilus Pompilius;'>Bar:</h3>" . $rowmirab[$y]["Bar"] ."

	<h3 style = 'font-family: Nautilus Pompilius;'>Servive:</h3>" . $rowmirab[$y]["Service"] ."
	
  </div>

              <div class='media-right media-bottom'>
              
              <div id='myCarousel" .$y ."' class='carousel slide' data-ride='carousel' style = 'width:800px; height: 400px'>

                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='1'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='2'></li>
                  <li data-target='#myCarousel" .$y ."'  data-slide-to='3'></li>
                </ol>

                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                   <img src = '" . $rowIMAGEmirab[$y][5]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEmirab[$y][6]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEmirab[$y][7]['Path'] ."'>
                  </div>

                  <div class='item'>
                     <img src='" . $rowIMAGEmirab[$y][8]['Path'] ."'>
                  </div>
                </div>

                <a class='left carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel" .$y ."' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
                
              </div>
              </div>
          </div> 
		<br><br>
          <div id='map". $y ."' style = 'box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></div>        	        
          </div>
       </div>";
	   	   	$y++;
		}?>
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
  <a class="up-arrow" href="http://weddingofficial.uz/restaurants/restaurants.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Wedding Official web-site</p> 
</footer>
</html>


