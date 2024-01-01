<html>
<head>
<title>Factorial</title>
</head>
<body>
<h2>Factorial calculator</h2>
<form method="post" action="">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="calculate factorial">
</form>

<?php
function calculatefactorial($num){
    if($num==0||$num==1){
    return 1;
    }else{
    return $num * calculatefactorial($num-1);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number"])) {
        $number = $_POST["number"];
        if (is_numeric($number) && $number>=0) {
            $factorial=calculatefactorial($number);
                echo "<p>The factorial of {$number} is {$factorial}.</p>";
            } else {
                echo "<p>please enter a non-negative integer</p>";
            }    
    }
}
?>
</body>
</html>
