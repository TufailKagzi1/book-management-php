<?php
  include 'dbconnect.php';
  $name = $_POST['name'];
  $author = $_POST['author'];
  $publication = $_POST['publication'];
  $version = $_POST['version'];
  $prize = $_POST['prize'];
  $description = $_POST['desc'];

  $sql = "INSERT INTO `books` (`name`, `author`, `publication`, `version`, `prize`, `description`) VALUES ('$name', '$author', '$publication', '$version', '$prize', '$description');";

  if($conn -> query($sql) == TRUE) {
    header("location: addbook.php");
  }
?>