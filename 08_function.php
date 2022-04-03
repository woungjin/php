<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function Basic() {
            print("sdfsf");
            print("sdfsf");
        }
        basic();
        basic();
    ?>

    <h2>parmeter &amp; argument</h2>
    <?php
        function sum2($left, $right) {
            return $left+$right;
        }
        print(sum2(2,4));
        file_put_contents('result.txt',sum2(2,4));
        // email('dsffs.net',sum2(2,4));
        // upload('dsffs.net',sum2(2,4));
    ?>
</body>
</html>