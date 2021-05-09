<html>
<head>
<title>Register Sepcies</title>
</head>

<?php require_once('connection.php'); ?>

<body>

	<div class="container mt-3 mb-3">
		<form method="post" action="Donation.php">
			<div class="row justify-content-center">
				<div class="col-4">
					<div class="form-group">
						<label>Donation:</label>
						<input  type="number" class="form-control" id="donation" placeholder="Enter $$$" name="donation" required>
					</div>
					<button type="submit" id="donate" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
    //

</body>
</html>

<!-- JS libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>