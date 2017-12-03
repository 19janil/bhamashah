<?php
require('db_config.php');
$id = $_POST['id'];
//echo $disabilityCategoryId;
$sql = "SELECT `uid`, `contact`, `uname`, `gender`, `district`, `dob`, `bank`, `aadhar`, `address` FROM `user` WHERE uid='".$id."'";

?>


<!DOCTYPE html>
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

</style>
</head>
<body >
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
    <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
    <li>
    <div class="dropdown">
      <button class="dropbtn">Complaints</button>
      <div class="dropdown-content">
      <a href="complaints.php">Register Complaint</a>
      <a href="complaint_status.php">Complaint Status</a>
      </div>
    </div>
    </li>
    <li class="active">
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


	<div class="container">
	<fieldset>
		<div class="row">
		<div class="col-md-12 text-center">
		<div>
			<strong><h3>Card Updation</h3></strong>
		</div>
		</div>
		</div>
    <br>
    <h4>Bhamashah Card Holder Details : </h4><br>
		<div class="row">
		<div class="col-xs-12 col-sm-10">
                  <form class="form-horizontal" role="form" action="update.php" method="POST">
                    <div class="form-group">
                        <?php 
                        if ($result = mysqli_query($conn,$sql)) 
                        {
                          while ($row = mysqli_fetch_array($result)) 
                          {

                       echo '<label for="bham_id" class="col-sm-2 control-label">Bhamashah Number</label>                       
    						        <div class="col-sm-4">
                            <input type="text" class="form-control" id="bham_id" name="bham_id" value='.$row['uid'].'>
                        </div>
                        <label for="contact" class="col-sm-2 control-label">Mobile Number</label>
                        <div class="col-sm-4">
                          <input type="tel" class="form-control" id="contact" name="contact" value='.$row['contact'].'>
                        </div>
    						       </div>
			              <div class="form-group">
                         <label for="name" class="col-sm-2 control-label">Name</label>                       
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" value='.$row['uname'].'>
                        </div>
                        <label for="gender" class="col-sm-2 control-label">Gender</label>                       
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="gender" name="gender" value='.$row['gender'].'>
                        </div>
                    </div>
					          <div class="form-group">
                        <label for="district" class="col-sm-2 control-label">District</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="district" name="district" value='.$row['district'].'>
                        </div>
						            <label for="dob" class="col-sm-2 control-label">Date of Birth</label>                       
                        <div class="col-sm-4">
                        <input type="date" class="form-control" id="dob" name="dob" value='.$row['dob'].'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bank" class="col-sm-2 control-label">Bank Acc. Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="bank" name="bank" value='.$row['bank'].'>
                        </div>
                        <label for="aadhar" class="col-sm-2 control-label">Aadhar Number</label>                       
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="aadhar" name="aadhar" value='.$row['aadhar'].'>
                        </div>
                    </div>
					          <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="address" rows="3">'.$row['address'].'</textarea>
                        </div>
                    </div>';

                       }
                        } ?>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="save" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                  </form>


            </div>

		</div>
		</fieldset>
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