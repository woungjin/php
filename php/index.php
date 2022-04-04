<?php  
    require('../lib/print.php');
    require('../view/header.php');
?>
    <a href="09create.php">create</a>  <!-- form을 이용한 create -->
    <?php if(isset($_GET['id'])) { ?>  <!-- form을 이용한 update -->
        <a href="10update.php?id=<?=$_GET['id']?>">update</a> 
        <form action="11delete_process.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="delete">
        </form>
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

</body>
</html>