<?php 
    rename('../data/'.$_POST['old_title'],'../data/'.$_POST['title']); // 파일 이름을 변경 기존 -> 새로운것
    file_put_contents('../data/'.$_POST['title'], $_POST['description']); // 파일명 변경후 해당 파일명에 내용값 넣기 
    header('location: ../php/index.php?id='.$_POST['title']); // 완료후 다시 돌아가기 
?>