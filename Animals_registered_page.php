<html>
<head>
<title> Species </title>
<!-- JS libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
<!-- My JS libraries -->
<script src="registered_table.js"></script>
</head>

<?php require_once('connection.php'); ?>

<body>

<div class="container-fluid mt-3 mb-3">
	<h4>Species</h4>
	<div class="table-responsive">
		<table id="table-rest" name="table-rest" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Animal</th>
					<th>Location</th>
					<th>Time Found</th>
					<th>Number</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

</body>
</html>
