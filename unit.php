<?php

include_once('config/connect.php');

$selected = "";


if (isset($_POST['submit']))
{
  if (!empty($_POST['select']))
  {
    foreach ($_POST['select'] as $selected)
    {
      $id = $selected;
    }
  }
}


$query = "select sum(party_score) as sum from announced_pu_results where polling_unit_uniqueid = '$selected'";
$results = mysqli_query($conn, $query);

while ($rows = mysqli_fetch_assoc($results)) 
{
  $output = "summed total results:" . " " . $rows['sum'];
}


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Voting App</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md" id="mainNav">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarContainer" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
      Home
      <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" href="index.php">PollApp</a>

    <div class="navbar-collapse collapse" id="navbarContainer" aria-expanded="false" style="">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="unit.php">Unit</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="heading-content">
          <?php 

          echo "<h1>$output</h1>";

            ?>
          
          <div class="line"></div>
        </div>
      </div>
    </div>
  </div>
</header>

<form method="post">
<div class="container main-content"> 
  <div class="row">
    
      
      <select class="form-select" name="select[]">
      <option value="8">Unit One</option>
      <option value="9">Unit Two</option>
      <option value="10">Unit Three</option>
      <option value="11">Unit Four</option>
      <option value="12">Unit Five</option>
      <option value="13">Unit Six</option>
      <option value="15">Unit Seven</option>
      <option value="16">Unit Eight</option>
      <option value="18">Unit Nine</option>
      <option value="19">Unit Ten</option>
      <option value="20">Unit Eleven</option>
      <option value="21">Unit Twelve</option>
      <option value="22">Unit Thirteen</option>
      <option value="23">Unit Fourteen</option>
      <option value="24">Unit Fifteen</option>
      <option value="25">Unit Sixteen</option>
      <option value="26">Unit Seventeen</option>
      <option value="27">Unit Eighteen</option>
    </select>
      
      
      <div class="clearfix">
        <button type="submit" name="submit" class="btn float-right btn-more" href="">Sum</button>
      </div>
    </div>
  </div>
</form>
</div>



  <!-- script -->
  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
</body>
</html>
