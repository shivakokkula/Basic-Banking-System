<?php
include('db.php');
$sql = "SELECT * FROM customer";
$c=0;
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bank Portal</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="bank.css" rel="stylesheet">
</head>
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
      	<table class="table table-light table-striped" id="table">
      		<tr id="trfirst" class='table-dark'>
      			<th>Name</th>
      			<th>Email</th>
      			<th>Balance</th>
      			<th></th>
      		</tr>
			<?php
				if ($result->num_rows > 0) {
					$names="";
					$i=0;					
			  		while($row = $result->fetch_assoc()) {
						$name=$row['name'];
						$email=$row['email'];
						$balance=$row['balance'];
						$names=$names.','.$name;
						$i++;
			?>
			<tr id="tr1">
	 	  		<td><?php echo $name;?></td><td><?php echo $email;?></td><td><?php echo $balance;?></td><td><form action="transaction.php" method="POST"><input hidden class="names" name="transaction" value="<?php echo $name?>,<?php echo $email?>,<?php echo $balance?>" /><button type="submit" class="btn btn-success">Transfer Money</button></form></td>
	 	  	</tr>
			<?php }
			}
			else {
			  echo "No results Found";
			}
			$conn->close();
			?>  
	 	</table>
      </section>
	<script>
	   for(i=0;i<(<?php echo $i ?>);i++){
	   		document.getElementsByClassName('names')[i].value+="<?php echo $names ?>";
	   }
	</script>
    <script src="bootstrap.min.js"></script>
</body>
</html>