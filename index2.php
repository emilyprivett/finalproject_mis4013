<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barske</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="carousel.css">
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

 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="barpicbeehive.jpg" style="width:100%">
    <div class="text">The Beehive</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="orchardbarpic.webp" style="width:100%">
    <div class="text">The Orchard</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="barpictiki.jpg" style="width:100%">
    <div class="text">The Tipsy Tiki</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
  <script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 6000); // Change image every 6 seconds
}
}
</script>
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
