<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form </title>
    <link rel="stylesheet" href="css/signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
    <?php
     if(isset($_POST['submit'])){
      $fullname = $_POST["fullname"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $password = $_POST["password"];
      $confirmPassword = $_POST["repeat_password"];

      $passwordHash = password_hash($password, PASSWORD_DEFAULT);

      $errors = array();

      if(empty($fullname) OR empty($username) OR empty($email) OR empty($phone) OR empty($password) OR empty($confirmPassword)) {
        array_push($errors, "All fields are required");
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
      }
      if(strlen($password)<8) {
        array_push($errors,"Password must be at least 8 characters long");
      }
      if($password!==$confirmPassword) {
        array_push($errors,"Password does not match");
      }

      if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
      }else{
        require_once "connection.php";
        $sql = "INSERT INTO users (fullname,username,email,phone,password) VALUES (?, ?, ? ,?,?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        if($prepareStmt) {
          mysqli_stmt_bind_param($stmt,"sssss",$fullname,$username,$email,$phone,$confirmPassword);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>You are Registered Successfully!</div>";
        }else{
          die("Something went wrong");
        }
        header('Location: user/index.php');
      }
    }

    ?>
      <form action="signup.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="repeat_password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Sign Up" name="submit">
        </div>
        <div class="form-link">
            <span>Do you have an account? <a href="login.php" class="link signup-link">Log In</a></span>
         </div>
      </form>
    </div>
  </div>

</body>
</html>