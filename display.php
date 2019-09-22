<?php
include 'conn.php'; 




$q= "SELECT * FROM crudtable";
$query= mysqli_query($conn,$q);

?>
<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
<div class="col-lg-12"><br><br>
<h1 class="text-success text-center">Display Table Data</h1><br>

<table class="table table-striped table-hover table-bordered">
	<tr class="bg-dark text-center text-white">
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
	<?php 
	include 'conn.php';
	$q= "select * from crudtable";
	$query= mysqli_query($conn, $q);
	while ($result=mysqli_fetch_array($query)) {
?>
	
	<tr class="text-center">
		<td><?php echo $result['id']; ?></td>
		<td><?php echo $result['username']; ?></td>
		<td><?php echo $result['password']; ?></td>
		<td> <button class="btn btn-danger">
		<a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white"> Delete</a>
		</button></td>
		<td> <button class="btn btn-success">
			<a href="update.php?id=<?php echo $result['id']; ?>"class="text-white">Update</a></button></td>
			
	</tr>
	

<?php

}

	 ?>
	</table>
	<button class="btn btn-success"><a href="insert.php" class="text-white">Insert New Data</a></button>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>