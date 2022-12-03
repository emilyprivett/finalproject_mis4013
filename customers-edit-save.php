<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
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
$cName = $_POST['cName'];

$sql = "update Customer set Customer_FirstName=?, Customer_LastName=?, Customer_Age=? WHERE Customer_ID=?";
//echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $cName,$_POST['lName'],$_POST['cAge'],$_POST['cid']);
    $stmt->execute();
?>
    
    <h1>Edit Customer</h1>
<div class="alert alert-success" role="alert">
  Customer Edited.
</div>
    <a href="customers.php" class="btn btn-primary">Go back</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
