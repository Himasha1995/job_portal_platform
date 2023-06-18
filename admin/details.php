<?php 
include "connection.php";
 include "header.php";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Post View Details </h1>
                            <a href="job_post_detals.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM `add_post` WHERE `id`='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $post = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Job Title</label>
                                        <p class="form-control">
                                            <?=$post['jobtittle'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Job Description</label>
                                        <p class="form-control">
                                            <?=$post['jobdesription'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <p class="form-control">
                                            <?=$post['location'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary Range</label>
                                        <p class="form-control">
                                            <?=$post['salary'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Required Qualifiaction</label>
                                        <p class="form-control">
                                            <?=$post['qualification'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$post['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Open Date</label>
                                        <p class="form-control">
                                            <?=$post['open_date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Close Date</label>
                                        <p class="form-control">
                                            <?=$post['close_date'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 

</body>
</html>

