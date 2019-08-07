<?php

$json = file_get_contents("http://recruitment.api.makekimia.network/api/sales");
$data = json_decode($json);
$sales = $data->sale;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>
</head>
<body>
	<h2> Sales </h2>
	<table border="1">
		<thead>
		   <th>product_id</th>
		   <th>name</th>
		   <th>price</th>
		   <th>stock</th>
		</thead>
		<tbody>
		<?php foreach($sales as $sale ) { ?>

			<tr>
			     <td><?php echo $sale->product_id; ?></td>
			     <td><?php echo $sale->name; ?></td>
			     <td><?php echo $sale->price ;?></td>
			     <td><?php echo $sale->stock; ?></td>

			 </tr>

		<?php  } ?>	
		</tbody>
	</table>
	<a href="index.php"> back to home </a>
</body>
</html>