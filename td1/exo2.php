<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<?php
$size=$_GET['size'];
echo "<div style='font-size: {$size}px; color:#FF0000;'>Message de taille $size px en rouge</div>";

?>;

<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">

</form>
</body>
</html>
