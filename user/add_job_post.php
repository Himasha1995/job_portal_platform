<?php
include "connection.php"
?>

<link rel="stylesheet" href="../css/uadd_job.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<a href="index.php" class="btn btn-danger float-end">BACK</a>

<div class="container">
    <div class="title">Add New Job Post</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Job Title</span>
            <input type="text" name="jobtittle" required>
          </div>
          <div class="input-box">
            <span class="details">Location</span>
            <input type="text"  name="location" required>
          </div>
          <div class="input-box">
            <span class="details">Job Description</span>
            <input type="text" name="jobdesription" required>
          </div>
          <div class="input-box">
            <span class="details">Salary Range</span>
            <input type="text"  name="salary" required>
          </div>
          <div class="input-box">
            <span class="details">Required Qualifiaction</span>
            <input type="text" name="qualification" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email"  required>
          </div>
        <div class="button">
          <input type="submit" value="Add Job" name="submit">
        </div>
      </form>

<?php
if(isset($_POST["submit"]))
{
  $jobtittle  =$_POST['jobtittle'];
  $jobdesription =$_POST['jobdesription'];
  $location=$_POST['location'];
  $salary =$_POST['salary'];
  $qualification =$_POST['qualification'];
  $email =$_POST['email'];  

  require_once  'connection.php';


    $sql = "INSERT INTO `add_post`(`jobtittle`, `jobdesription`, `salary`, `qualification`, `email`) VALUES ('$jobtittle','$jobdesription','$salary',' $qualification',' $email')";

    $result = mysqli_query($conn,$sql);

    if($result){
      //header ("Location: job_post_detals.php?msg=New Record Created Successfully");
    }
    else{
      echo "Failed: ". mysqli_error($conn);
    }
      
}


?>
    </div>
  </div>
