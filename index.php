
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>MATH</title>
</head>
<body>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/actions/math.php");
if(isset($_POST["div"]) && isset($_POST["div2"]))
{
    math::Division($_POST["div"], $_POST["div2"]);
    echo ("<br>");
}
if(isset($_POST["sqrt"]))
{
    math::Sqrt($_POST["sqrt"]);
    echo ("<br>");
}
?>
    <form action="/index.php" method="post">
        Деление числа:<br>
        <input type="number" name="div" value="0"/> / <input type="number" name="div2" value="0"/>
        <br>
        Возврат корня: <input type="number" name="sqrt" value="0"/><br>
        <input type="submit" name="action" value="Показать результат"/>
    </form>
</body>
</html>
