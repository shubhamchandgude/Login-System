<?php
// coonecting to database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "company_portal";

// create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "<br>";
}

$sql = "SELECT * FROM `customers`";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
        echo $row['cust_id']. ". " .  $row['cust_name'] ." ".  $row['mobile_no']  ." ".  $row['address'] ." " .  $row['photo']." " .  $row['user_id'] ." ". $row['created_date'] ." ".  $row['status'] . ".";
         echo "<br>";
     }


     
     echo "<br>";
     echo "<hr>";
     echo "<br>";

     
     $sql = "SELECT * FROM `products`";
     $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
        echo $row['prod_id']. ". " .  $row['cust_id'] ." ".  $row['name']  ." ".  $row['qty'] ." " .  $row['mrp']." " .  $row['image'] ." ". $row['description'] ." ".  $row['user_id'] . " ".  $row['job_status'] . " ".  $row['updated_date']  . ".";
         echo "<br>";
     }
     

?>