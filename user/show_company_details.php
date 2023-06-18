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
    <link rel="stylesheet" href="../css/show_jobseeker_company_details.css">
    <link rel="stylesheet" href="../css/uindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>


<div class="container">
  <h1>Company Details</h1><br/>
  <a class="btn btn-primary" href="add_company.php" role="button">Add Company</a><br><br/>
  <a class="btn btn-danger" href="index.php" role="button">Back</a><br>

<br/>
  <div class="row">
    <div class="col-18">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Company Logo</th>
            <th scope="col">Comapny Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>

          <tr>
            <?php
           
      $query=mysqli_query($conn,"select * from `add_company`");
      while($row=mysqli_fetch_array($query)){
              ?>
              <tr>
              <td><?php echo $row['id'] ?></td>
              <td> <img style="width:100px;" src="admin/image/"<?php echo $row['filename']; ?>"> </td>
              <td><?php echo $row['company']?></td>
              <td><?php echo $row['email']?></td>
              <td><?php echo $row['address']?></td>
              <td>
              <a href="company_edit.php?id=<?php echo $row['id']?>" class='btn btn-primary'>EDIT</a>
              <a href="company_delete.php?id=<?php echo $row['id']?>" class='btn btn-danger'>DELETE</a>
              </td>
            </tr>
              
            <?php
            }
            
        ?>
        </thead>
        </tbody>
      </table>
    </div>
  </div>
</div>
</html>