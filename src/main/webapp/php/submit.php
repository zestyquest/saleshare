<?php
$industry = $_POST['industry'];
$product_type = $_POST['product_type'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$color = $_POST['color'];
$size = $_POST['size'];
$other = $_POST['other'];

$zipcode = $_POST['location'];
$from = $_POST['emailAdd'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$other = $_POST['other'];
$telephone = $_POST['telephone'];

$to      = 'imranoftherings@gmail.com'.','.'saurabhbajaj21@gmail.com';
$subject = 'Order from: '.$firstName.' '.$lastName;
$message = 'Industry: '.$industry."\r\n";
$message .= 'Product Type: '.$product_type."\r\n";
$message .= 'Brand: '.$brand."\r\n";
$message .= 'Model: '.$model."\r\n";
$message .= 'Color: '.$color."\r\n";
$message .= 'Size: '.$size."\r\n"."\r\n";

$message .= 'Email address: '.$from."\r\n";
$message .= 'Zip code: '.$zipcode."\r\n";
$message .= 'Telephone: '.$telephone."\r\n";
$message .= 'Other info: '.$product_type."\r\n";

mail($to, $subject, $message);
?>
