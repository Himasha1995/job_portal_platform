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
    <link rel="stylesheet" href="../css/uindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Job Seeker Dashboard Panel</title> 
</head>

<div class="container">
  <h1> Job Details</h1>
  
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
     <a class="btn btn-danger" href="index.php" role="button">Back</a><br><br/>

     <div class="add_job">
     <a class="btn btn-primary" href="add_job_post.php" role="button">Add Job Post</a><br/><br/>

    </div><br>
  <div class="row">
    <div class="col-20">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Job Title</th>
            <th scope="col">Job Description</th>
            <th scope="col">Location</th>
            <th scope="col">Salary Range</th>
            <th scope="col">Required Qualifiaction</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
       
          <tr>
            <?php
            $sql="select * from add_post";
            $result= mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['jobtittle']?></td>
              <td><?php echo $row['jobdesription']?></td>
              <td><?php echo $row['location']?></td>
              <td><?php echo $row['salary']?></td>
              <td><?php echo $row['qualification']?></td>
              <td><?php echo $row['email']?></td>
              <td>
            <a href="job_post_edit.php?id=<?php echo $row['id']?>" class='btn btn-primary'>EDIT</a>
              <a href="job_post_delete.php?id=<?php echo $row['id']?>" class='btn btn-danger'>DELETE</a>
              </td>
            </tr>
              
            <?php
            }
            
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</html>