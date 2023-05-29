<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    

<?php
// Database credentials
$host = 'localhost';
$dbname = 'uk';
$username = 'root';
$password = '';

try {
    // Connect to the database
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);?>

    <div calss="row">
            <table class="table table-bordered">
                <thead>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>BOD</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Cpassword</th>
                <th>Phone</th>
                <th>Address</th>
    
                </thead>
                <?php

    // Prepare and execute the query
    $query = "SELECT * FROM regp";
    $statement = $pdo->prepare($query);
    $statement->execute();

    // Fetch the data
    $result = $statement->fetchAll();

    // Process the fetched data
    if ($result) {
        foreach ($result as $row) {
            // Access individual columns using $row['column_name']
    echo"<tr>";
    echo"<td>".$row['fname']."</td>";
    echo"<td>".$row['lname']."</td>";
    echo"<td>".$row['bod']."</td>";
    echo"<td>".$row['gen']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['pwd']."</td>";
    echo"<td>".$row['cpwd']."</td>";
    echo"<td>".$row['phone']."</td>";
    echo"<td>".$row['addr']."</td>";
   
        }
    } else {
        echo "No records found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
</body>
</html>