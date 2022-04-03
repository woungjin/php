<?php
    function print_title() {
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "WELCOME";
        }
    }

    function print_description() {
        if(isset($_GET['id'])) {
            echo file_get_contents("../data/".$_GET['id']);
        } else {
            echo "WELCOME";
        }
    }

    function print_list($list) {
        for($i=0; $i<count($list); $i++) {
            if($list[$i] != '.') {
                if($list[$i] != '..') {
                    echo "<li><a href=$list[$i]>$list[$i]</a>\n";
                }
            }
        }
    }

    function print_list_id($list) {
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
    <a href="create.php">create</a>
    <form action="09create_process(redirect).php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description">
            </textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>