<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barske</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="background-color: #F8EDDB">
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A6B6E9; font-family:Rockwell !important;">
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
    <h1 style="text-align:center; font-family:Rockwell; font-weight:bold;">The Tipsy Tiki Employee's</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="font-family:Rockwell;"> Employee ID </th>
          <th style="font-family:Rockwell;"> First Name </th>
          <th style="font-family:Rockwell;"> Last Name </th>
          <th style="font-family:Rockwell;"> Age </th>
          <th style="font-family:Rockwell;"> Years of Experience </th>
        </tr>
      </thead>
      <tbody>
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
$sql = "SELECT EmployeeID, Employee_FirstName, Employee_LastName, Employee_Age, Years_Of_Experience FROM Employee WHERE BarID=3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
   <tr>
      <td style="font-family:Rockwell;"><?=$row["EmployeeID"]?></td>
      <td style="font-family:Rockwell;"><?=$row["Employee_FirstName"]?></td>
      <td style="font-family:Rockwell;"><?=$row["Employee_LastName"]?></td>
      <td style="font-family:Rockwell;"><?=$row["Employee_Age"]?></td>
     <td style="font-family:Rockwell;"><?=$row["Years_Of_Experience"]?></td>
   </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
      </tbody>
    </table>
    <br />
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
