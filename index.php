<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bhamashah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/login_form.css">

   <style>
.dropbtn {
    background-color: #F8F8F8;
    color: gray;
    padding: 15px;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #blue;
}
</style>
</head>
<body>

<nav class="navbar navbar-fixed-top">
  <div class="container">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div>
      <ul class="nav navbar-nav navbar-right">
		<li class="col-xs-3"><button onclick="zoomin();">A+</button></li>
		<li class="col-xs-3"><button onclick="normal();">A</button></li>
		<li class="col-xs-3"><button onclick="zoomout();">A-</button></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="index.php"  style="font-size:25px">Bhamashah</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<li style="padding-left:40px;"><a href="#"></a></li>
        <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
		
		<li>
    <div class="dropdown">
      <button class="dropbtn">Complaints</button>
      <div class="dropdown-content">
      <a href="complaints.php">Register Complaint</a>
      <a href="complaint_status.php">Complaint Status</a>
      </div>
    </div>
    </li>
    <li>
    <div class="dropdown">
      <button class="dropbtn">Updations</button>
      <div class="dropdown-content">
      <a href="updation.php">Update Request</a>
      <a href="updation_status.php">Request Status</a>
      </div>
    </div>
    </li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="#">About Us</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<style>
 html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
  padding-top: 70px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 40px;
  background-color: #f5f5f5;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>


     <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
      <!-- image trigger modal -->
        <a data-target="#shekhar" data-toggle="modal">
          <img src="img/1.jpg" style="height:400px;width:100%;">
        </a>
        <!--Modal for Shekhar Naik-->
            <div class="carousel-caption">
              <!--data-->
            </div>
          </div>

          <div class="item">
      <!-- image trigger modal -->
        <a data-target="#kapten" data-toggle="modal">
          <img src="img/2.jpg" style="height:400px;width:100%;">
        </a>
              <div class="carousel-caption">
              <!--data-->
            </div>
          </div>


          <div class="item">
            <a href="http://www.swavlambancard.gov.in/">
            <img src="img/3.jpg" style="height:400px;width:100%;"></a>
            <div class="carousel-caption">
              <!--data-->
            </div>
          </div>

          <div class="item">
            <img src="img/4.jpg" style="height:400px;width:100%;">
            <div class="carousel-caption">
              <!--data-->
            </div>
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


<div class="container-fluid"> 
   <div class="row">
   <p style="padding:10px;"></p>
   </div>
</div>
<div class="container-fluid"> 
   <div class="row">
      <div class="col-lg-12">
			 <div class="well">
				<div class="row">
					<div class="col-xs-6">
						<h3>Bhamashah Portal Benifits</h3>
					</div>
				</div>
					
			 <div class="panel panel-default">
				  <div class="panel-body">
					<div class="panel" id="permanent_schemes">
            <div class="panel">
									To build a better society,empowerment of every woman is imperative because empowerment of the woman is empowerment of the society and thus the State.The Bhamashah Scheme envisaged by us in the year 2008 with this aim, even before the Aadhaar programme was thought of,is the first of its kind direct benefit transfer scheme in the country.The objective of the Scheme is financial inclusion,women empowerment and effective service delivery
Bank Account and Bhamashah Card to be made in the name of the lady of the house that empowers her to be the decision-maker for the family, for effective use of all cash and non-cash benefits undervarious public welfare schemes of the government.
<br><br>
Vasundhara Raje<br>
Chief Minister, Rajasthan
				  </div>
			 </div>
			 </div>
      </div>
      
   </div>   
</div>
<footer class="footer" style="background:silver;">
      <div class="container">
        <p class="text-muted"></p>
      </div>
</footer>


<script>
function zoomin(){
window.parent.document.body.style.zoom = 1.15;
}
function normal(){
	
window.parent.document.body.style.zoom = 1;
}
function zoomout(){
	window.parent.document.body.style.zoom = .85;
}
</script>

</body>
</html>
