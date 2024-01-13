<?php

include_once('config/connect.php');

$query = "select * from announced_pu_results";
$results = mysqli_query($conn, $query);

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
          <h1>Check Summed results</h1>
          <div class="line"></div>
         <a href="unit.php"><button type="button" class="btn">Check</button></a>
        </div>
      </div>
    </div>
  </div>
</header>



<div class="container main-content"> 
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Party</th>
      <th scope="col">Result</th>
      <th scope="col">UniqueId</th>
      <th scope="col">Entered by</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

    <?php 

while ($rows = mysqli_fetch_assoc($results)) 
{
  ?>

    <tr>
      <th scope="row"> <?php echo $rows['result_id'] ?>
</th>
      <td> <?php echo $rows['party_abbreviation'] ?></td>
      <td> <?php echo $rows['party_score'] ?></td>
      <td> <?php echo $rows['polling_unit_uniqueid'] ?></td>
      <td> <?php echo $rows['entered_by_user'] ?></td>
      <td> <?php echo $rows['date_entered'] ?></td>
    </tr>
<?php 
}
?>
  </tbody>
</table>
      
      
    </div>
  </div>
</div>

  <!-- script -->
  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
</body>
</html>
