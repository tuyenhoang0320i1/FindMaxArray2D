<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 style="color: navy">Print max value of Array 2D</h2>
<form method="post">
    <label>Enter number of row: </label>
    <br>
    <input type="text" name="row">
    <br><br>
    <label>Enter number of column: </label>
    <br>
    <input type="text" name="column">
    <br><br>
    <button type="submit">Print</button>
    <br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $row = $_REQUEST["row"];
    $column = $_REQUEST["column"];

    $array = [];
    for ($i = 0; $i < $row; $i++) {
        $array[$i] = [];
        for ($j = 0; $j < $column; $j++) {
            $array[$i][$j] = rand(0, 10);
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }
    $max2D = $array[0][0];
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {
            if ($array[$i][$j] >= $max2D) {
                $max2D = $array[$i][$j];
                $rowPosition = $i + 1;
                $columnPosition = $j + 1;
            }
        }
    }
    echo "Max value of array2D is: " . $max2D . " at position row " . $rowPosition . " , and column " . $columnPosition;
    echo "<pre>";
    print_r($array);
    echo "</pre>";;
}
?>
</body>
</html>
