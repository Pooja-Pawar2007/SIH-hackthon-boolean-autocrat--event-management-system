<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include '../includes/config.php';
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	$clg=$_POST["clg"];
	$option=$_POST["option"];
	$email=$_POST["email"];
			
	
	$sql = "Select * from registerh where username='$username'";
	
	$result = mysqli_query($con, $sql);
	
	$num = mysqli_num_rows($result);
	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
	
			$hash = password_hash($password,
								PASSWORD_DEFAULT);
				
			// Password Hashing is used here.
			$sql = "INSERT INTO `registerh` ( `username`,'option','clg','email'
				`password`, `date`) VALUES ('$username',$option,$clg,$email
				'$hash', current_timestamp())";
	
			$result = mysqli_query($con, $sql);
	
			if ($result) {
				$showAlert = true;
			}
		}
		else {
			$showError = "Passwords do not match";
		}	
	}// end if
	
if($num>0)
{
	$exists="Username not available";
}
	
}//end if
	
?>
	
<!doctype html>
	
<html lang="en">

<head>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1,
		shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		crossorigin="anonymous">
</head>
	
<body>
	
<?php
	
	if($showAlert) {
	
		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
	
			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
	}
	
	if($showError) {
	
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true">×</span>
	</button>
	</div> ';
}
		
	if($exists) {
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div> ';
	}

?>
	
<div class="container my-4 ">
	
	<h1 class="text-center">RegisterHere</h1>
	<form action="hackthonR.php" method="post">
	
		<div class="form-group">
			<label for="username">Username</label>
		<input type="text" class="form-control" id="username"
			name="username" aria-describedby="emailHelp">	
		</div>
		<div class="form-group">
			<label for="options">Options</label>

<select name="option" id="option">
  <option value="Scratch For teen">Scratch For teen</option>
  <option value="hack25thon">hack25thon</option>
  <option value="makathon">makathon</option>
  <option value="girlscript">girlscript</option>
</select>
	<!--	<input type="option" class="form-control" id="option"
			name="options" aria-describedby="emailHelp">	-->
		</div>

		<div class="form-group">
			<label for="clg">College Name</label>
		<input type="text" class="form-control" id="clg"
			name="clg" aria-describedby="emailHelp">	
		</div>
		<div class="form-group">
			<label for="email">Email</label>
		<input type="text" class="form-control" id="email"
			name="email" aria-describedby="emailHelp">	
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control"
			id="password" name="password">
		</div>
	
		<div class="form-group">
			<label for="cpassword">Confirm Password</label>
			<input type="password" class="form-control"
				id="cpassword" name="cpassword">
	
			<small id="emailHelp" class="form-text text-muted">
			Make sure to type the same password
			</small>
		</div>	
	
		<button type="submit" class="btn btn-primary">
		Register
		</button>
	</form>
</div>
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>
	
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>
	
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous">
</script>
</body>
</html>
