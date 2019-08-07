<?php

$json = file_get_contents("http://recruitment.api.makekimia.network/api/user");
$data = json_decode($json);
$users = $data->user;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<h2> Users </h2>
	<table border="1">
		<thead>
		   <th>user_id</th>
		   <th>user_name</th>
		   <th>user_email</th>
		   <th>signature_key</th>
		   <th>created</th>
		</thead>
		<tbody>
		<?php foreach($users as $user ) { ?>

			<tr>
				<td><?php echo $user->user_id; ?></td>
				<td><?php echo $user->user_name; ?></td>
				<td><?php echo $user->user_email; ?></td>
				<td><?php echo $user->signature_key ;?></td>
				<td><?php echo $user->created; ?></td>
			</tr>

		<?php  } ?>	
		</tbody>
	</table>
	<a href="index.php"> back to home </a>
</body>
</html>