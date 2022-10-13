<?php 
include "BLL/PromotionBLL.php";
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id : </th>
      <th scope="col">Nom du promo : </th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        $PromoManager = new PromotionBLL();
        $GetData =  $PromoManager->GetAllData();
        // 
        foreach($GetData as $value){
        ?>
      <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
      <td>
      <a href="edit.php?id=<?php echo $value->GetId() ?>">Edit</a>
      <a href="delete.php?id=<?php echo $value->GetId() ?>">Delete</a>
      </td>
     
    </tr>
<?php }?>
  </tbody>
</table>
<a href="add.php">ajouter</a>

<!-- Line Break. :) -->
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<script>
	$(document).ready(function(){
		load_data();
		function load_data(query)
		{
			$.ajax({
			url:"BLL/Search.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}
		$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
		});
	});
	</script>
</head>
<body>
<div class="container-fluid">       
<div class="content-wrapper">
	<div class="container">
		<h1>Search : </h1>
		<div class="row">
		<div class="col-xs-12">
			<input type="text" name="search" id="search" placeholder="Search" class="form-control" />
			<div id="result"></div>
		</div>
		</div>	
	</div>
</div>
</div>
