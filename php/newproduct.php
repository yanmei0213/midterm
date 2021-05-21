<?php
include ('dbconnect.php');

if (isset($_POST['submit'])) {
	$prname = $_POST['prname'];
	$prtype = $_POST['prtype'];
	$prprice = $_POST['prprice'];
	$prqty = $_POST['prqty'];
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	$query    = "INSERT into tbl_products (prname, prtype, prprice, prqty, image)
	VALUES ('$prname', '$prtype', '$prprice', '$prqty', '$file')";
	$query_run   = mysqli_query($con, $query);
	if ($query_run) {
		echo "<script> alert('Add New Product Successful')</script>";
		echo "<script> window.location.replace('../php/index.php')</script>";
	} else {
		echo "<script> alert('Add New Product failed')</script>";
		echo "<script> window.location.replace('../php/newproduct.php')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Product Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form class="form" action=""  method="post" enctype="multipart/form-data">
		<h1 class="product-title">Add New Product Form:</h1>
		<label>Product Name:</label> <!--Product Name-->
		<input type="text" name="prname" required/>
		<label>Product Type:</label> <!--Product Type-->
		<select name="prtype"> 
			<option value="">---Please Select Type---</option>
			<option value="Beverages">Beverages</option>
			<option value="Bath & Body">Bath & Body</option>
			<option value="Cleaning Solutions">Cleaning Solutions</option>
			<option value="Cooking Essentials">Cooking Essentials</option>
			<option value="Food">Food</option>
			<option value="Hair Care">Hair Care</option>
			<option value="Laundry & Home Care">Laundry & Home Care</option>
			<option value="Tissue">Tissue</option>
		</select>
		<label>Product Price(RM):</label> <!--Product Price-->
		<input type="text" name="prprice" required/>
		<label>Product Quantity:</label> <!--Product Quantity-->
		<input type="text" name="prqty" required/>
		<label>Product Image:</label> <!--Product Image-->
		<input type="file" name="image" id="image" required/>
		<br>
		<br>
		<input type="submit" class="add-button" name="submit" value="Add"> <!--Add Button-->
		<br>
		<br>
		<center><a href="index.php" class="cancel-button">Cancel</a></center> <!--Cancel Link-->
	</form>
</body>
</html>