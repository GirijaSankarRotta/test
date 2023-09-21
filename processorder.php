<?php
if ($_POST) {
	$beans = $_POST["beans"];
	$beantype = $_POST["beantype"];
	$bags = $_POST["bags"];
	$date = $_POST["date"];
	$extras =$_POST["extras"];
	$name = $_POST["name"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];
	$comments = $_POST["comments"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Head First and CSS Bean Machine</title>
	<link rel="stylesheet" type="text/css" href="processorder.css">
</head>
<body>
	<h1>The Starbuzz Bean Machine</h1>
	<p>Thanks, <strong><?php print($name);?></strong>, for your order from the Starbuzz Bean Machine. </p>
	<p>Your order of <?php print($bags);?> bags of <?php print($beantype);print(" "); print($beans);?> , <?php foreach ($extras as $value) {
		echo $value. ", ";
	} ?>has been sent to: </p>
	<p id="address">
	<?php
	print($name)."<br>";
	print($address)."<br>";
	print($city)."<br>";
	print($state)."<br>";
	print($zip)."<br>";
	print($phone)."<br>";
	?>
	</p>
	<p>and will be delivered by <?php print($date); ?>.</p>
	<p>
		Thank you for submitting your comments to Starbuzz! We love getting comments from our Bean Machine users, You said, 
	</p>
	<p><?php print($comments); ?></p>
</body>
</html>
<?php
}
?>