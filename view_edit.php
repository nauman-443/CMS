<form  method='POST')>
	ID:
	<input type="text" name="id" value="<?php echo trim($result['id']); ?>" >
	<br><br>
	Brand Name:
	<input type="text" name="name" value="<?php echo trim($result['name']); ?>" >
	<br><br>
	Price:
	<input type="text" name="price" value="<?php echo trim($result['price']); ?>" >
	<br><br>
	Description:
	<input type="text" name="desp" value="<?php echo trim($result['desp']); ?>" >
	<br><br>	
	<input type="submit" name="ok" value="Update">

	</form> 