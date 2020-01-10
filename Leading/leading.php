

<!DOCTYPE html>
<html lang="en">
 <head>
  <title>invitation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="invitation.css" type = "text/css" rel="stylesheet">
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
     Invitation
	</div>
	<div class = "col-sm-7">

</div>
</div>
</div>

</div>

<div class = "tab-content">





<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto; text-align:left;">
 
	 <ul class="nav nav-pills nav-stacked primary" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
    <li class="active" ><a data-toggle="pill" href="Basilic" style="nav-color:none;color:black;" >Office-Market  </a></li>
	<hr>
    <li><a data-toggle="pill" href="#Marmaris" style="nav-color:none;color:black;" >WELCOME   </a></li>
	<hr>
    <li><a data-toggle="pill" href="#Dar" style="nav-color:none;color:black;" >Future       </a></li>
	
  </ul>

    </div>

<div class="tab-content">
<div id="Basilic" class="tab-pane fade in active" style="background-color:blue">
<div class="col-sm-10 main" >
<h3 >
Office-Market<small>  invitation</small>
</h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">

	  <br>
	  <h3 >Of course, the role of wedding invitations is not only in giving news about the upcoming event, but also in creating a special festive mood. They fascinate, admire, intrigue, and most importantly - create a first impression of the wedding. And every newlywed couple dreams that this impression was unforgettable.</h3> 
	  
	  <br><br>
	  <br><br>
	  <br><br>
	   <br><br>
	   <br>
	 
	
  </div>

  <div class="media-right media-bottom">
  
    <h4 class="media-heading" style = "font-family: Nautilus Pompilius;"> Tel. number: +998935631596 </h4>
    


  <!-- Wrapper for slides -->
 
    
      <img src="m.jpg"alt="Chania">
    

   
  <!-- Left and right controls -->
 
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">


  
 </div>
  <div class="media-right media-middle">
   
    

  </div>
</div>
<hr>

   
   
    </div>
  </div>

<div id="Marmaris" class="tab-pane fade">
 <div class="col-sm-10 main" >
<h3 >
WELCOME <small>  invitation</small>
</h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">

	  <br>
	  <h3 >Of course, the role of wedding invitations is not only in giving news about the upcoming event, but also in creating a special festive mood. They fascinate, admire, intrigue, and most importantly - create a first impression of the wedding. And every newlywed couple dreams that this impression was unforgettable.</h3> 
	  
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	 
	
  </div>

  <div class="media-right media-bottom">
  
    <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Tel. number: +998901872148</h4>
    


  <!-- Wrapper for slides -->
 
    
      <img src="w.jpg"alt="Chania">
    

   
  <!-- Left and right controls -->
 
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">


  
 </div>
  <div class="media-right media-middle">
   
    

  </div>
</div>
<hr>

   
   
    </div>
 
 
 
 
 
 
 
 
 
 
 
 
  </div>

<div id="Dar" class="tab-pane fade">

 <div class="col-sm-10 main" >
<h3 >
Future<small>  invitation</small> </h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">

	  <br>
	  <h3 >Of course, the role of wedding invitations is not only in giving news about the upcoming event, but also in creating a special festive mood. They fascinate, admire, intrigue, and most importantly - create a first impression of the wedding. And every newlywed couple dreams that this impression was unforgettable.</h3> 
	  
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	  <br><br>
	  
	
  </div>

  <div class="media-right media-bottom">
  
    <h4 class="media-heading" style = "font-family: Nautilus Pompilius;"> Tel. number:  +99891 1880808</h4>
    


  <!-- Wrapper for slides -->
 
    
      <img src="f.jpg"alt="Chania">
    

   
  <!-- Left and right controls -->
 
  </div>
</div>



<div class="media">
  <div class="media-body" style = "padding-right:20px;">


  
 </div>
  <div class="media-right media-middle">
   
    

  </div>
</div>
<hr>

   
   
    </div>


  </div>
   
</div>
</div>
</div>






























<div id="mirabad" class="tab-pane fade">

<div class="container-fluid">

  <div class="row content">
    <div class="col-sm-2 navbar" style = "font-size:16px; height: auto;">
<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="655" style="margin:10px; background-color:white ; nav-color:none;">
    <li class="active"><a data-toggle="pill" href="#moon" style="nav-color:none;color:black;" >Moon</a></li>
    <li><a data-toggle="pill" href="#jpub" style="nav-color:none;color:black;" >Jentleman's Pub</a></li>
    <li><a data-toggle="pill" href="#exodia" style="nav-color:none;color:black;" >Exodia</a></li>
  </ul>
    </div>

<div class="tab-content" >

<div id="moon" class="tab-pane fade in active">
<div class="col-sm-10 main" >
<h3 style = "font-family: Nautilus Pompilius;">
<?php
echo $row[3]["Name"];
?>
<small style = "font-family: Nautilus Pompilius"> Restaurant</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" style = "font-family:Nautilus Pompilius">Information</h3>
   <br>
	  <span class="label label-info">Type:</span>  <?php echo $row[3]["Type"];?> 
	  <br>
	  <span class="label label-info">Cuisine:</span>  <?php echo $row[3]["Cuisine"];?>
	  <br>
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[3]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;">Details:</h3> <?php echo $row[3]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Interiour</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel" style = "width:850px; height: 400px; ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
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

    <div class="item">
        <img src="<?php echo $rowIMAGE[4][4]["Path"]; ?>" alt="Chania">
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
<h3 style = "font-family: Nautilus Pompilius;">Cuisine:</h3> <?php echo $row[3]["CuisineDetails"];?>

<h3 style = "font-family: Nautilus Pompilius;">Bar:</h3> <?php echo $row[3]["Bar"]; ?>

<h3 style = "font-family: Nautilus Pompilius;">Servive:</h3> <?php echo $row[3]["Service"];?>
  
 </div>
  <div class="media-right media-middle">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Dishes</h4>
    
<div id="myCarousel2" class="carousel slide" data-ride="carousel" style = "width:850px; height: 400px ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
    <li data-target="#myCarousel2" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
	 <img src="<?php echo $rowIMAGE[4][5]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
     <img src="<?php echo $rowIMAGE[4][6]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
     <img src="<?php echo $rowIMAGE[4][7]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
     <img src="<?php echo $rowIMAGE[4][8]["Path"]; ?>" alt="Chania">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
  </div>
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[3]["Address"];?>
<p> </p>

    </div>
  </div>


<div id="jpub" class="tab-pane fade">
<div class="col-sm-10 main" >
<h3 style = "font-family: Nautilus Pompilius;">
<?php
echo $row[3]["Name"];
?>
<small style = "font-family: Nautilus Pompilius"> Restaurant</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" style = "font-family:Nautilus Pompilius">Information</h3>
   <br>
	  <span class="label label-info">Type:</span>  <?php echo $row[3]["Type"];?> 
	  <br>
	  <span class="label label-info">Cuisine:</span>  <?php echo $row[3]["Cuisine"];?>
	  <br>
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[3]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;">Details:</h3> <?php echo $row[3]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Interiour</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel" style = "width:850px; height: 400px; ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
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

    <div class="item">
        <img src="<?php echo $rowIMAGE[5][4]["Path"]; ?>" alt="Chania">
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
<h3 style = "font-family: Nautilus Pompilius;">Cuisine:</h3> <?php echo $row[3]["CuisineDetails"];?>

<h3 style = "font-family: Nautilus Pompilius;">Bar:</h3> <?php echo $row[3]["Bar"]; ?>

<h3 style = "font-family: Nautilus Pompilius;">Servive:</h3> <?php echo $row[3]["Service"];?>
  
 </div>
  <div class="media-right media-middle">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Dishes</h4>
    
<div id="myCarousel2" class="carousel slide" data-ride="carousel" style = "width:850px; height: 400px ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
    <li data-target="#myCarousel2" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="<?php echo $rowIMAGE[5][5]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
        <img src="<?php echo $rowIMAGE[5][6]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
        <img src="<?php echo $rowIMAGE[5][7]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
        <img src="<?php echo $rowIMAGE[5][8]["Path"]; ?>" alt="Chania">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
  </div>
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[3]["Address"];?>
<p> </p>
  
    </div>
  </div>
  

<div id="exodia" class="tab-pane fade">
<div class="col-sm-10 main" >
<h3 style = "font-family: Nautilus Pompilius;">
<?php
echo $row[3]["Name"];
?>
<small style = "font-family: Nautilus Pompilius"> Restaurant</small></h3>
<hr>

<div class="media">
  <div class="media-body"style = "padding-right:20px;">
   <h3 class = "media-heading" style = "font-family:Nautilus Pompilius">Information</h3>
   <br>
	  <span class="label label-info">Type:</span>  <?php echo $row[3]["Type"];?> 
	  <br>
	  <span class="label label-info">Cuisine:</span>  <?php echo $row[3]["Cuisine"];?>
	  <br>
	  <span class="label label-info">Working Hours:</span>  <?php echo $row[3]["WorkingHours"];?>
	  <br>
	  <h3 style = "font-family: Nautilus Pompilius;">Details:</h3> <?php echo $row[3]["Details"];?>
	
  </div>
  <div class="media-right media-bottom">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Interiour</h4>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel" style = "width:850px; height: 400px; ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
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

    <div class="item">
        <img src="<?php echo $rowIMAGE[6][4]["Path"]; ?>" alt="Chania">
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
<h3 style = "font-family: Nautilus Pompilius;">Cuisine:</h3> <?php echo $row[3]["CuisineDetails"];?>

<h3 style = "font-family: Nautilus Pompilius;">Bar:</h3> <?php echo $row[3]["Bar"]; ?>

<h3 style = "font-family: Nautilus Pompilius;">Servive:</h3> <?php echo $row[3]["Service"];?>
  
 </div>
  <div class="media-right media-middle">
   <h4 class="media-heading" style = "font-family: Nautilus Pompilius;">Dishes</h4>
    
<div id="myCarousel2" class="carousel slide" data-ride="carousel" style = "width:850px; height: 400px ">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
    <li data-target="#myCarousel2" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="<?php echo $rowIMAGE[6][5]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
        <img src="<?php echo $rowIMAGE[6][6]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
        <img src="<?php echo $rowIMAGE[6][7]["Path"]; ?>" alt="Chania">
    </div>

    <div class="item">
        <img src="<?php echo $rowIMAGE[6][8]["Path"]; ?>" alt="Chania">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
  </div>
</div>
<hr>
<h3 style = "font-family: Nautilus Pompilius;">Address:</h3><?php echo $row[3]["Address"];?>
<p> </p>
   
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
</html>


