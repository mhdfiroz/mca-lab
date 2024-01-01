<html>
<head>
    <title>Student Details Form</title>
    <style>
    	textarea{
    		width:150px;
    		height:50px;
    		margin-left:80px;
    		margin-top:-15px;
    	}
    </style>
</head>
<body>
    <form action="student.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="1" required></textarea><br><br>
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

