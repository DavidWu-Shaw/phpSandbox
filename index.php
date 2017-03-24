<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>test</title>

	<script type="text/javascript">
		function test()
		{
			var x = 5;

			alert("call test" + x);
			console.log("call test.");
		}

		window.onload = function()
		{
			test();
		}
	</script>
</head>
<body>
<p>test php</p>

<?php
	$var1 = 3;
	$var2 = 4;

	echo ($var1 + 3);
?>

<p> after calc: </p>
Basic math: <?php echo $var2; ?>
</body>