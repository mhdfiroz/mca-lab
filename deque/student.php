<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

    echo "<h2>Student Details:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
}
 else 
{
    echo "Invalid request method. Please use the form to submit data.";
}
?>
