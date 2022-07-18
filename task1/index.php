<h2>Задача на работу с файлами №1</h2>
<p>Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку 
    выведите наибольший общий делитель этих двух чисел.</p>
<form action="index.php" method="post">
    <p>Введите первое число <input type="text" name="first-number" id=""></p>
    <p>Введите второе число <input type="text" name="second-number" id=""></p>
    <p><input type="submit" value="Вычислить НОД"></p>
</form>

<?php
    require_once "gcd.php";
    $a = $_POST['first-number'];
    $b = $_POST['second-number'];
    $gcd = gcd($a, $b);
    file_put_contents("file.txt", $gcd);
    echo "НОД = ".file_get_contents("file.txt");
?>