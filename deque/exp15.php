<html>
<body>
    <form method = "GET">
Enter a number :
<input type="number" name="number">
<input type="submit" name="submit" value="submit">
    </form>


<?php
    if($_GET){
    $no = $_GET["number"];
    if(($no==0)){
    echo"$no is not a even/odd.";
    }
    elseif(($no%2 == 0)){
    echo "$no is an even number";
    }
    else{
    echo "$no is odd number";
    }
    }
?>


</body>
</html>
