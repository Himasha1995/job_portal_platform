<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Login Form | CodingLab </title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="#" method="POST">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email" name="email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name="password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="login" value="Continue">
        </div>
      </form>
        <div class="option">or Connect With Social Media</div>
        <div class="twitter">
          <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
        </div>
        <div class="facebook">
          <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
        </div>
    </div>
<?php
session_start();
if(isset($_POST['login']))
{
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $sql="select password,usertype from login where email='$email'";
    $data=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($data);

    if($count>0)
    {
        $row=mysqli_fetch_assoc($data);
        $_SESSION['ROLE']=$row['usertype'];
        $_SESSION['IS_LOGIN']='yes';

        if($row['password']==$password)
        {
            if($row['usertype']=='admin')
            {
                header("Location:admin/index.php");
            }
            if($row['usertype']=='user')
            {
                header("Location:user/index.php");
            }
        }else{
            header("Location:login.php");
        }

    }
}
?>
  </body>
</html>