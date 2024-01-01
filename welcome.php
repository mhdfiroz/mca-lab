<?php
$con=mysqli_connect("localhost","root","","nvs");
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$id=$_COOKIE['id'];
$sql="select * from Student where user_id=$id";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
$row = mysqli_fetch_row($result);
echo "<html>
<body>
Welcome $row[3]
</body>
</html>";
}
?>
