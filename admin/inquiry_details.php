<?php 
include "header.php";
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
    <link rel="stylesheet" href="../css/aindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<div class="container">
<h1> Inqiry  Details</h1><br>

<?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

  <div class="row">
    <div class="col-18">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>

          <?php
            $sql="SELECT * FROM `contactus`";
            $result= mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['subject']?></td>
              <td><?php echo $row['email']?></td>
              <td><?php echo $row['phone']?></td>
              <td><?php echo $row['message']?></td>
              <td><?php date_default_timezone_set('Asia/Kolkata');
                 $date = date('d-m-Y'); echo $date;?></td>
              <td>
              <a href="inquiry_details_delete.php?id=<?php echo $row['id']?>" class='btn btn-danger'>DELETE</a>
              </td>
            </tr>
              
            <?php
            }
            
        ?>
        </thead>
        </tbody>

        <?php  date_default_timezone_set('Asia/Kolkata');$date = date('d-m-Y');
                echo $date; ?>
      </table>
    </div>
  </div>
</div>
</html>