<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Autocomplete Search Box in PHP MySQL - Tutsmake.com</title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Bootstrap Css -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
<div class="container">
  <div class="row">
     <h2>Search Here</h2>
     <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="term" id="term" placeholder="Search data" required class="form-control" value=""<?php if(isset($_GET['term'])){echo $_GET['term']; } ?>>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
     <!-- <input type="text" name="term" id="term" placeholder="search here...." class="form-control">   -->
  </div>
  <div class="col-md-12">
    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                                    $con = mysqli_connect("localhost","root","","my_db");

                                    if(isset($_GET['term']))
                                    {
                                        $filtervalues = $_GET['term'];
                                        $query = "SELECT * FROM mytable WHERE NAME_OF_COMPANY LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) != 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['NAME_OF_COMPANY']; ?></td>
                                                    <td><?= $items['SYMBOL']; ?></td>
                                                    <!-- <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['email']; ?></td> -->
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
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  $(function() {
     $( "#term" ).autocomplete({
       source: 'ajax-db-search.php',
     });
  });
</script>
</body>
</html>