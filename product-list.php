<?php
require_once('../db/dbhelper.php');

$productList = executeResult('select id, title, thumbnail, price, updated_at from product');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product - Page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Product List</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Thumbnail</th>
							<th>Title</th>
							<th>Price</th>
							<th>Updated At</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
<?php
$count = 0;
foreach ($productList as $item) {
	echo '<tr>
			<td>'.(++$count).'</td>
			<td><img src="'.$item['thumbnail'].'" style="width: 160px;"/></td>
			<td>'.$item['title'].'</td>
			<td>'.$item['price'].'</td>
			<td>'.$item['updated_at'].'</td>
			<td><a href="add-product.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a></td>
			<td><button class="btn btn-danger" onclick="deleteProduct('.$item['id'].')">Delete</button></td>
		</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function deleteProduct(id) {
		option = confirm('Are you sure to delete this product?')
		if(!option) return

		$.post('form-product.php', {
			'action': 'delete',
			'id': id
		}, function(date) {
			location.reload()
		})
	}
</script>
</body>
</html>