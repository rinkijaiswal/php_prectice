<?php
// if submit button is clicked
if (isset($_POST['submit'])) {
	//then getting the value of input fields and saving in variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//printing the value
	echo "$name - $email- $password";
}
?>

<html>

<head>
	<title>Form submit</title>
</head>

<body>
	<form action="" method="post">
		<input type="text" placeholder="Enter Name" name="name" required><br><br>
		<input type="text" placeholder="Enter Email" name="email" required><br><br>
		<input type="text" placeholder="Enter Password" name="password" required><br>
		<button name="submit">Submit</button>
	</form>
</body>

</html>