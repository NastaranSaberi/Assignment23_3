<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>calculator</title>
</head>


<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($number1) && is_numeric($number2)){
    if ($operator == "Add"){
        $result = $number1 + $number2;
    }
    if($operator == "Subtract"){
        $result = $number1 - $number2;
    }
    if ($operator == "Multiply"){
        $result = $number1 * $number2;
    }
    if($operator == "Divide"){
        $result = $number1 / $number2;
    }
}
?>


<body>
    <div class="container" >
        <form method="post">
            <input type="input" value="45" name="number1" ><br>
            <input type="input" value="37" name="number2" ><br>
            <div class="ops">
                <input type="submit" id="add" name="operator" value="Add" >
                <input type="submit" id="subtract" name="operator" value="Subtract" >
                <input type="submit" id="multiply" name="operator" value="Multiply" >
                <input type="submit" id="divide" name="operator" value="Divide"><br>
            </div>
            <input type="input" name="result" value="<?php echo $result; ?>">
        </form>
    </div>
</body>
</html>