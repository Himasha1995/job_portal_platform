<?php 
include "connection.php";
include 'downloads.php';
include '../filesLogic.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Apply User View Details </h1>
                            <a href="show_apply_details.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM `apply` WHERE `id`='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $post = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>User Name</label>
                                        <p class="form-control">
                                            <?=$post['full_name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Job Tittle</label>
                                        <p class="form-control">
                                            <?=$post['jobtittle'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Email</label>
                                        <p class="form-control">
                                            <?=$post['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User City</label>
                                        <p class="form-control">
                                            <?=$post['address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User BirthDate</label>
                                        <p class="form-control">
                                            <?=$post['birth_date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> User Resume</label>
                                        <p class="form-control">
                                            <?=$post['name'];?>
                                    </div>
                                    <a href="../uploads<?php echo $post['name']; ?>" download>Download</td>
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

