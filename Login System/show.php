
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Show data</title>
</head>

<body>


    <div class="card mt-5 ml-5" style="width: 18rem;">
        <div class="card-body">
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
        
        $sql = "SELECT * FROM `customers` WHERE cust_id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // print_r($row);

        echo "<h1>User Data</h1>";

        echo "<br><b>Customer Id =</b> ";
        $cust_id = $row ['cust_id'];
        echo $cust_id;
        
        echo "<br><b>Name =</b> ";
        $cust_name = $row['cust_name'];
        echo $cust_name;

        echo "<br><b>Mobile No =</b> ";
        $mobile_no = $row['mobile_no'];
        echo $mobile_no;

        echo "<br><b>Address =</b> ";
        $address = $row['address'];
        echo $address;

        echo "<br><b>Photo =</b> ";
        $photo = $row['photo'];
        echo $photo;

        echo "<br><b>User Id =</b> ";
        $user_id = $row['user_id'];
        echo $user_id;

        echo "<br><b>Created Date =</b> ";
        $created_date = $row['created_date'];
        echo $created_date;

        echo "<br><b>Status =</b> ";
        $status = $row['status'];
        echo $status;

    
      }

      else{
          echo "<h1>Please check details and try again</h1>";
      }
    
    ?>
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