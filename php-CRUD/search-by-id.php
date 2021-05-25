<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>searching</title>
  </head>
  <body>
    <div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
	<h4 class="card-title">search the data</h4>
	</div>
	<div class="card-body">
	<div class="row">
	<div class="col-md-6">
	<form action="" method="POST">
	<div class="form-group">
	<input type="text" name="get_product_name" placeholder="Enter ID" required>
	</div>
	<button type="submit" name="search_by_product_name">search</button>
	</form>
	</div>
	</div>
	<?php
	$connection=mysqli_connect("localhost","root","","db-connect");
	if(isset($_POST['search_by_product_name']))
	{
		$product_name=$_POST['get_product_name'];
		$query="SELECT * FROM add_products where product_name='$product_name'";
		$query_run=mysqli_query($connection,$query);
	?>
	<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<tr>
	<th scope="col">ID</th>
	<th scope="col">PRODECT NAME</th>
	<th scope="col">PRODUCT PRICE</th>
    </tr>
	</thead>
	<tbody>
	<?php
	if(mysqli_num_rows($query_run)>0)
		{
			while($row=mysqli_fetch_array($query_run))
			{
	?>
	<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['product_name']; ?></td>
	<td><?php echo $row['product_price']; ?></td>
	</tr>
	<?php
	}
		}
		else
		{
			?>
			<tr>
	          <td colspan="6">No Records Found</td>
			</tr>
			<?php
			
		}
	?>
	</tbody>
	</table>
	</div>
	<?php
	}
	?>
	</div>
	</div>
	</div>
	</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>