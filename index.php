<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barske</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="background-color: #F8EDDB">
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A6B6E9">
        <a class="navbar-brand" href="index.html"><img src="barske.png" class="img-fluid" style="width:25t; height:50pt;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="beehive.html">The Beehive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orchard.html">The Orchard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tiki.html">The Tipsy Tiki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review.html">Drink Reviews</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<img src="beehive.png" class="img-fluid" style="width:25t; height:50pt;">" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Beehive</h5>
    <p class="card-text">564 Moore Avenue, Dallas TX, 75207</p>
    <a href="beehive.html" class="btn btn-primary">The Beehive</a>
  </div>
</div>
    
    <h1 style="text-align:center;">Welcome to Barske!</h1>
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
