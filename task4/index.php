<h2>Задача на работу с файлами №4</h2>
<p>Дан инпут и кнопка. В этот инпут вводится год. По нажатию на кнопку выведите, 
    високосный он или нет.</p>
<form action="index.php" method="post">
    
    <p>Введите год <input type="text" name="year" id="" placeholder="yyyy" value=""
        min="19" max="31.12"></p>
    <p><input type="submit" value="Какой год?"></p>
</form>

<?php
    require_once "leapYear.php";
    $year = $_POST['year'];
    
    file_put_contents("file.txt",leapYear($year));
    echo file_get_contents("file.txt");
?>