<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>

<body>
    <?php
    $size=$_GET["size"];
    $color=$_GET["color"];
?>

        <form method="get">
            <label for="size">Size : </label>
            <input type="number" value="" name="size" id="size">
            <input type="color" value="" name="color" id="color">
            <input type="submit" value="Valider">
        </form>
        <p></p>
        <div style="font-size: <?php echo $size; ?>px;color:<?php echo $color; ?>">
            Message de taille
            <?php echo $size; ?>px en
            <?php echo $color; ?>
        </div>
</body>

</html>
