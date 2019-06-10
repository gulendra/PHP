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
	
    <title>FirstWebsite</title>
</head>
<body>
<!-- Main Navigation bar -->
<nav class="navbar navbar-expand-md blue-gradient-rgba navbar-dark" data-spy="affix">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="first.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
                <a href="register.php class="nav-link active">Register</a>
            </li>
            <li class="nav-item">
                <a href="read_tbl.php" class="nav-link">Read</a>
            </li>
			 <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
			
        </ul>
    </div>
</nav>
<!-- Main Content Section -->
<section class="p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-danger">PHP Admin dashboard</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, placeat!</p>
            </div>
        </div>
    </div>
</section>

<!--  Form -->
<section class="p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header blue-gradient-rgba text-center text-white">
                        <h3>Registeration filleds</h3>
                    </div>
                    <div class="card-body bg-light ">
                        <form action="trial.php" method="post">                                               
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name"></br>
										<input type="email" class="form-control" placeholder="Enter Email" name="email"></br>
										<input type="number" class="form-control" placeholder="Enter Mobile" name="mobile"></br>
										<input type="password" class="form-control" placeholder="Enter Password" name="password"></br>
										Gender:	<input type="radio" name="gender" value="male"/>Male
												<input type="radio" name="gender" value="female"/>Female</br></br>
										<input type="submit" value="Register" name="register" class="btn blue-gradient-rgba">										
                                     </div>
									</div>                     
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<!-- Main Footer -->
<footer class=" blue-gradient-rgba text-white text-center">
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
<script src="../public/javascripts/jquery-3.3.1.min.js"></script>
<script src="../public/javascripts/popper.min.js"></script>
<script src="../public/javascripts/bootstrap.js"></script>
<script src="../public/javascripts/mdb.js"></script>
</body>
</html>