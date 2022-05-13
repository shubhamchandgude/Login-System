<?php

// print_r($_POST);

$prod_id = $_POST['prod_id'];
$cust_id = $_POST['cust_id'];
$name = $_POST['name'];
$qty = $_POST['qty'];
$mrp = $_POST['mrp'];
$image = $_POST['image'];
$description = $_POST['description'];
$user_id = $_POST['user_id'];
$job_status = $_POST['job_status'];
$updated_date = $_POST['updated_date'];


$servername = "localhost";
$username = "root";
$password = "";
$database = "company_portal";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "UPDATE `products` SET `prod_id`='$prod_id',`cust_id`='$cust_id',`name`='$name',`qty`='qty',`mrp`='$mrp',`image`='$image',`description`='$description',`user_id`='$user_id',`job_status`='$job_status',`updated_date`='$updated_date' WHERE  prod_id=$prod_id";

// echo $sql;
$update = mysqli_query($conn, $sql);
if($update){
    header("Location: user_page.php");

}


?>