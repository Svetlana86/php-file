<h2>Задача на работу с файлами №5</h2>
<p>Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, второй селект - это месяцы 
    от января до декабря, а третий - это годы от 1990 до 2025. С помощью этих селектов можно 
    выбрать дату. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, 
    например, 'воскресенье'.</p>
<form action="index.php" method="post">
    <select name="day">
        <?php for($i = 1; $i <= 31; $i++): ?>
            <option value="<?=$i?>"><?=$i?></option>
        <?php endfor; ?>
    </select>
    <select name="month">
        <?php 
            $month = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
            for($i = 1; $i <= 12; $i++): ?>
            <option value="<?=$i?>"><?=$month[$i-1]?></option>
        <?php endfor; ?>
    </select>
    <select name="year">
        <?php for($i = 1990; $i <= 2025; $i++): ?>
            <option value="<?=$i?>"><?=$i?></option>
        <?php endfor; ?>
    </select>
    <p><input type="submit" value="Знак задиака"></p>
</form>

<?php

    $week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    $date = $week[date("w", mktime(0,0,0, date($_POST['month']), date($_POST['day']), date($_POST['year'])))];
   
    file_put_contents("file.txt",$date);
    echo file_get_contents("file.txt");
?>