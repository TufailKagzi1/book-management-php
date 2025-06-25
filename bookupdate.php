<?php 
    include 'dbconnect.php';
    session_start();
        $book = $_POST['book'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $publication = $_POST['publication'];
        $version = $_POST['version'];
        $prize = $_POST['prize'];
        $description = $_POST['desc'];
        
        $Q1="UPDATE books SET name='".$name."',author='".$author."',publication='".$publication."',version='".$version."',prize='".$prize."',description='".$description."' where name='".$book."' ";
        if($conn -> query($Q1)== TRUE){
            echo '<script> alert("updated"); </script>';
            
    }
    header("location: updatebook.php");
?>