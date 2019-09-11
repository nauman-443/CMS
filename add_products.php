<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
</head>
<body>
<label><h2>Products</h2></label>
<form action="<?php echo base_url()?>index.php/products/add_prod" method="POST">

	<input type="hidden" name="id">
	Name:
	<input type="text" name="name">
	<br>
	Description:
	<input type="text" name="desp">
	<br>
	Price:
	<input type="text" name="price">
	<br>
	Image:
	<input type="file" name="img">
	<br>
	Submit:
	<input type="submit" name="submit">
	
</form>
</body>
</html>