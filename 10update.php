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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        WEB
    </h1>
    <ol>
        <?php  // print_list_id()
            $list = scandir('../data');
            print_list_id($list);
        ?>
    </ol>
    <a href="09create.php">create</a>  <!-- form을 이용한 create -->
    <?php if(isset($_GET['id'])) { ?>  <!-- form을 이용한 update -->
        <a href="10update.php?id=<?=$_GET['id']?>">update</a> 
    <?php } ?>
    <h2>
        <?php // print_title();
            print_title();
        ?>
    </h2>
    <?php // print_description();
        print_description();
        $study = scandir("../php");
        print_list($study);
    ?>
    <form action="10update_process(rename).php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title" placeholder="Title" value="<?=print_title();?>">
        </p>
        <p>
            <textarea name="description" placeholder="Description"><?=print_description()?>
            </textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>