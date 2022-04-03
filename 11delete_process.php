<?php 
    unlink('../data/'.$_POST['id']);
    header("location: ../php/index.php");
?>