
<?php
include_once '../config/database.php';
 
$name = $_POST['name']
$description = $_POST['description']
$price = $_POST['price']
$category_id = $_POST['category_id']
$category_name = $_POST['category_name']

$response = file_get_contents('http://localhost/api/product/read.php?name=' . $name . '&description=' . $description . '&price=' . $price . '&category_id=' . $category_id . '&category_name=' . $category_name);
echo $response
?>