<?php
include "connection.php"
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/uindex.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="show_job_details.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Jobs Details</span>
                </a></li>
                <li><a href="show_company_details.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Company Details</span>
                </a></li>
                <li><a href="show_apply_details.php">
                    <i class="uil uil-share"></i>
                    <span class="link-name">User Apply Details</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../index.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                    <span class="text">Total Client</span>
                        <?php
                            $dash_category_query = "SELECT * FROM users";
                            $dash_category_query_run =  mysqli_query($conn, $dash_category_query);

                            if($total_company = mysqli_num_rows($dash_category_query_run)){
                                echo '<h4 class="mb-0"> '.$total_company.' </h4>';
                            }else
                            {
                                '<h4 class="mb-0"> No data </h4>';
                            }

                        ?>
                    </div>
                    <div class="box box2">
                        <span class="text">Total Apply Jobs</span>
                        <?php
                            $dash_category_query = "SELECT * FROM `apply`";
                            $dash_category_query_run =  mysqli_query($conn, $dash_category_query);

                            if($total_job = mysqli_num_rows($dash_category_query_run)){
                                echo '<h4 class="mb-0"> '.$total_job.' </h4>';
                            }else
                            {
                                '<h4 class="mb-0"> No data </h4>';
                            }

                        ?>
                    </div>
                    <div class="box box3">
                        <span class="text">Total Jobs</span>
                        <?php
                            $dash_category_query = "SELECT * FROM `add_post`";
                            $dash_category_query_run =  mysqli_query($conn, $dash_category_query);

                            if($total_job = mysqli_num_rows($dash_category_query_run)){
                                echo '<h4 class="mb-0"> '.$total_job.' </h4>';
                            }else
                            {
                                '<h4 class="mb-0"> No data </h4>';
                            }

                        ?>
                    </div>
                </div>
            </div>

            
            </div>
        </div>
    </section>

    <script src="js/user.js"></script>
</body>
</html>