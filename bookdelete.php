<?php 
    include 'dbconnect.php';
    session_start();
        $book = $_POST['book'];

        
        $Q1="DELETE FROM books WHERE `books`.`name` = '$book' ";
        if($conn -> query($Q1)== TRUE){
            echo '<script> alert("updated"); </script>';
            
    }
    header("location: deletebook.php");
?>