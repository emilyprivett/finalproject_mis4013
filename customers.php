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
            </ul>
        </div>
    </nav>
    <h1 style="text-align:center;">The Beehive</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th> Customer ID </th>
          <th> First Name </th>
          <th> Last Name </th>
          <th> Age </th>
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
        
$sql = "SELECT * FROM Customer";
        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
   <tr>
      <td><?=$row["CustomerID"]?></td>
      <td><?=$row["Customer_FirstName"]?></td>
      <td><?=$row["Customer_LastName"]?></td>
      <td><?=$row["Customer_Age"]?></td>
     <td>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCustomer<?=$row["Customer_ID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editCustomer<?=$row["Customer_ID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCustomer<?=$row["Customer_ID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editCustomer<?=$row["Customer_ID"]?>Label">Edit Customer</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editCustomer<?=$row["Customer_ID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editCustomer<?=$row["Customer_ID"]?>Name" aria-describedby="editCustomer<?=$row["Customer_ID"]?>Help" name="cName" value="<?=$row['Customer_FirstName']?>">
                          <div id="editCustomer<?=$row["Customer_ID"]?>Help" class="form-text">Enter the customer's first name.</div>
                        </div>
                         <div class="mb-3">
                          <label for="editCustomer<?=$row["Customer_ID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editCustomer<?=$row["Customer_ID"]?>Name" aria-describedby="editCustomer<?=$row["Customer_ID"]?>Help" name="lName" value="<?=$row['Customer_LastName']?>">
                          <div id="editCustomer<?=$row["Customer_ID"]?>Help" class="form-text">Enter the customer's last name.</div>
                        </div>
                        <input type="hidden" name="cid" value="<?=$row['Customer_ID']?>">
                        <input type="hidden" name="saveType" value="Edit">
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
             <td>
              <form method="post" action="">
                <input type="hidden" name="cid" value="<?=$row["Customer_ID"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" value="Delete">
              </form>
            </td>
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
    <a href="customers-add.php" class="btn btn-primary"> Add New<a/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

