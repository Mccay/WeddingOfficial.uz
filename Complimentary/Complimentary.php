<?php
   include('../login/Config.php');
   include ('../inc/count.php');
   session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link  rel="stylesheet" href ="../bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        h4{
            font-family: Nautilus Pompilius;
        }
    </style>

</head>
<body>



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

<style>
    .headers:hover{
        box-shadow: inset 5px 5px 46px 2px rgba(0,0,0,0.5);
        font-size: 20px;
        line-height: 130px;

    }

    }
</style>

</div>

<div class="container-fluid ">
  <div class="row">
<div class="col-sm-12" style="border-bottom: solid 1px #f1f1f1; height: 80px; background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); z-index:1;">
<div class ="col-sm-5 " style = "font-family: Nautilus Pompilius; color:black; text-align:left;">
<h3>Wedding salons</h3></div>


<div class ="col-sm-7" >

<div class="dropdown" style = "padding:10px;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose District
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
 <li>Yunusabad district        </li>
 <li>Mirabad district          </li>
 <li>Shaykhantahur district    </li>
 <li>Yakkasaray district       </li>
 <li>Kibray district           </li>
 <li>Bektimir district         </li>
 <li>Chilanzar district        </li>
 <li>Mirzo-Ulugbek district    </li>
 <li>Sergeli district          </li>
 <li>Olmazar district          </li>
 <li>Uchtepa district          </li>

  </ul>
</div>

 
</div>
</div>
</div>
</div>








<div class="container-fluid" >

    <div class="row content">

        <div class="col-sm-2" style = "padding:15px;">
            <ul class="nav nav-pills nav-stacked" style="width:280px ; background-color:white ; nav-color:none;  ">

                <li class="active " ><a data-toggle="pill" href="#home" style="nav-color:none; color:black;">Office Market  </a></li>
                <img src="need.jpg">
                <li><a data-toggle="pill" href="#home1" style="nav-color:none;color:black;">Farkhod Alimov   </a></li>
                <img src="need.jpg">
                <li><a data-toggle="pill" href="#home2" style="nav-color:none;color:black;">Artur Beglaryan  </a></li>
                <img src="need.jpg">
                <li><a data-toggle="pill" href="#home3" style="nav-color:none;color:black;">Arsen Dlyanchev  </a></li>
                <img src="need.jpg">
                <li><a data-toggle="pill" href="#home4" style="nav-color:none;color:black;">Dimitriy Filippov</a></li>
                <img src="need.jpg">
                <li><a data-toggle="pill" href="#home5" style="nav-color:none;color:black;">Maks and Yuliya  </a></li>


            </ul>
            <style>

                .nav-pills > li.active > a{
                    color: black;
                    background-color: #f5f5f3;
                    border-radius: 0px;
                    width: 225px;
                }
                .nav-pills > li.active > a:focus {
                    color: black;
                    background-color: #f5f5f3;
                    border-radius: 0px;
                    width: 225px;
                }

                .nav-pills > li.active > a:hover {
                    background-color: #f5f5f3;
                    color:black;
                    width: 225px;
                }
                .nav-pills > li > a:hover {
                    background-color: white;
                    color:black;
                    border-radius: 0px;
                    width: 225px;
                }
            </style>


        </div>


        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="col-sm-10 main " style="background-color: #f5f5f0">
                    <h3 >


                        <small style = "font-family: Nautilus Pompilius">Complimentary</small></h3>


                    <div class="media">
                        <div class="media-body">
                            <h3 class = "media-heading" style = "font-family:Nautilus Pompilius">Information</h3>
                            <br>

                            Working hours:  <span class="label label-info">09:00 - 22:00</span>
                            <br>
                            <br>
                            <p>Handmade wedding invitations - sale, manufacturing</p>
                            <br><br>
                            <br><br>
                            <br><br>
                            <br><br>
                            <h3 style="font-family: Nautilus Pompilius;"> Phone number:</h3>
                            <p a href="#">+99890 9594555</p>
                          

                        </div>





                        <div class="media-right media-bottom">
                            <h4>
                                
                            </h4>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 600px; margin: 0 auto">
                                <!-- Indicators -->

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner"  role="listbox">
                                    <div class="item active">
                                        <img src="img1.jpg" alt="Complimentary">
                                    </div>

                                    <div class="item">
                                        <img src="img2.jpg" alt="Complimentary">
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
                                <style>
                                    .carousel-inner{

                                        max-height: 400px !important;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div id="home1" class="tab-pane fade">
                <div class="col-sm-10 main " style="background-color: #f5f5f0">
                    <h3 >


                        <small style = "font-family: Nautilus Pompilius">Toasters</small></h3>


                    <div class="media">
                        <div class="media-body">
                            <h3 class = "media-heading" style = "font-family:Nautilus Pompilius">Information</h3>
                            <br>

                            Working hours:  <span class="label label-info">11:00 - 22:00</span>
                            <br>
                            <br>
                            <p>Handmade wedding invitations - sale, manufacturing</p>
                            <br><br>
                            <br><br>
                            <br><br>
                            <br><br>
                            <h3 style="font-family: Nautilus Pompilius;"> Phone number:</h3>
                            <p a href="#">+99890 1888878</p>


                        </div>





                        <div class="media-right media-bottom">
                            <h4>
                                
                            </h4>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 600px; margin: 0 auto">
                                <!-- Indicators -->

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner"  role="listbox">
                                    <div class="item active">
                                        <img src="pic2.jpg" alt="Complimentary">
                                    </div>

                                    <div class="item">
                                        <img src="pic2.jpg" alt="Complimentary">
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
                                <style>
                                    .carousel-inner{

                                        max-height: 400px !important;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div id="home2" class="tab-pane fade">
                <div class="col-sm-10 main " style="background-color: #f5f5f0">
                    <h3 >


                        <small style = "font-family: Nautilus Pompilius">Complimentary
                        </small></h3>


                    <div class="media">
                        <div class="media-body">
                            <h3 class = "media-heading" style = "font-family:Nautilus Pompilius">Information</h3>
                            <br>

                            Working hours:  <span class="label label-info">11:00 - 22:00</span>
                            <br>
                            <br>
                            <p>Handmade wedding invitations - sale, manufacturing</p>
                            <br><br>
                            <br><br>
                            <br><br>
                            <br><br>
                            <h3 style="font-family: Nautilus Pompilius;"> Phone number:</h3>
                            <p>+99891 1663333</p>

                        </div>





                        <div class="media-right media-bottom">
                            <h4>
                                
                            </h4>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 600px; margin: 0 auto">
                                <!-- Indicators -->

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner"  role="listbox">
                                    <div class="item active">
                                        <img src="img3.jpg" alt="Complimentary">
                                    </div>

                                    <div class="item">
                                        <img src="img3.jpg" alt="Complimentary">
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
                                <style>
                                    .carousel-inner{

                                        max-height: 400px !important;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
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
</body>




</html>