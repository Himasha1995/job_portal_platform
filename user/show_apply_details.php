<?php 
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/companydetails.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>

<div class="container">
<a href="index.php" class="btn btn-danger float-end">BACK</a>

    <h1>Appy User Details</h1><br>
  <div class="row">
    <div class="col-18">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Job Tittle</th>
            <th scope="col">User Email</th>
            <th scope="col">User City</th>
            <th scope="col">User Password</th>
            <th scope="col">User BirthDate</th>
            <th scope="col">CV</th>
            <th scope="col">Apply Date</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
          </tr>

          <tr>
            <?php
            $sql="SELECT * FROM apply";
            $result= mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['full_name']?> </td>
              <td><?php echo $row['jobtittle']?></td>
              <td><?php echo $row['email']?></td>
              <td><?php echo $row['address']?></td>
              <td><?php echo $row['password']?></td>
              <td><?php echo $row['birth_date']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php  date_default_timezone_set('Asia/Kolkata');$date = date('d-m-Y');
                echo $date; ?></td>
              
              <td> <a href="apply_job_details.php?id=<?php echo $row['id']?>" class="uil uil-file-check-alt" width="250" height="250"></a></td>
              <td>
              <a href="apply_details_delete.php?id=<?php echo $row['id']?>" class='btn btn-danger'>DELETE</a>
              </td>
            </tr>
              
            <?php
            }
            
        ?>
        </thead>
        <tbody>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
</html>