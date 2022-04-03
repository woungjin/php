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
        function
    </h1>
    <?php 
        $str = "Lorem ipsum dolor sit amet, consectetur  adipisicing elit. Adipisci sequi provident cum odit.
        
        Commodi illo quas eligendi voluptate vitae consectetur
        
        iusto sequi accusantium, adipisci, veniam aut impedit, pariatur error! Voluptas.";
        echo $str;
    ?>
    <h1>
        strlen()
    </h1>
    <?php 
        echo strlen($str);
    ?>
    <h1>
        nl2br
    </h1>
    <?php 
        echo nl2br($str);
    ?>


    
</body>
</html>