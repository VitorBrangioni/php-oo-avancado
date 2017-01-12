<html>
<head>
	
</head>
	
<body>
<form action="">
	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Quantidade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list as $product):  ?>
		<tr>
			<th><?= $product['id'] ?></th>
			<th><?= $product['name'] ?></th>
			<th><?= $product['qtd'] ?></th>
		</tr>
		<?php endforeach; ?>
	
	</tbody>
	</table>
	

</form>
		
</body>

</html>