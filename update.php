
<?php 
include 'conn.php'; 
if (isset($_POST['done'])) {

	$id= $_GET['id'];
$name = $_POST['username'];
$pass = $_POST['password'];
$q= "UPDATE crudtable set username='$name',password='$pass' where id=$id ";
$query= mysqli_query($conn,$q);
header('location:display.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>crudsystem</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-lg-6 m-auto">
<form method="post"><br><br>
	<div class="card">
		<div class="card-header bg-dark">
			<h1 class="text-white text-center"> Insert Operation</h1>
		</div><br>
		<label>Username:</label>
		<input type="text" name="username" class="form-control"><br>	
		<label>Password:</label>
		<input type="password" name="password" class="form-control"><br>
		<button class="btn btn-success" type="submit" name="done">Submit</button><br>

	</div>
</form>


	</div> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
