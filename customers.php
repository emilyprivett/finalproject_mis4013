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
    <h1 style="text-align:center;">Barske Customer's</h1>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "INSERT INTO Customer (Customer_FirstName, Customer_LastName, Customer_Age) values (?,?,?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("ssi", $_POST['cName'],$_POST['lName'],$_POST['cAge']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New customer added.</div>';
      break;
    case 'Edit':
      $sqlEdit = "UPDATE Customer SET Customer_FirstName=?, Customer_LastName=?, Customer_Age=? WHERE CustomerID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ssii", $_POST['cName'],$_POST['lName'],$_POST['CAge'],$_POST['cid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Customer edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "DELETE FROM Customer WHERE CustomerID=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("i", $_POST['cid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">Customer deleted.</div>';
      break;
  }
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
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCustomer<?=$row["CustomerID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editCustomer<?=$row["CustomerID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCustomer<?=$row["CustomerID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editCustomer<?=$row["CustomerID"]?>Label">Edit Customer</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editCustomer<?=$row["CustomerID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editCustomer<?=$row["CustomerID"]?>Name" aria-describedby="editCustomer<?=$row["CustomerID"]?>Help" name="cName" value="<?=$row['Customer_FirstName']?>">
                          <div id="editCustomer<?=$row["CustomerID"]?>Help" class="form-text">Enter the customer's first name.</div>
                        </div>
                         <div class="mb-3">
                          <label for="editCustomer<?=$row["CustomerID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editCustomer<?=$row["CustomerID"]?>Name" aria-describedby="editCustomer<?=$row["CustomerID"]?>Help" name="lName" value="<?=$row['Customer_LastName']?>">
                          <div id="editCustomer<?=$row["CustomerID"]?>Help" class="form-text">Enter the customer's last name.</div>
                        </div>
                        <div class="mb-3">
                          <label for="editCustomer<?=$row["CustomerID"]?>Age" class="form-label">Age</label>
                          <input type="int" class="form-control" id="editCustomer<?=$row["CustomerID"]?>Age" aria-describedby="editCustomer<?=$row["CustomerID"]?>Help" name="cAge" value="<?=$row['Customer_Age']?>">
                          <div id="editCustomer<?=$row["CustomerID"]?>Help" class="form-text">Enter the customer's age.</div>
                        </div>
                        <input type="hidden" name="cid" value="<?=$row['CustomerID']?>">
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
                <input type="hidden" name="cid" value="<?=$row["CustomerID"]?>" />
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
    <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomer">
        Add New
      </button>

      <!-- Modal -->
      <div class="modal fade" id="addCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCustomerLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addCustomerLabel">Add Customer</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="Customer_FirstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="Customer_FirstName" aria-describedby="nameHelp" name="cName">
                  <div id="nameHelp" class="form-text">Enter the customer's first name.</div>
                </div>
                <div class="mb-3">
                  <label for="Customer_LastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="Customer_LastName" aria-describedby="nameHelp" name="lName">
                  <div id="nameHelp" class="form-text">Enter the customer's last name.</div>
                </div>
                <div class="mb-3">
                  <label for="Customer_Age" class="form-label">Customer Age</label>
                  <input type="int" class="form-control" id="Customer_Age" aria-describedby="nameHelp" name="cAge">
                  <div id="nameHelp" class="form-text">Enter the customer's Age.</div>
                </div>
                <input type="hidden" name="saveType" value="Add">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

