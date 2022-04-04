<?php 
    unlink('../data/'.basename($_POST['id'])); // basename을 사용해서 삭제시 보안을 높인다
    header("location: ../php/index.php");
?>