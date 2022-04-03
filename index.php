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
        <?php 
            $list = scandir('./data');

            $i = 0;
            while($i<count($list)) {
                if($list[$i] !='.'){
                    if($list[$i] !='..') {
                        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                    }
                }
                $i = $i+1;
            }

            // echo "<li>$list[0]</li>\n";
            // echo "<li>$list[1]</li>\n";
            // echo "<li>$list[2]</li>\n";
            // echo "<li>$list[3]</li>\n";
            // echo "<li>$list[4]</li>\n";
            // echo "<li>$list[5]</li>\n";
        ?>
        <!-- <li>
            <a href="index.php?id=html">
                HTML
            </a>
        </li>
        <li>
            <a href="index.php?id=css">
                CSS
            </a>
        </li>
        <li>
            <a href="index.php?id=JavaScript">
                JavaScript
            </a>
        </li> -->
    </ol>
    <h2>
        <ol>
            <?php
                $list = scandir('./data'); // data안의 파일목록들을 가져옴 
                for($i=0; $i<count($list); $i++) {
                    if($list[$i] != '.') {
                        if($list[$i] != '..') {
                            echo "<a href=\"index.php?id=$list[$i]\">$list[$i]</a>\n";       
                        }
                    }
                }
            ?>
        </ol>
        <?php 
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "WELCOME";
        }
            
        ?>
    </h2>
    <?php 
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
            echo file_get_contents("data/css");
            
        } else {
            echo "Hello, PHP"; 
        }
    ?>
        <?php
            $study = scandir("../HTDOCS");
            for($i=0; $i<count($study); $i++) {
                if($study[$i] != '.') {
                    if($study[$i] != '..') {
                        echo "<li><a href=$study[$i]>$study[$i]</a>\n";
                    }
                }
            }
        ?>
</body>
</html>