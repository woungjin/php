<?php  
    require('../lib/print.php');
    require('../view/header.php');
?>
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