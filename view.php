<?php 
include "connection.php";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
        <div class="row">
            <div class="col-md-25">
                <div class="card">
                    <div class="card-header">
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
						
                    </div>
                    <div class="card-body">

					<?php
					$id=$_GET['id'];
                    $query=mysqli_query($conn,"select * from `add_post` where company='$id'");
					while($row=mysqli_fetch_array($query)){

						?>
                        <div class="mb-3">
                                        <label>#</label>
                                        <p class="form-control">
										<?php echo $row['id']; ?>
                                        </p>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label>Job Title</label>
                                        <p class="form-control">
										<?php echo $row['jobtittle']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Job Description</label>
                                        <p class="form-control">
										<?php echo $row['jobdesription']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <p class="form-control">
										<?php echo $row['location']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary Range</label>
                                        <p class="form-control">
										<?php echo $row['salary']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Required Qualifiaction</label>
                                        <p class="form-control">
										<?php echo $row['qualification']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
										<?php echo $row['email']; ?>
                                        </p>
                                    </div>
									<div class="mb-3">
                                        <label>Company</label>
                                        <p class="form-control">
										<?php echo $row['company']; ?>
                                        </p>
                                    </div>


									<?php
					}
				?>
                			<td><a href="view_company_details.php?id=" class='btn btn-primary'>View Company Details</a>

							<td><a href="apply.php?id=" class='btn btn-primary'>Apply Now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 

</body>
</html>

