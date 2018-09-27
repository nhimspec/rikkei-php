<?php
	require 'database/db.php';
	$dbConnect = DB::connect();

	$formUsername = '';
	$formEmail = '';
	$valid = false;
	$error = '';
	if(isset($_POST['username'])){
		$formUsername = $_POST['username'];
		if(empty($formUsername)){
			$error = 'Username is invalid!';
			$valid = false;
		} else {
			$valid = true;
		}
	}

	if(isset($_POST['email'])){
		$formEmail = $_POST['email'];
		if($valid && (empty($formEmail) || !filter_var($formEmail, FILTER_VALIDATE_EMAIL))){
			$error = 'Email is invalid!';
			$valid = false;
		} else {
			$valid = true;
		}
	}

	if($valid){
		$stmt = $dbConnect->prepare("UPDATE users set username=?, email=? where id = ?");
		$stmt->bind_param('sss', $formUsername, $formEmail, $_GET['id']);
		$stmt->execute();
	}


	if(isset($_GET['id'])){

		$stmt = $dbConnect->prepare("SELECT * FROM users where id = ?");
		$stmt->bind_param('s', $_GET['id']);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows > 0) {
			$user = $result->fetch_assoc();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud Basic</title>
	<link rel="stylesheet" type="text/css" href="./assets/library/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
	<div class="row justify-content-center">
		<h2>Crud Sample</h2>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a class="btn btn-primary" href="index.php">Back</a>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<form method="POST" novalidate="novalidate">
			  <div class="form-group row">
			    <label for="username" class="col-sm-2 col-form-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $user['username'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="email" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>">
			    </div>
			  </div>
			  	<?php if(!empty($error)): ?>
				   <div class="form-group row">
				  		<div class="col-sm-10 offset-2">
					    	<div class="alert alert-danger"><?php echo $error ?></div>
						</div>
				  </div>
				<?php endif; ?>
			  	<div class="form-group row">
			  		<div class="col-sm-10 offset-2">
				    	<button class="btn btn-primary" type="submit">Update</button>
					</div>
			  	</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>