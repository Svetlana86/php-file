<h2>Задача на работу с файлами №2</h2>
<p>Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются 
    тройкой Пифагора: квадрат самого большого числа должен быть равен 
    сумме квадратов двух остальных.</p>
<form action="index.php" method="post">
    <p>Введите первое число <input type="text" name="first-number" id=""></p>
    <p>Введите второе число <input type="text" name="second-number" id=""></p>
    <p>Введите третье число <input type="text" name="third-number" id=""></p>
    <p><input type="submit" value="Тройка Пифагора?"></p>
</form>

<?php
    require_once "thePythagoreanTriple.php";
    $a = $_POST['first-number'];
    $b = $_POST['second-number'];
    $c = $_POST['third-number'];
    if(thePythagoreanTriple($a, $b, $c)) file_put_contents("file.txt","ДА");
    else file_put_contents("file.txt","НЕТ");

    echo file_get_contents("file.txt");
?>