<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS를 활용하여 데이터의 보안성을 높여야한다</title>
</head>
<body>
<?php 
    // htmlspecialchars를 이용하여 데이터파일의 보안을 높여야한다
    echo htmlspecialchars('<script>alert("babo");</script>');
?>

</body>
</html>