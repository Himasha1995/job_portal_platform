<?php
require 'connection.php';

$id = $_GET['id'];

if(isset($_POST["submit"]))
{
  $filename  =$_POST['filename'];
  $company =$_POST['company'];
  $email=$_POST['email'];
  $address =$_POST['address'];
  $jobtittle =$_POST['jobtittle'];
  $about_us =$_POST['about_us'];  



    $sql = "UPDATE `add_company` SET `filename`='$filename',`company`=' $company',`email`=' $email',`address`='$address ',`jobtittle`=' $jobtittle',`about_us`='$about_us' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result){
      header ("Location: company_detals.php?msg=New Record Update Successfully");
    }
    else{
      echo "Failed: ". mysqli_error($conn);
    }
      
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/aindex.css">
    <link rel="stylesheet" href="../css/add_new_post.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>


<body>



    <?php
      $sql ="SELECT * FROM `add_company` WHERE id = $id LIMIT 1";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

    ?>

  <div class="container">
    <div class="title">Update Company  Details</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
        <div class="input-box">
          <div class="input-box">
            <span class="details">Company Logo</span>
            <input type="file" name="filename" value= "<img style="width:80px; src="image/<?php echo $row['filename']; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" name="company" value="<?php echo $row['company']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" value="<?php echo $row['email']?>"  required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text"  name="address" value="<?php echo $row['address']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Job Title</span>
            <input type="text" name="jobtittle"  value="<?php echo $row['jobtittle']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Comapny About Us</span>
            <input type="text" name="about_us" value="<?php echo $row['about_us']?>" required>
          </div>
        <div class="button">
          <input type="submit" value="Update" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>