<html>
<head>
<title>Day</title>
</head>
<body>
<h2>Check Day </h2>
<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter Number of day:<Input type="Text" name="num">
  <input type="Submit" value="day">
</form>  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  $day=$_POST["num"];
if(!is_numeric($day))
{
 echo"Please enter a valid value";
}
else
{   
switch($day)
{
 case 1: echo "Monday";
 break;
 case 2: echo "Tuesday";
 break;
 case 3: echo "Wednesday";
 break;
 case 4: echo "Thursday";
 break;
 case 5: echo "Friday";
 break;
 case 6: echo "Saturday";
 break;
 case 7: echo "Sunday";
 break;
 default: echo "Invalid choice";
 }
 }
 }
 ?>
 </body>
 </html>
