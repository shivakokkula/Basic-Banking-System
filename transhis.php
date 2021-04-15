<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bank Portal</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="bank.css" rel="stylesheet">
</head>
<body>
	<body id="bd">
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
      	<h3 style="word-spacing:1rem;letter-spacing:0.5rem" class="mb-5">TRANSACTION HISTORY</h3>
      	<table class="table table-light table-striped" id="table">
      		<tr id="trfirst" class="table-dark">
      			<td>Sender</td>
      			<td>Receiver</td>
      			<td>Transferred Amount</td>
      		</tr>
      		<?php
      		$sql = "SELECT * FROM `transaction`";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			  // output data of each row

			  while($row = $result->fetch_assoc()) {
		?>
		<tr><td><?php echo $row["sender"] ?></td><td><?php echo $row["receiver"] ?></td><td><?php echo $row["transferred amount"] ?></td></tr>
		<?php
			} 
			}
			else {
			  echo "<h2>No results Found</h2>";
			}
		$conn->close();
	?>
	<tr><td style="color:black">empty</td><td style="color:black">empty</td><td style="color:black">empty</td></tr>
	</table>
	
	<button class="btn btn-secondary mx-auto mt-2 mb-5" onclick="window.location='bank.php'">BACK TO HOME</button>
	</section>

	</body>
</html>