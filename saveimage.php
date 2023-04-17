<?php
include("conn.php");

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$query = "INSERT INTO images(name,image) values('$name','$image')";
$result = mysqli_query($conn,$query);

}if ($result) {
	header("location: blog.php");
}else{
	echo 'error';
}

?>