<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/stylesheets/font-awesome-5.7.1.css">
    <link rel="stylesheet" href="../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" href="../public/stylesheets/mdb.css">
	 <link rel="stylesheet" href="../public/stylesheets/style.css">
	
	
    <title>Show Table</title>
</head>
<body>
<!-- Main Navigation bar -->
<nav class="navbar navbar-expand-md blue-gradient-rgba navbar-dark">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a href="first.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
            <li class="nav-item active">
                <a href="read_tbl.php" class="nav-link">Read</a>
            </li>
			 <li class="nav-item active">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>
<?php
mysql_connect("localhost","root","");
mysql_select_db("comp");
$sql_qry="select id,name,email,mobile,profile_img from employee";
$resultset=mysql_query($sql_qry);
$count=mysql_num_rows($resultset);
?>

<!-- read Table Section -->
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover text-center mt-3">
                <thead class="blue-gradient-rgba text-white">
                    <tr class="text-uppercase">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
						<th>Action</th>
						<th>Action</th>
							
					</tr>
                </thead>
                <?php 
$i=1;
while ($row=mysql_fetch_assoc($resultset)) 
{
?>
<tr>
	<td><?php echo ($row['id']);?></td>
	<td><?php echo ucfirst($row['name']);?></td>
	<td><?php echo ($row['email']);?></td>
	<td><?php echo ($row['mobile']);?></td>
	<td><img src="../uploads/<?php echo $row['profile_img'];?>" width="50" height="50"/></td>
	<td><a href="delete.php?uid=<?php echo $row['id'];?>">Delete</a>
	<a href="update.php?uid=<?php echo $row['id'];?>">Update</a></td>
</tr>	
<?php
$i++;
}
?>
            </table>
        </div>
    </div>
</div>
<!-- Main Footer -->
<footer class=" blue-gradient-rgba text-white text-center fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Copyright &copy; 2019</h3>
                <h6>All Rights Reserved</h6>
                <h6>Developed by Gulendra</h6>
            </div>
        </div>
    </div>
</footer>




<!-- JavaScripts -->
<script src="/public/javascripts/jquery-3.3.1.min.js"></script>
<script src="../public/javascripts/popper.min.js"></script>
<script src="/public/javascripts/bootstrap.js"></script>
<script src="../public/javascripts/mdb.js"></script>
</body>
</html>