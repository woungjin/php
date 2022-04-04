<?php
    function print_title() {    // url의 id값을 확인 
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "WELCOME";
        }
    }

    function print_description() { // file_get_contents를 활용한 데이터 값 불러오기
        if(isset($_GET['id'])) {
            echo file_get_contents("../data/".$_GET['id']);
        } else {
            echo "WELCOME";
        }
    }

    function print_list($list) { // php 파일 목록 불러오기 
        for($i=0; $i<count($list); $i++) {
            if($list[$i] != '.') {
                if($list[$i] != '..') {
                    echo "<li><a href=$list[$i]>$list[$i]</a>\n";
                }
            }
        }
    }

    function print_list_id($list) { // id값 지정하기
        for($i=0; $i<count($list); $i++) {
            if($list[$i] != '.') {
                if($list[$i] != '..') {
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
        }
    }
?>