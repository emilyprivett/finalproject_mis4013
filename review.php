<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barske</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <body style="background-color: #F8EDDB">
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A6B6E9">
        <a class="navbar-brand" href="index.php"><img src="barske.png" class="img-fluid" style="width:25t; height:50pt;"></a>
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
    <h1 style="text-align:center;">Drink Reviews</h1>
    <div id="myGoogleChart" style="width:100%; max-width:700px; height:600px;"></div>

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
<div id="myGoogleChart" style="width:100%; max-width:700px; height:600px; display: block; margin-left: auto; margin-right: auto;"></div>

    <script>
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);
    

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Bar', 'Average Star Review'],
                ['Tequila Honey Bee', 5],
                ['Honey Rose Old Fashioned', 3],
                ['Honey Mojito', 1],
                ['Honey Martini', 2],
                ['Cider Margarita', 4],
                ['Appletini', 5],
                ['Cider Bellini', 5],
                ['Maui Mule', 5],
                ['Bahama Mama', 1],
                ['Blue Hawaiian Punch', 2],
                ['Pina Colada Sangria', 1],
            ]);
            
            var options = {
                title: 'Barske Drink Reviews',
                colors: ['purple'],
            };

            var chart = new google.visualization.BarChart(document.getElementById('myGoogleChart'));
            chart.draw(data, options);
        }
    </script>


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

