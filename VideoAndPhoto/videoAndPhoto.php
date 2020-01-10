<?php
   include('../login/Config.php');
   include ('../inc/count.php');
   session_start(); 

for ($x = 1; $x <= 10; $x++) {
$sql[$x] = "SELECT * FROM Videoandphoto WHERE VideoandphotoID = $x";
for ($y = 1; $y <= 10; $y++) {
$sqlIMAGE[$x][$y] = "SELECT Path FROM Videoandphotoimages WHERE VideoandphotoID = $x AND ImageNumber = $y";
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
  <title>Video and photo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="videoAndPhoto.css" type = "text/css" rel="stylesheet">
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
	Video and photo shootings	
	</div>
</div>
</div>
</div>



<div class="container-fluid">

    <div class="row content">
      <div class="col-sm-2 navbar" style = "font-size:16px; height: auto; text-align:left;">
		<ul class="nav nav-pills nav-stacked primary" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
   <?php 
	$sqlpills = mysqli_query($db,"SELECT Name FROM Videoandphoto");
	$rowlistpills = mysqli_fetch_assoc($sqlpills);
	
	$n = 1;
	echo "<li class = 'active'><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #home" . $n .">". $rowlistpills['Name'] ."</a></li>";
	while ($rowlistpills = mysqli_fetch_assoc($sqlpills))
    {
	$n++;
	echo "<li class><a style= 'nav-color:none;color:black;' data-toggle = 'pill' href = #home" . $n .">". $rowlistpills['Name'] ."</a></li>";
	}
	?>
    </ul>
      </div>

    <div class="tab-content" >

<?php
		$y = 1;
		$sqlcount = mysqli_query($db,"SELECT VideoandphotoID FROM Videoandphoto");

		while ($rowcount = mysqli_fetch_assoc($sqlcount))
    {
		if ($y == 1)
		{
		 echo "<div id= 'home". $y ."' class='tab-pane fade in active'>";
		}
		else{
		 echo "<div id= 'home". $y ."' class='tab-pane fade'>";
		}
		
         echo "<div class='col-sm-10 main' >
            <h3>" . $row[$y]['Name'] . "<small style = 'font-family: Nautilus Pompilius'> photographer</small></h3>
            <hr>
			
			<div class='media'>
            <div class='media-body'>	
                <h3 class = 'media-heading' style = 'font-family:Nautilus Pompilius'>About</h3>"
              . $row[$y]['About'] .
               "<br><br><h3 class = 'media-heading' style = 'font-family:Nautilus Pompilius'>Contact</h3>
                <br>"
			  . $row[$y]['Contact'] .
                "<br>
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
                   <img src = '" . $rowIMAGE[$y][1]['Path'] . "'>
                  </div>

                  <div class='item'>
                     <img src = '" . $rowIMAGE[$y][2]['Path'] . "'>
                  </div>

                  <div class='item'>
                     <img src = '" . $rowIMAGE[$y][3]['Path'] . "'>
                  </div>

                  <div class='item'>
                     <img src = '" . $rowIMAGE[$y][4]['Path'] . "'>
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
