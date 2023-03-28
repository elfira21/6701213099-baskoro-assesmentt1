<!DOCTYPE html>
<html>
<head>
    <title>Calculator Result</title>
</head>
<body>
    <?php
        if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator'])){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operator = $_POST['operator'];

            switch($operator) {
                case '+':
                    $result = $number1 + $number2;
                    break;
                case '-':
                    $result = $number1 - $number2;
                    break;
                case '*':
                    $result = $number1 * $number2;
                    break;
                case '/':
                    $result = $number1 / $number2;
                    break;
                default:
                    echo "<p>Invalid operator</p>";
                    exit();
            }

            echo "<p>Result: ".$result."</p>";
        }
    ?>
</body>
</html>