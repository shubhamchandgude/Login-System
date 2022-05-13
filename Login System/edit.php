
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit product data</title>
</head>

<body>
    <?php
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
      //   echo $id;
      //   $result = $crud -> getAttendeeDetails($id);
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "company_portal";

      $conn = mysqli_connect($servername, $username, $password, $database);
      
      $sql = "SELECT * FROM `products` WHERE prod_id=$id";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      // print_r($row);


        $prod_id = $row ['prod_id'];
        $cust_id = $row['cust_id'];
        $name = $row['name'];
        $qty = $row['qty'];
        $mrp = $row['mrp'];
        $image = $row['image'];
        $description = $row['description'];
        $user_id = $row['user_id'];
        $job_status = $row['job_status'];
        $updated_date = $row['updated_date'];


    }
?>

<div class="container mb-1">
      <h1 class="text-center text-capitalize pt-2">Update Product Details</h1>
      <hr class="w-25 mx-auto pt-0">

      <div class="w-50 mx-auto">
        <form action="update.php" method="POST">
          <div class="form-group">
            <label for="fname">Prod Id:</label>
            <input type="text" class="form-control" placeholder="Enter Prod Id" id="fname" value="<?php echo $prod_id;?>" name="prod_id">
          </div>
          <div class="form-group">
            <label for="pwd">Cust Id:</label>
            <input type="text" class="form-control" placeholder="Enter Cust Id" id="pwd" value="<?php echo $cust_id;?>" name="cust_id">
          </div>
          <div class="form-group">
            <label for="pwd">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" id="pwd"value="<?php echo $name;?>" name="name">
          </div>
          <div class="form-group">
            <label for="pwd">Qty:</label>
            <input type="text" class="form-control" placeholder="Enter Qty" id="pwd" value="<?php echo $qty;?>" name="qty">
          </div>
          <div class="form-group">
            <label for="pwd">MRP:</label>
            <input type="text" class="form-control" placeholder="Enter MRP" id="pwd" value="<?php echo $mrp;?>" name="mrp">
          </div>
          <div class="form-group">
            <label for="pwd">Image:</label>
            <input type="text" class="form-control" placeholder="Enter Image" id="pwd" value="<?php echo $image;?>" name="image">
          </div>
          <div class="form-group">
            <label for="pwd">Description:</label>
            <input type="text" class="form-control" placeholder="Enter Description" id="pwd" value="<?php echo $description;?>" name="description">
          </div>
          <div class="form-group">
            <label for="pwd">User Id:</label>
            <input type="text" class="form-control" placeholder="Enter User Id" id="pwd" value="<?php echo $user_id;?>" name="user_id">
          </div>
          <div class="form-group">
            <label for="pwd">Job Status:</label>
            <input type="text" class="form-control" placeholder="Enter Job Status" id="pwd" value="<?php echo $job_status;?>" name="job_status">
          </div>
          <div class="form-group">
            <label for="pwd">Updated Date:</label>
            <input type="text" class="form-control" placeholder="Enter Updated Date" id="pwd" value="<?php echo $updated_date;?>" name="updated_date">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>

      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
   
</body>

</html>