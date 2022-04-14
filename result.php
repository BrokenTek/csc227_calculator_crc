<!DOCTYPE html>
<html>
<head>
	<title>Calculator: Result</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>	

<?php

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$result = 0;
	$calc_type = $_POST['calc'];
	$calc_output = "";

	if ($calc_type == 'add') {
		$result = $num1 + $num2;
		$calc_output = "added to";
	}
	else if ($calc_type == 'subtract') {
		$result = $num1 - $num2;
		$calc_output = "subtract";
	}
	else if ($calc_type == 'multiply') {
		$result = $num1 * $num2;
		$calc_output = "multiplied by";
	}
	else if ($calc_type == 'divide') {
		$calc_output = "divided by";
		if ($num2 == 0) {
			$result = "Cannot Multiply By Zero";
		}
		else {
			$result = $num1 / $num2;
		}
	}
	print("<div class='result_p'><h5>Result of $num1 $calc_output $num2</h5>");
	print("<p>RESULT: $result </p></div>");

?>

</body>
</html>