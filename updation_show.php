<?php
require('db_config.php');

$id = $_POST['id'];
//echo $disabilityCategoryId;
$sql = "SELECT `uid`, `uname`, `card_status`, `updation_status` FROM `user` WHERE uid='".$id."'";

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
    <li class="active">
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


<div class="container">
  <h3>Status of Your Updation : </h3><br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bhamashah ID</th>
        <th>Name</th>
        <th>Updation Status</th>
        <th>Card Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if ($result = mysqli_query($conn,$sql)) 
      {
        while ($row = mysqli_fetch_array($result)) 
        {
          echo '<tr>
          <td>'. $row['uid'].'</td>
          <td>'. $row['uname'].'</td>
          <td>'. $row['updation_status'].'</td>
          <td>'. $row['card_status'].'</td>
          </tr>';
        }
      } ?>
    </tbody>
  </table>
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