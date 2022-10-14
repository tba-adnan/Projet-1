<?php
require ("../DAL/DBcon.php");
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
	<table class="table table bordered table-striped table-dark shadow-lg p-3 mb-5 bg-white rounded">
	<tr>
		<th class="lead">id : </th>
		<th class="lead">Promotion : </th>
	</tr>';
	while($row1 = mysqli_fetch_array($result))
	{
		$return .= '
		<tr>
		<td>'.$row1["id"].'</td>
		<a href="/"></a>
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