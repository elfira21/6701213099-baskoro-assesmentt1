<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
<!-- saya memilih proses.php yang di main/master dengan commit main/master "v1.3" -->
=======
>>>>>>> d5eeda2649ce31bb634f1b41535a058d38c02d17
	<title>Calculator Result</title>
</head>
<body>
	<?php
		if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator'])){
			$number1 = $_POST['number1'];
			$number2 = $_POST['number2'];
			$operator = $_POST['operator'];

			if($operator == '+'){
				$result = $number1 + $number2;
			} elseif($operator == '-'){
				$result = $number1 - $number2;
			} elseif($operator == '*'){
				$result = $number1 * $number2;
			} elseif($operator == '/'){
				$result = $number1 / $number2;
			}

			echo "<p>Result: ".$result."</p>";
		}
	?>
<<<<<<< HEAD


=======
>>>>>>> d5eeda2649ce31bb634f1b41535a058d38c02d17
</body>
</html>