<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    input width rectangle :
    <input type="text" name="valueWidth"/>
    input height rectangle :
    <input type="text" name="valueHeight"/>
    <input type="submit" value="OK"/>
</form>
<?php
include "class_lib.php";
?>
<?php
$height = $_POST["valueHeight"];
$width = $_POST["valueWidth"];
$rectange = new Rectangle($width, $height);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Area of your rectangle : " . $rectange->getArea();
    echo "<br>Perimeter of your rectangle : " . $rectange->getPerimeter()."<br>";
    echo $rectange->display();
}

?>
</body>
</html>