<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Confirm">

    </form>

    <?php

    $file = scandir("upload");
    for ($a = 2; $a < count($file); $a++) {
    ?>
    <p>
        <a download="<?php echo $file[$a]; ?>" href="upload/<?php echo $file[$a]; ?>"><?php echo $file[$a]; ?></a>
    </p>
    <?php
    }

    ?>

</body>

</html>