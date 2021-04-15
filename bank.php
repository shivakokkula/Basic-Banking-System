<!DOCTYPE html>
<html>
<head>
	<title>Bank Portal</title>
	<link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		    <a class="navbar-brand" href="bank.php">BANK</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="bank.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">About</a>
		        </li>
		        <li class="nav-item">
          		<a class="nav-link" href="#">Contact</a>
        		</li>
      		  </ul>
      		</div>
      	</div>
      </nav>
      <section class="text-center mt-5">
      	<div class="container">
      	<h1 id="head1">BASIC BANKING SYSTEM</h1>
      	</div>
      	<div class="container">
      	<button type="button" id="view" class="btn btn-secondary btn-lg mt-5" style="width:30%" onclick="window.location='customer.php'">View All Customers</button>
      	</div>
      	<div class="container">
      	<button type="button" id="his" class="btn btn-secondary btn-lg mt-5" style="width:30%" onclick="window.location='transhis.php'">View Transaction History</button>
      	</div>
      
      </section>
      <script src="bootstrap.min.js"></script>
</body>
</html>