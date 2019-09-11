
<table border ='3' align="center" style="width: 500px; line-height: 20px;">

<tr>

	<th><h3> ID </h3></th>
	<th><h3> name </h3></th>
	<th><h3> Price </h3></th>
	<th><h3> Desp </h3></th>
	<th><h3> Edit </h3></th>
	<th><h3> Delete </h3></th>

</tr>


<?php
foreach ($user as $value){

	//echo'<pre>', '<b>';
	//echo $value->id;
	//echo $value->name , " ";
	//echo $value->price, " ";
	//echo $value->desp;
	//echo $key;
	//print_r($user);
?>


<tr>

	<td><?php echo  $value->id ?></td>
	<td><?php echo  $value->name ?></td>
	<td><?php echo $value->price ?></td>
	<td><?php echo $value->desp ?></td>
	<td> <a href="<?php echo base_url('index.php/products/edit')?>?id= <?php echo $value->id?>"> 
	 	 <input type="button" value="Edit">
		 </a> 
	</td>
	<td> <a href=""> delete </a> </td>

</tr>

<?php
}?>

</table>


<div class="clearfix well">
		<a class="btn btn-info pull-right" href="<?php echo site_url('products/add_prod'); ?>">Add New Record</a>
</div>