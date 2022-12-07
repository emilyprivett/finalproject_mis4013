
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title style="font-family:Rockwell; font-weight:bold;">Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="font-family:Rockwell; font-weight:bold;">Edit Customer</h1>
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

$sql = "SELECT * FROM Customer WHERE CustomerID=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_POST['cid']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

<form method="post" action="customers-edit-save.php">
  <div class="mb-3">
    <label for="Customer_FirstName" class="form-label" style="font-family:Rockwell;">Name</label>
    <input type="text" class="form-control" id="Customer_FirstName" aria-describedby="nameHelp" name="cName">
    <div id="nameHelp" class="form-text" style="font-family:Rockwell;">Enter the customer's first name.</div>
  </div>
  <div class="mb-3">
    <label for="Customer_LastName" class="form-label" style="font-family:Rockwell;">Name</label>
    <input type="text" class="form-control" id="Customer_LastName" aria-describedby="nameHelp" name="lName">
    <div id="nameHelp" class="form-text" style="font-family:Rockwell;">Enter the customer's last name.</div>
  </div>
  <div class="mb-3">
    <label for="Customer_Age" class="form-label" style="font-family:Rockwell;">Age</label>
    <input type="int" class="form-control" id="Customer_Age" aria-describedby="nameHelp" name="cAge">
    <div id="nameHelp" class="form-text" style="font-family:Rockwell;">Enter the customer's age.</div>
  </div>
  <input type="hidden" name="cid" value="<?=$row['CustomerID']?>">
  <button type="submit" class="btn btn-primary" style="font-family:Rockwell;">Submit</button>
</form>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
