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

	if (isset($_POST['num3'])) {
		$num3 = $_POST['num3'];

		$nums = array($num1, $num2, $num3);
		foreach($nums as $num) {
			if (!is_numeric($num)) {
				exit("<h1>Non Numeric Value Detected. Please Enter Numeric Values Only</h1>");
			}
		}

		if ($calc_type == 'add') {
				$result = $num1 + $num2 + $num3;
				$calc_output = "added to";
			}
			else if ($calc_type == 'subtract') {
				$result = $num1 - $num2 - $num3;
				$calc_output = "subtract";
			}
			else if ($calc_type == 'multiply') {
				$result = $num1 * $num2 * $num3;
				$calc_output = "multiplied by";
			}
			else if ($calc_type == 'divide') {
				$calc_output = "divided by";
				if ($num2 == 0 or $num3 == 0) {
					$result = "Cannot Multiply By Zero";
				}
				else {
					$result = $num1 / $num2 / $num3;
				}
			}
			print("<div class='result_p'><h5>Result of $num1 $calc_output $num2 $calc_output $num3</h5>");
			print("<p>RESULT: $result </p></div>");
							

		}


	else {
		$nums = array($num1, $num2);
		foreach($nums as $num) {
			if (!is_numeric($num)) {
				exit("<h1>Non Numeric Value Detected. Please Enter Numeric Values Only</h1>");
			}
		}		
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
	}

?>

</body>
</html>
