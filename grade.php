<?php
function calculateGrade($marks) {
    if ($marks >= 60) {
        return "First Division";
    } 
    elseif ($marks >= 45 && $marks <= 59) {
        return "Second Division";
    } 
    elseif ($marks >= 33 && $marks <= 44) {
        return "Third Division";
    } 
    else {
        return "Fail";
    }
}
$userInput = 50;
if (is_numeric($userInput)) {
    $studentMarks = (float)$userInput;
    echo "Student marks: $studentMarks%\n";
    echo "Result: " . calculateGrade($studentMarks);
} 
else 
{
    echo "Please enter a valid number";
}
?>
