<?php

$json = file_get_contents("http://recruitment.api.makekimia.network/api/product");
$data = json_decode($json);
$items = $data->items;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
	<h2> Product </h2>
	<table border="1">
		<thead>
		   <th>product_id</th>
		   <th>name</th>
		   <th>price</th>
		   <th>stock</th>
		</thead>
		<tbody>
		<?php foreach($items as $item ) { ?>

			<tr>
			     <td><?php echo $item->product_id; ?></td>
			     <td><?php echo $item->name; ?></td>
			     <td><?php echo $item->price ;?></td>
			     <td><?php echo $item->stock; ?></td>

			 </tr>

		<?php  } ?>	
		</tbody>
	</table>
	<a href="index.php"> back to home </a>
</body>
</html>