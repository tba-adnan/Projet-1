<?php
require ("./DAL/DBcon.php");

// require(dirname(__FILE__) . '/DAL/DBcon.php');



$return = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string(Conn(), $_POST["query"]);
	$query = "SELECT * FROM classes
	WHERE name  LIKE '%".$search."%'";}
else
{
	$query = "SELECT * FROM classes";
}
$result = mysqli_query(Conn(), $query);
if(mysqli_num_rows($result) > 0)
{
	$return .='
	<div class="table-responsive">
	<table class="table table bordered table table-striped table-dark lead">
	<tr>
		<th>ID : </th>
		<th>Promotion : </th>
	</tr>';
	while($row1 = mysqli_fetch_array($result))
	{
		$return .= '
		<tr>
		<td>'.$row1["id"].'</td>
		<td>'.$row1["name"].'</td>
		</tr>';
	}
	echo $return;
	}
else
{
	echo 'No results containing all your search terms were found.';
}
?>