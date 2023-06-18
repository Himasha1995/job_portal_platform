<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>add company </title>
    <link rel="stylesheet" href="../css/aindex.css">
    <link rel="stylesheet" href="../css/add_new_post.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
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
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="company" name="company"  required>
          </div>
          <div class="input-box">
            <span class="details">Open Date</span>
            <input type="date" name="open_date"  required>
          </div>
          <div class="input-box">
            <span class="details">Close Date</span>
            <input type="date" name="close_date"  required>
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
  $company =$_POST['company'];
  $open_date =$_POST['open_date']; 
  $close_date =$_POST['close_date'];   

  require_once  'connection.php';


    $sql = "INSERT INTO `add_post`(`jobtittle`, `jobdesription`, `location`,`salary`, `qualification`, `email`,  `company`, `open_date`, `close_date`) VALUES ('$jobtittle','$jobdesription','  $location','$salary',' $qualification',' $email',' $company','$open_date','$close_date')";

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

</body>
</html>