<?php  

$users = require('users.php');
var_dump($users);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>clients</title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>EMAIL</th>
			<th>DATE</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=$users[0]->getID(); ?></td>
			<td><?=$users[0]->getEmail(); ?></td>
			<td><?=$users[0]->getDate(); ?></td>			
		</tr>
		<tr>
			<td><?=$users[1]->getID(); ?></td>
			<td><?=$users[1]->getEmail(); ?></td>
			<td><?=$users[1]->getDate(); ?></td>
		</tr>
	</tbody>
</table>


</body>
</html>