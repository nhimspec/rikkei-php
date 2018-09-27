<?php
	require 'database/db.php';
	$dbConnect = DB::connect();

	$stmt = $dbConnect->prepare("SELECT * FROM users");
	$stmt->execute();
	$result = $stmt->get_result();
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
		<div class="col-md-8">
			<h2>List User</h2>
		</div>
		<div class="col-md-4">
			<a class="btn btn-primary" href="create.php">Create</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<table class="table">
				<thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Username</th>
			      <th scope="col">Email</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php if($result->num_rows > 0) : ?>
				  	<?php while($user = $result->fetch_assoc()): ?>
					    <tr>
					      <th scope="row"><?php echo $user['id'] ?></th>
					      <td><?php echo $user['username'] ?></td>
					      <td><?php echo $user['email'] ?></td>
					      <td>
					      	<a class="btn btn-sm btn-warning" href="user.php?id=<?php echo $user['id'] ?>">Update</a>
				      		<button class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $user['id'] ?>">Delete</button>
					      </td>
					    </tr>
					<?php endwhile; ?>
				<?php endif; ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript" src="./assets/library/jquery/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
</body>
</html>