<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "1245", "virtualkroy");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$img_name = mysqli_real_escape_string($db, $_POST['img_name']);
    $img_desc = mysqli_real_escape_string($db, $_POST['img_desc']);
    $price = mysqli_real_escape_string($db, $_POST['price']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO users_products (image, img_name, img_desc, price) VALUES ('$image', '$img_name', '$img_desc', '$price')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM users_products");
?>