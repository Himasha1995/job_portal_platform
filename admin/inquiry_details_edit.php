<?php
require 'connection.php';
$id = $_GET['id'];

if(isset($_POST["submit"]))
{
  $name  =$_POST['name'];
  $subject =$_POST['subject'];
  $email =$_POST['email'];
  $phone =$_POST['phone'];
  $message =$_POST['message'];  



    $sql = " UPDATE `contactus` SET `name`='$name',`subject`=' $subject',`email`='$email',`phone`='$phone',`message`='$message' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result){
      header ("Location: inquiry_details.php?msg=New Record Update Successfully");
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

<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../img/logo.png" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="show_details.php">
                    <i class=" uil uil-credit-card-search"></i>
                    <span class="link-name">Show Details</span>
                </a></li>
                <li><a href="job_post_detals.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Job Post Details</span>
                </a></li>
                <li><a href="apply_job.php">
                    <i class="uil uil-file-check-alt"></i>
                    <span class="link-name">Apply Job Details</span>
                </a></li>
                <li><a href="client_details.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Client Details</span>
                </a></li>
                <li><a href="company_detals.php">
                    <i class="uil uil-coins"></i>
                    <span class="link-name">Company Details</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <?php
      $sql ="SELECT * FROM `contactus` WHERE id = $id LIMIT 1";
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
            <span class="details">Name</span>
            <input type="text" name="name" value="<?php echo $row['name']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Subject</span>
            <input type="text" name="subject" value="<?php echo $row['subject']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" value="<?php echo $row['email']?>"  required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text"  name="phone" value="<?php echo $row['phone']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Message</span>
            <input type="text" name="message"  value="<?php echo $row['message']?>" required>
          </div>
        <div class="button">
          <input type="submit" value="Update" name="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>