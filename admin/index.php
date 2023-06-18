<?php
include "connection.php";
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/aindex.css">
     
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

            
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
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
                <li><a href="client_details.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Inquiry Details</span>
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

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-users-alt"></i>
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
                        <i class="uil uil-coins"></i>
                        <span class="text">Total Company</span>
                        <?php
                            $dash_category_query = "SELECT * FROM add_company";
                            $dash_category_query_run =  mysqli_query($conn, $dash_category_query);

                            if($total_company = mysqli_num_rows($dash_category_query_run)){
                                echo '<h4 class="mb-0"> '.$total_company.' </h4>';
                            }else
                            {
                                '<h4 class="mb-0"> No data </h4>';
                            }

                        ?>
                    </div>
                    <div class="box box3">
                        <i class=" uil uil-align-alt"></i>
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
                    <div class="box box4">
                        <i class="uil uil-analytics"></i>
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
                </div>
            </div>

        </div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>