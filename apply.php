<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/apply.css">
    <title>apply job</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="" method="post" enctype="multipart/form-data" >
          <h3>Apply Job</h3>
          <a class="btn btn-danger" href="index.php" role="button">Back</a><br>
          <input type="file" name="myfile"> <br>
          <label for="fullname">Full Name</label>
          <input type="text" id="full_name" name="full_name" placeholder="Enter your full name"><br>
          <label for="email">Email </label>
          <input type="text" id="email" name="email" placeholder="Enter your email address"><br>
          <label for="address"> Address</label>
          <input type="text" id="address" name="address" placeholder="Enter your  address"><br>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password"><br>
          <label for="jobtittle">Job Title</label>
          <input type="text" id="jobtittle" name="jobtittle" placeholder="Enter your jobtittle"><br>
          <label for="date">Birth Date</label>
          <input type="date"   name="birth_date" placeholder="Select your date"><br>
          <button type="submit" class="btn btn-primary" name="save">Upload</button>
        </form>
      </div>
    </div>
  </body>
</html>