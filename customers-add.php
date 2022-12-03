<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Add Customer</h1>
<form method="post" action="customers-add-save.php">
  <div class="mb-3">
    <label for="Customer_FirstName" class="form-label">Name</label>
    <input type="text" class="form-control" id="Customer_FirstName" aria-describedby="nameHelp" name="cName">
    <div id="nameHelp" class="form-text">Enter the customer's first name.</div>
  </div>
  <div class="mb-3">
    <label for="Customer_LastName" class="form-label">Name</label>
    <input type="text" class="form-control" id="Customer_LastName" aria-describedby="nameHelp" name="lName">
    <div id="nameHelp" class="form-text">Enter the customer's last name.</div>
  </div>
  <div class="mb-3">
    <label for="Customer_Age" class="form-label">Age</label>
    <input type="int" class="form-control" id="Customer_Age" aria-describedby="nameHelp" name="cAge">
    <div id="nameHelp" class="form-text">Enter the customer's age.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
