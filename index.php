<?php
include 'connection.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboad</title>
    <link rel="stylesheet" href="css/hindex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="js/home.js" defer></script>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-left:20%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:DodgerBlue;
  color: white;
}
</style>
  </head>
  <body>
    <header class="custom-bg text-center py-3">
      <h1 class="fw-bold h3 text-white my-1">Job Portal Dashboard</h1>
</header>

    <div class="container-fluid my-4 weather-data">
      <div class="row">
        <div class="col-xxl-3 col-md-4 px-lg-4">
          <h5 class="fw-bold">Enter a Job Tittle</h5>
          <form action="" method="GET">
          <input type="text" name="search"  value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
          <button type="submit" class="btn btn-primary custom-bg py-2 w-100 mt-3 mb-2">Search</button>
          </form>
</div>
</div>
</div>
          <table id="customers">
  <tr>
    <th>#</th>
    <th>Position and Employeer</th>
    <th>Job Description</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
  </tr> 
          <?php 
                                    $con = mysqli_connect("localhost","root","","job_portals");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM add_post WHERE CONCAT(jobtittle,company,open_date,close_date) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['jobtittle']; ?><br/><?= $items['company']; ?></td>
                                                   <td> <a href="view.php?id=<?php echo $items['company']; ?>">Click on the More Details</a></td>
                                                    <td><?= $items['open_date']; ?></td>
                                                    <td><?= $items['close_date']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
        </div>
       </div>     
    </div>
  
        
  </table>          
        
      
  </body>
</html>