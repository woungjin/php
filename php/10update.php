<?php  
    require_once('../lib/print.php'); // 해당 파일이 중복되어 불러오지 않게 1번만 실행되게끔 한다
    require_once('../view/header.php'); 
?>
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
<?php 
    require_once('../view/footer.php');
?>