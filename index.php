<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:codegraphsdb.database.windows.net,1433; Database = submissionDicodingCRUD", "codegraphs", "CUMI12panggang");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "codegraphs@codegraphsdb", "pwd" => "CUMI12panggang", "Database" => "submissionDicodingCRUD", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:codegraphsdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Dicoding 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
          <div class="card-header">
            Data Diri
          </div>
          <div class="card-body">
              <form method="post" action="index.php">
               <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name"/>
               <div>
                   
               <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="E-Mail"/>
               <div>
                   
               
               <div class="form-group">
                    <input type="text" name="job" class="form-control" placeholder="Jobs"/>
               <div>
                   
               
               <div class="form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date"/>
               <div>
               <input type="submit" name="submit" class="btn btn-primary"/>
              </form>
          </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
