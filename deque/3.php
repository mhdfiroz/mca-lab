<?php
$mark=40;
if($mark>=60)
{
 $grade="First division";
}
else if($mark>=45)
{
 $grade="Second divion";
}
elseif($mark>=33)
{
$grade="third division";
}
else
{
$grade="Faile";
}
echo"Student grade: $grade";
?> 
