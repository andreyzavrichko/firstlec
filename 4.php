<?php
echo '<pre>';
$day = 0;
echo 'Номер дня недели: ' .$day .PHP_EOL;
switch ($day) {
    case 1:
        echo 'Это рабочий день';
        break;
    case 2:
        echo 'Это рабочий день';
        break;
    case 3:
        echo 'Это рабочий день';
        break;
    case 4:
        echo 'Это рабочий день';
        break;
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
echo '</pre>';
