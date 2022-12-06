<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barske</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #F8EDDB">
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A6B6E9">
        <a class="navbar-brand" href="index.php"><img src="barske.png" class="img-fluid" style="height:35pt;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="beehive.php">The Beehive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orchard.php">The Orchard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tiki.php">The Tipsy Tiki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review.php">Drink Reviews</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Barske Founders</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 style="text-align:center;">Welcome to Barske!</h1>
  <div class="card-group">
  <div class="card" style="width:18rem; margin-left:1rem; margin-right:1rem;">
  <img class="card-img-top" src="beehive.png">
  <div class="card-body">
    <h5 class="card-title">The Beehive</h5>
    <p class="card-text">564 Moore Avenue, Dallas TX, 75207</p>
    <a href="beehive.php" class="btn btn-primary">The Beehive</a>
  </div>
  </div>
  <div class="card" style="width:18rem; margin-left:1rem; margin-right:1rem;">
  <img class="card-img-top" src="orchard.png">
  <div class="card-body">
    <h5 class="card-title">The Orchard</h5>
    <p class="card-text">2621 Brooke Street, Houston TX, 77035</p>
    <a href="orchard.php" class="btn btn-primary">The Orchard</a>
  </div>
  </div>    
  <div class="card" style="width:18rem; margin-left:1rem; margin-right:1rem;">
  <img class="card-img-top" src="tiki.png">
  <div class="card-body">
    <h5 class="card-title">The Tipsy Tiki</h5>
    <p class="card-text">934 Short Street, Austin TX, 78723</p>
    <a href="tiki.php" class="btn btn-primary">The Tipsy Tiki</a>
  </div>
  </div>
  </div>
  
<br></br>
<br></br>
   
<div class="100-px-wide">
  
  <div class="container">
  <h2>Our Bars</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
        <img src="barpicbeehive.jpg" alt="The Beehive" style="width:100%;">
      </div>

      <div class="item">
        <img src="orchardbarpic.webp" alt="The Orchard" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="barpictiki.jpg" alt="The Tipsy Tiki" style="width:100%;">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  
  </div>
  
    
    <?php
$servername = "localhost";
$username = "emilypri_skeco";
$password = "Projectdbskeco";
$dbname = "emilypri_skeco";
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from Bar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
