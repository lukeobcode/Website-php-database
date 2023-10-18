<html>
<head>
	<h1>Form to complete</h1>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
	<form action="connection.php" method="post">
	
	<div>
	<label>Name</label>
	<input type="text" name="name" placeholder="Enter your name">
	</div>
	
	<div>
	<label>Password</label>
	<input type="password" name="password" placeholder="Enter your password">
	</div>
	
	<div>
	<label>Email</label>
	<input type="email" name="email" placeholder="Enter your email">
	</div>
	
	<div>
	<label>Mobile</label>
	<input type="text" name="mobile" placeholder="Enter your mobile number">
	</div>
	
	<div class ="genderContainer">
	<label>Gender</label>
	<input class="gender1" type="radio" name="gender" value="m">Male
	<input class="gender1" type="radio" name="gender" value="f">Female
	<input class="gender1" type="radio" name="gender" value="o">Others
	</div>
	
	<div class="btn">
	<button type="submit">Submit data</button>
	</div>
	
	</form>
	</div>

</body>
</html>