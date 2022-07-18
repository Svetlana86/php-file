<?php

/*
* function zodiac()
* returns the sign of the zodiac
*/
function zodiac($day, $month)
{
    if (($day>=21 && $day<=31 && $month==3) || ($day<=20 && $month==4)) return "Овен";
    if (($day>=21 && $day<=30 && $month==4) || ($day<=20 && $month==5)) return "Телец";
    if (($day>=21 && $day<=31 && $month==5) || ($day<=21 && $month==6)) return "Близнецы";
    if (($day>=22 && $day<=30 && $month==6) || ($day<=22 && $month==7)) return "Рак";
    if (($day>=23 && $day<=31 && $month==7) || ($day<=22 && $month==8)) return "Лев";
    if (($day>=23 && $day<=31 && $month==8) || ($day<=23 && $month==9)) return "Дева";
    if (($day>=24 && $day<=30 && $month==9) || ($day<=23 && $month==10)) return "Весы";
    if (($day>=24 && $day<=31 && $month==10) || ($day<=22 && $month==11)) return "Скорпион";
    if (($day>=23 && $day<=30 && $month==11) || ($day<=21 && $month==12)) return "Стрелец";
    if (($day>=22 && $day<=31 && $month==12) || ($day<=20 && $month==1)) return "Козерог";
    if (($day>=21 && $day<=31 && $month==1) || ($day<=18 && $month==2)) return "Водолей";
    if (($day>=19 && $day<=29 && $month==2) || ($day<=20 && $month==3)) return "Рыбы";
    return "Введен неправильный формат даты";
}