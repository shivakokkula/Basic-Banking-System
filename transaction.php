<?php 
if(isset($_POST['sender'])){
    include('db.php');
    $sender=$_POST['sender'];
	$receiver=$_POST['receiver'];
	$balance=$_POST['balance'];
	$sql1="UPDATE `customer` SET `balance`=`balance`-'$balance' WHERE `name`='$sender'";
	$sql2="UPDATE `customer` SET `balance`=`balance`+'$balance' WHERE `name`='$receiver'";
	$sql="insert into transaction values('$sender','$receiver',$balance)";
	if($conn->query($sql1)==TRUE && $conn->query($sql2)==TRUE && $conn->query($sql)==TRUE){
		echo "<script>alert('SUCCESS')</script>";
		header('location:customer.php');
	}
	else{
		echo "ERROR: Could not execute  $sql. " . mysqli_error($conn);
	}
    mysqli_close($conn);
}
else{
    if(isset($_POST['transaction'])){
        $array=explode(',',$_POST['transaction']);
    }
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
      	<table class="table table-dark table-striped" id="table">
      		<tr id="trfirst">
      			<th>Name</th>
      			<th>Email</th>
      			<th>Balance</th>
      		</tr>              
            <tr>
                <td><?php echo $name=$array[0] ?></td>
                <td><?php echo $array[1] ?></td>
                <td><?php echo $array[2] ?></td>
			</tr>  
	 	</table>
        <div class="container">
        <h1>Tranfer Money</h1>
        <form method="POST" action="transaction.php">
        <select name="receiver">
        <?php for ($i=3;$i<13;$i++) { ?> 
            <option><?php echo $array[$i] ?></option>
        <?php } ?>
        </select>
        <input hidden name="sender" value="<?php echo $name ?>" />
        <select name="balance">
            <option>1000</option>
            <option>2000</option>
            <option>3000</option>
            <option>4000</option>
            <option>5000</option>
        </select>
        <button type="submit" class="btn btn-success" onclick="transfer()">Transfer</button>
        </form>
        </div>
    <script src="bootstrap.min.js"></script>
</body>
</html> 
<?php } ?>