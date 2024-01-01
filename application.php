<html>
<head>
<title>Student details form</title>
</head>
<body>
<h2>Student details form</h2>
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>
    <label for="email">Email id:</label>
    <input type="email" name="email" required><br>
    <label for="address">Address:</label>
    <textarea name="address" rows="4" required></textarea><br>
    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br>
    <label for="dob">Date of birth:</label>
    <input type="date" name="dob" required><br>
    <input type="submit" value="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use correct variable names
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $address = $_REQUEST["address"];
    $gender = $_REQUEST["gender"];
    $dob = $_REQUEST["dob"];

    echo "<h3>Student details:</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email id:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date of birth:</strong> $dob</p>";
}
?>
</body>
</html>


