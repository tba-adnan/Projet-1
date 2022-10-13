<?php
require ("./DAL/DBcon.php");
$return = '';
if(isset($_POST["query"]))
{

	$search = $_POST['query'];
    $query = "SELECT * FROM classes WHERE name LIKE '{$search}%' OR id LIKE '{$search}%'";
    $result= mysqli_query(Conn(),$query);
	}


if(mysqli_num_rows($result) > 0)
{
	$return .='
	<div class="table-responsive">
	<table class="table table-striped">
	<tr>
		<th>Promotion : </th>
	</tr>';
	while($row1 = mysqli_fetch_array($result))
	{
		$return = '
		<div class="table-responsive">
	    <table class="table table-striped">
		<br>
		<tr>
		<td>'.$row1["name"].'</td>
		</tr>';
	}
	echo $return;
	}
else
{
	echo '<br>';
	echo '<p class="lead"> Aucun résultat contenant tous vos termes de recherche a été trouvé. </p>';
}
?>