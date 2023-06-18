<?php
require 'connection.php';
include 'header.php';
$id = $_GET['id'];

if(isset($_POST["submit"]))
{
  $jobtittle  =$_POST['jobtittle'];
  $jobdesription =$_POST['jobdesription'];
  $location=$_POST['location'];
  $salary =$_POST['salary'];
  $qualification =$_POST['qualification'];
  $email =$_POST['email'];  



    $sql = "UPDATE `add_post` SET `jobtittle`='$jobtittle',`jobdesription`=' $jobdesription',`location`=' $location',`salary`='$salary ',`qualification`=' $qualification',`email`='$email' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result){
      header ("Location: show_job_details.php?msg=New Record Update Successfully");
    }
    else{
      echo "Failed: ". mysqli_error($conn);
    }
      
}
?>
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" href="../css/add_new_post.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  
    




    <?php
      $sql ="SELECT * FROM `add_post` WHERE id = $id LIMIT 1";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

    ?>

  <div class="container">
    <div class="title">Update Job Post</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
        <div class="input-box">
          <div class="input-box">
            <span class="details">Job Title</span>
            <input type="text" name="jobtittle" value="<?php echo $row['jobtittle']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Job Description</span>
            <input type="text" name="jobdesription" value="<?php echo $row['jobdesription']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Location</span>
            <input type="text" name="location" value="<?php echo $row['location']?>"  required>
          </div>
          <div class="input-box">
            <span class="details">Salary Range</span>
            <input type="text"  name="salary" value="<?php echo $row['salary']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Required Qualifiaction</span>
            <input type="text" name="qualification"  value="<?php echo $row['qualification']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" value="<?php echo $row['email']?>" required>
          </div>
        <div class="button">
          <input type="submit" value="Update" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>