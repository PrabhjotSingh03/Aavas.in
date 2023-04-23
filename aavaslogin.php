<?php 
session_start();
IF(ISSET($_SESSION['email'])){
?>
<?php include "db_con.php"?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aavas.com</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body id="imagedelhi">
     <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"><a href="aavaslogin.php" class="navbar-brand navbar-link">Aavas.com</a>
            <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle">CHANDIGARH <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">PANCHKULA </a></li>
                        <li role="presentation"><a href="#">MOHALI </a></li>
                    </ul>
                </li>
               
                <li role="presentation"><a href="#">PROPERTIES</a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="dashboard.php"><?php echo $_SESSION['fullname'];?></a></li>
                <li role="presentation"> <a href="dashboard.php" name="dashboard" id="dashboard">Dashboard</a></li>
                <li role="presentation"><a href="postproperty.php">Post Property</a></li>
			    <li role="presentation"><a href="logout.php?destroy">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div class="row">
        <div class="col-sm-12">
            <div id="col1" class="col-sm-2"></div>
            <div class="col-sm-8"><img src="assets/img/zocalologo.png" class="mainlogo">
                <p>Right accommodation &amp; the Right people at one place. Broker-Free!</p>
            </div>
            <div id="col3" class="col-sm-2"><img class="img-thumbnail locationlogo" src="assets/img/giphy-(1).gif"></div>
        </div>
        <div class="col-sm-12">
            <div class="col1 col-sm-2"></div>
            <div class="mid col-sm-8">
                <div class="col-md-12">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Accommodation type<span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="#">PG &amp; Hostels</a></li>
                                    <li class="divider" role="presentation"></li>
                                    <li role="presentation"><a href="#">Shared Apartments</a></li>
                                    <li class="divider" role="presentation"></li>
                                    <li role="presentation"><a href="#">Rental Apartments</a></li>
                                    <li class="divider" role="presentation"></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col3 col-sm-2"></div>
        </div>
    </div>
    <div class="row carouselback">
        <div class="col-sm-12" id="colcrousal">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ul id="caro1" class="carousel-indicators">
                        <li class="active" data-target="#carousel" data-slide-to="0"> </li>
                        <li data-target="#carousel" data-slide-to="1"> </li>
                        <li data-target="#carousel" data-slide-to="2"> </li>
                    </ul>
                    <div class="row carousel-inner review">
                        <div class="item">
                            <div class="carousel-top-left col-sm-2">
                                <div class="row image-block"><img class="img-circle" src="assets/img/pankaj.jpg" id="panki"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="panki">Pankaj </h2></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="work"><span class="ico"> <img src="assets/img/work-icon.png" id="workicon"></span>
                                        <div class="1b1 pankiwork">
                                            <h2 class="work"> Engineer</h2></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-top-right col-sm-10">
                                <div class="col-sm-12 review"><span id="rating">8.0 </span><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png"
                                    id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/blank_rating_hm.png" id="ratingicon"><img src="assets/img/blank_rating_hm.png"
                                    id="ratingicon"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="yearreview">Reviewed 1 year ago</h4></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="parareview">Mukherjee Nagar in North Campus is a place with a student atmosphere and is very chill. There are a lot of pocket friendly eateries and the commute from this area is also very easy. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-top-left col-sm-2">
                                <div class="row image-block"><img class="img-circle" src="assets/img/aman.jpg" id="aman"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="panki">Aman </h2></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="work"><span class="ico"> <img src="assets/img/work-icon.png" id="workicon"></span>
                                        <div class="1b1 pankiwork">
                                            <h2 class="work"> Engineer</h2></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-top-right col-sm-10">
                                <div class="col-sm-12 review"><span id="rating">9.0 </span><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png"
                                    id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/blank_rating_hm.png" id="ratingicon"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="yearreview">Reviewed 6 months ago</h4></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="parareview">South Extension I is a shopping paradise for all shopaholics. You will get anything and everything in this area. Close proximity to AIIMS and Metro station just makes it easy to reach South Extension. Commute by
                                            Metro is more convenient than by a car&nbsp;<a href="http://zocalo.in/neighbourhood-profile/delhi"><strong>...</strong></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="carousel-top-left col-sm-2">
                                <div class="row image-block"><img class="img-circle" src="assets/img/prabhjot.jpg" id="prabhjot"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="panki">Prabhjot </h2></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="work"><span class="ico"> <img src="assets/img/work-icon.png" id="workicon"></span>
                                        <div class="1b1 pankiwork">
                                            <h2 class="work"> Engineer</h2></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-top-right col-sm-10">
                                <div class="col-sm-12 review"><span id="rating">10 </span><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png"
                                    id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png" id="ratingicon"><img src="assets/img/full_rating_hm.png"
                                    id="ratingicon"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="yearreview">Reviewed 1 months ago</h4></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="parareview">South Extension I is a shopping paradise for all shopaholics. You will get anything and everything in this area. Close proximity to AIIMS and Metro station just makes it easy to reach South Extension. Commute by
                                            Metro is more convenient than by a car&nbsp;<a href="http://zocalo.in/neighbourhood-profile/delhi"><strong>...</strong></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <nav class="navbar navbar-inverse navbar-static-top" id="navhomeend">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="nav navbar-nav" id="homenavrental">
                    <li class="active" role="presentation"><a href="#"><i class="fa fa-file-text-o"></i>Rental Agreement</a></li>
                </ul>
                <ul class="nav navbar-nav" id="homenavtellus">
                    <li class="active" role="presentation"><a href="#"><i class="glyphicon glyphicon-home"></i>Tell us your requirements</a></li>
                    <li class="active iconreviewhomenav" role="presentation"><a href="#"><i class="glyphicon glyphicon-comment"></i></a></li>
                    <li class="dropdown" id="homewritereview"><a class="text-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Write a review<i class="fa fa-chevron-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">First Item</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Third Item</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-sm-12 trending">
            <h1 class="trending">Trending Properties</h1></div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 carotrending">
                <div id="carouseltrend" class="carousel slide carouseltrend" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row 1st">
                                <div class="col-sm-12 1st">
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14999490506428.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">16,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 1</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Girls Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14525216653259.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">14,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 10</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Boys Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/15000169978938.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">14,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 15</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Girls Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row 1st">
                                <div class="col-sm-12 1st">
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14449080448334.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">12,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 40</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Boy Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14504341836907.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">15,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 53</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Boys Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14526022827509.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">15,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 18</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Girls Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row 1st">
                                <div class="col-sm-12 1st">
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14513910396764.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">15,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 23A</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Boys Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 picbox" style="cursor-pointer;" data-link="http://www.coho.in/flats-in-delhi/girls-coho-1149">
                                        <div class="col-sm-12 img"><img src="assets/img/14525216653259.jpg" class="img" alt="Apartment - in Chandigarh" title="Apartment - in Chandigarh"></div>
                                        <div class="row imgthumb">
                                            <div class="col-sm-12 imgthumb">
                                                <div class="col-sm-6 price"><i class="fa fa-rupee rs"></i>
                                                    <p class="rs">15,000 p.m.</p>
                                                </div>
                                                <div class="col-sm-6 area"><i class="glyphicon glyphicon-map-marker location"></i>
                                                    <p class="area">Sector 35</p>
                                                </div>
                                                <div class="col-sm-12 girlsotaq">
                                                    <h2 class="girlsotaq">Boys Otaq</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#carouseltrend" id="leftcaro" class="left carousel-control" role="button" data-slide="prev"> <i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a href="#carouseltrend" id="rightcaro" class="right carousel-control" role="button" data-slide="next"> <i class="glyphicon glyphicon-chevron-right rightcaro"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <hr class="rowdivider">
    <div class="row ourpg">
        <div class="col-md-12 ourpg">
            <h1 class="ourpg">Why Aavas Properties?</h1></div>
    </div>
    <div class="row aim">
        <div class="col-md-12 aim">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 aim">
                <p class="aim">With our aim of providing gold standard in quality, we guarantee of a homely environment&nbsp;away from home. </p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <div class="row whyicon">
        <div class="col-md-12 whyicon">
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-md-12 headicon"><img src="assets/img/pg-ac-icon.png" class="acicon"></div>
                    <div class="col-md-12 head">
                        <h2 class="ac">AC </h2></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-md-12 headicon"><img src="assets/img/pg-wifi-icon.png" class="wifi"></div>
                    <div class="col-md-12 head">
                        <h2>Wi-Fi</h2></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-md-12 headicon"><img src="assets/img/pg-food-icon.png" class="food"></div>
                    <div class="col-md-12 head">
                        <h2>FooD </h2></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-md-12 headicon"><img src="assets/img/pg-housekeeping-icon.png" class="keeping"></div>
                    <div class="col-md-12 head">
                        <h2>Housekeeping </h2></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-md-12 headicon"><img src="assets/img/pg-tv-icon.png" class="tv"></div>
                    <div class="col-md-12 head">
                        <h2>TV </h2></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-md-12 headicon"><img src="assets/img/pg-support24x7-icon.png" class="support"></div>
                    <div class="col-md-12 head">
                        <h2>24x7 Support </h2></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row whypic">
        <div class="col-md-12 whypic">
            <div class="col-sm-4 pic">
                <div class="row img1">
                    <div class="col-md-12"><img src="assets/img/14834441667604.jpg" class="img1"></div>
                </div>
                <div class="row img2">
                    <div class="col-md-12"><img src="assets/img/15000168856298.jpg" class="img1"></div>
                </div>
            </div>
            <div class="col-sm-4 whyhead">
                <div class="row">
                    <div class="col-md-12 whyhead">
                        <h2>No Brokerage</h2>
                        <hr class="rowdividerwhy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 whyhead">
                        <h2>No Lock-In Period</h2>
                        <hr class="rowdividerwhy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 whyhead">
                        <h2>Quality Services</h2>
                        <hr class="rowdividerwhy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 whyhead">
                        <h2>Hygiene </h2>
                        <hr class="rowdividerwhy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 whyhead">
                        <h2>No Restrictions</h2>
                        <hr class="rowdividerwhy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 whyhead">
                        <h2>Recreational Activities</h2></div>
                </div>
            </div>
            <div class="col-sm-4 pic2">
                <div class="row img3">
                    <div class="col-md-12"><img src="assets/img/14834448392600.jpg" class="img1"></div>
                </div>
                <div class="row img4">
                    <div class="col-md-12"><img src="assets/img/15000165624951.jpg" class="img1"></div>
                </div>
            </div>
        </div>
    </div>
    <hr class="rowdivider">
    <div class="row services">
        <div class="col-md-12 headingservices">
            <h1 class="services">Aavas Services</h1></div>
    </div>
    <div class="row servicescontent">
        <div class="col-md-12 servicescontent">
            <div class="col-sm-1"></div>
            <div class="col-sm-5 agreement">
                <a href="http://zocalo.in/rental-agreement/"> <img src="assets/img/rent_bg.jpg" class="img-responsive movers"></a>
                <div class="row">
                    <div class="col-md-12"><a href="http://zocalo.in/rental-agreement/" class="moverbutton"><span class="agreement">Create Rental Agreement</span><i class="glyphicon glyphicon-list-alt list"></i> </a></div>
                </div>
            </div>
            <div class="col-sm-5 movers">
                <a href="http://zocalo.in/gohathi"> <img src="assets/img/move_img.jpg" class="img-responsive movers"></a>
                <div class="row">
                    <div class="col-md-12"><a href="http://zocalo.in/rental-agreement/" class="moverbutton">Movers And Packers<i class="material-icons mover">airport_shuttle</i> </a></div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <hr class="rowdivider">
    <div class="row howworks">
        <div class="col-md-12 howworks">
            <h1 class="howworks">How It Works?</h1></div>
        <div class="col-md-12 howworkscontent">
            <div class="col-sm-2"></div>
            <div class="col-sm-2 search">
                <div class="row search">
                    <div class="col-md-12 search"><i class="glyphicon glyphicon-search img-circle search"></i></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="search">Search </h2>
                        <p class="search">Browse through verified and detailed listings with real photos. Search on our map based interface by price, location, city or otherwise. Available on your nearest phone, tab or desktop </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2 search">
                <div class="row search">
                    <div class="col-md-12 search"><i class="material-icons img-circle people">people</i></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="search">Connect </h2>
                        <p class="search">Directly connect with genuine people for free! Ya, you read it right, no brokers here. Find the perfect roommate through social connect &amp; the perfect place to stay through hood views </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2 search">
                <div class="row search">
                    <div class="col-md-12 search"><i class="glyphicon glyphicon-search img-circle search"></i></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="search">Move in</h2>
                        <p class="search">Move-in to your preferred listing with a single click. We love feedback. If you like us, do share with your friends and if you hate us, do let us know. Happy hunting my dear friend </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div class="row knowmore">
        <div class="col-md-12">
            <div class="col-sm-5"></div>
            <div class="col-sm-2 knowmore">
                <button class="btn btn-default knowmore" type="button" data-toggle="modal" data-target="#knowmoremodal">Know More<i class="glyphicon glyphicon-eject eject"></i></button>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="knowmoremodal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content content">
                        <div class="modal-header header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="cross">×</span></button>
                            <h4 class="modal-title header">Know More</h4></div>
                        <div class="modal-body">
                            <p class="text-left content"><a href="http://zocalo.in/">Zocalo</a> exists primarily to help you find a good place to live in.We follow a simple three-step process1. You tell us what you are looking for – A Paying Guest Accommodation or Shared Apartment
                                or Rental Apartment? <em>For example: “I am looking for a PG for girls in Noida Sector 62”</em> <em>For example: “I am looking for a single room in a 2 BHK shared flat for rent in Saket, Delhi”</em> <em>For example: “I am looking for a studio apartment in Gurgaon”</em>2.
                                You tell us your budget specifics and other wants. <em>For example: “I am looking for a twin sharing room in a girls PG in Delhi with parking.”</em> <em>For example: “I am looking for a twin sharing room in a girls PG in Gurgaon with AC under Rs.15000.”</em>3.
                                We go out and find you your home-to-be.If you are looking for a flatmate, the process is similar1. You tell us what kind of a flatmate you want. <em>For example: “I am looking for a non-smoker flatmate in Noida for a rented apartment”</em>                                <em>For example: “I am looking for a flatmate in Delhi who studies in North Campus”</em>2. You tell us your monetary specifics and other sharing details.&nbsp; <em>For example: “I am looking for a roommate for 1BHK flat in Powai, rent Rs. 10,000 + Electricity + Water + Living Expenses.”</em>                                <em>For example: “I am looking for a female roommate for a flat on rent in Gurgaon, rent Rs. 10,000 + parking + AC + Security.”</em>3. We go out and find you your flatmate-to-be.If you are looking for an occupant for your
                                PG or flat1. You go on to&nbsp;<a href="http://zocalo.in/">www.zocalo.in</a>2. You post your PG or flat details <em>For example: “There is a single room vacant in a Girls PG in Laxmi Nagar. Rent : 9000 inclusive of Electricity.”</em>                                <em>For example: “I own a 3 BHK flat in Dwarka, and want to rent it out for Rs. 23,000.”</em>3. You give us preferences for your to-be-tenant <em>For example: “Looking for students for a flat on rent in Delhi at Rs.8000.”</em>                                <em>For example: “Looking for non-smoker working female for a flat on rent in Gurgaon.”</em>4. We find you a tenant.What separates us from the other housing platforms is our 100% broker-free policy. Broker free in turn
                                means brokerage free. We charge no money from you.We are present in Delhi, Gurgaon, Noida, Greater Noida and Indirapuram.Our motive of connecting people to their homes and flatmates remains incomplete without your help.
                                We are looking to create a Circle of Trust where we help each other get a clear and transparent picture of the place we will call our home.Your reviews of the PG you have lived in or the society you have inhabited will
                                help others make a wiser choice.What you need to do is:1. Browse through&nbsp;<a href="http://zocalo.in/">www.zocalo.in</a>2. Post your requirements3. If you find anything you like, click on Know More and we will get in
                                touch with you.4. Review your PG / Flat / Society / Apartment / Neighborhood5. Tell us what we can do to better our services. Connect with us<a href="mailto:info@zocalo.in">info@zocalo.in</a> | +91-9818161096 |&nbsp;
                                <a
                                href="https://play.google.com/store/apps/details?id=com.queppelin.zocalo" target="_blank">Android App</a> |&nbsp;<a href="http://www.facebook.com/zocaloindia" target="_blank">www.facebook.com/zocaloindia</a> |&nbsp;<a href="http://twitter.com/zocaloindia" target="_blank">twitter.com/zocaloindia</a> |&nbsp;
                                    <a
                                    href="http://instagram.com/zocalo.in" target="_blank">instagram.com/zocalo.in</a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" type="button" id="close" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5"></div>
        </div>
    </div>
    <div class="row videos">
        <div class="col-md-12">
            <div class="col-sm-1"></div>
            <div class="col-sm-5 video1"><img src="assets/img/video01.jpg" class="img-responsive" data-toggle="modal" data-target="#video1">
                <div class="modal fade" role="dialog" tabindex="-1" id="video1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content video">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="cross">×</span></button>
                                <h4 class="modal-title videoheading">New to the City? Check Zacalo.in</h4></div>
                            <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/n0W7dZhKmRA"></iframe>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" id="videoclose" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 video2"><img src="assets/img/video02.jpg" class="img-responsive" data-toggle="modal" data-target="#video2">
                <div class="modal fade" role="dialog" tabindex="-1" id="video2">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content video">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="cross">×</span></button>
                                <h4 class="modal-title videoheading">Are you a student looking for an accommodation? Check Zacalo.in</h4></div>
                            <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/4LN8cX8NmCQ"></iframe>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" id="videoclose" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div class="row footer">
        <div class="col-sm-12 footer">
            <div class="col-sm-12 footer1">
                <div class="row footercontent">
                    <div class="col-md-12 footercontent">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1 about">
                            <div class="row about">
                                <div class="col-md-12">
                                    <div class="col-sm-12 about"><a href="#" class="about">About Us</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Contact Us</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Privacy Policy</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Cancellation Policy</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Terms and Conditiolns</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Blogs</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 address">
                            <div class="row address">
                                <div class="col-md-12">
                                    <div class="col-sm-12 address">
                                        <p class="about">Address </p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about">146/147, Centrum Plaza,&nbsp; </p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about"> Golf Course Road,</p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about"> Sector 53, Gurgaon - 122002</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 reach">
                            <div class="row reach">
                                <div class="col-md-12">
                                    <div class="col-sm-12 address">
                                        <p class="about">Reach Us</p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about"> +91 9816919394</p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about">support@aavas.in</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 fb">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-4 face">
                                        <a href="#" class="face"> <i class="fa fa-facebook face"></i></a>
                                    </div>
                                    <div class="col-sm-4 face">
                                        <a href="#" class="face"> <i class="fa fa-twitter twit"></i></a>
                                    </div>
                                    <div class="col-sm-4 face">
                                        <a href="#" class="face"> <i class="fa fa-instagram inst"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/validation.js"></script>
</body>

</html>
<?php 
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
?>