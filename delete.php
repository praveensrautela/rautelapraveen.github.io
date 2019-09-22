<?php
include 'conn.php';

$id= $_GET['id'];
$q= "delete from crudtable where id= $id";

$query=mysqli_query($conn,$q);

header('location:display.php');



?>