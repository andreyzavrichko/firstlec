<pre>
<?php
$age = '28';
echo 'Возраст: '.$age .' лет'.PHP_EOL;
if ($age >= 18 && $age <=65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <=17) {
    echo 'Вам еще рано работать';
} else {
    echo 'Неизвестный возраст';
}