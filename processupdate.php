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

<input type="hidden" id="status" value="<%= request.getAttribute("status") %>">
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
							href="#about">About</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
							href="#contact">Contact</a></li>


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
<br> <br><br><br><br>



<h1>Update Details</h1>
<form class="row g-3" method="post" action="bookupdate.php" style="margin: 5px">
    <?php
    include 'dbconnect.php';
    $book = $_POST["book"];


    $sql = "SELECT * FROM `books` WHERE `name`='$book'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {

            ?>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Book Name</label>
                <?php echo "<input type='text' name='name' value='" . $rows['name'] . "' class='form-control' id='inputEmail4'>"; ?>

            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Author</label>
                <?php echo "<input type='text' name='author' value='" . $rows['author'] . "' class='form-control' >"; ?>

            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Publication</label>
                <?php echo "<input type='text' name='publication' value='" . $rows['publication'] . "' class='form-control' >"; ?>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Version</label>
                <?php echo "<input type='text' name='version' value='" . $rows['version'] . "' class='form-control' >"; ?>            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Prize</label>
                <?php echo "<input type='text' name='prize' value='" . $rows['prize'] . "' class='form-control' >"; ?>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Short Description</label>
                <?php echo "<input type='text' name='desc' value='" . $rows['description'] . "' class='form-control' >"; ?>
            </div>
            </div>
            <?php echo "<input type='hidden' name='book' value='" . $rows['name'] . "' class='form-control' >"; ?>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        <?php
        }
    }

    ?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="alert/dist/sweetalert.css">


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