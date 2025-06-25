<?php
include 'dbconnect.php';
session_start();
if (!isset($_SESSION['uname'])) {
	header('location : login.php');
	exit;
}
$name = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Book Display</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/index-styles.css" rel="stylesheet" />
</head>

<body id="page-top">

	<input type="hidden" id="status" value="<%= request.getAttribute(" status") %>">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top">Book Record</a>

			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
							href="index.php">Home</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
							href="http://localhost/AJP_min/index.php#about">About</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
							href="http://localhost/AJP_min/index.php#contact">Contact</a></li>


					<div class="btn-group">
						<button type="button" style="background-color: #2C3E50;" class="btn btn-danger dropdown-toggle"
							data-bs-toggle="dropdown" aria-expanded="false">
							Books
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="displayBook.php">Avaliable Books</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="updatebook.php">Update Book Detail</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="addbook.php">Add New Books</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="deletebook.php">Delete Books</a></li>
						</ul>
					</div>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
							href="logout.php">Logout</a></li>

					<li class="nav-item mx-0 mx-lg-1 bg-danger"><a class="nav-link py-3 px-0 px-lg-3 rounded"
							href="logout"><?php echo $name; ?></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--main section-->
	<!--table section-->
	<br><br><br><br><br><br>
	<center>
	<h2 style="margin-bottom: 10px;">Avaliable Books</h2>
	</center>
	<div class="row">
		<center>
			<div class="col-md-8 col-sm-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover mb-0">
						<thead>
							<tr>
								<th style="width: 10%;">#</th>
								<th style="width: 30%;">Name</th>
								<th style="width: 6%;">Author</th>
								<th style="width: 6%;">Publication</th>
								<th style="width: 6%;">version</th>
								<th style="width: 6%;">Prize</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include 'dbconnect.php';
							$sql = "SELECT * FROM books";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while ($rows = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $rows['id'] . "</td>";
									echo "<td>" . $rows['name'] . "</td>";
									echo "<td>" . $rows['author'] . "</td>";
									echo "<td>" . $rows['publication'] . "</td>";
									echo "<td>" . $rows['version'] . "</td>";
									echo "<td>" . $rows['prize'] . "</td>";
									echo "</tr>";

								}
							}

							?>


						</tbody>
					</table>

					<!--table over-->

					<!-- Bootstrap core JS-->
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
					<!-- Core theme JS-->
					<script src="js/scripts.js"></script>
					<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
					<!-- * *                               SB Forms JS                               * *-->
					<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
					<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
					<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

					


</body>

</html>