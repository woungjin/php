<?php require('../lib/print.php')?>
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
        <a href="index.php">WEB</a>
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

<?php 
    require('../view/footer.php');
?>