<h2>Задача на работу с файлами №3</h2>
<p>Дан инпут и кнопка. В этот инпут вводится дата рождения в 
    формате '31.12'. По нажатию на кнопку выведите знак зодиака 
    пользователя.</p>
<form action="index.php" method="post">
    
    <p>Введите дату рождения <input type="text" name="date" id="" placeholder="dd.mm" value=""
        min="01.01" max="31.12"></p>
    <p><input type="submit" value="Знак задиака"></p>
</form>

<?php
    require_once "zodiac.php";
    $date = explode(".", $_POST['date']);

    $day = $date[0];
    $month = $date[1];
    file_put_contents("file.txt",zodiac($day, $month));
    echo file_get_contents("file.txt");
?>