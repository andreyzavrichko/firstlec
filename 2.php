<?php
echo '<pre>';
const ALL = '80';
echo 'На школьной выставке ' .ALL. ' рисунков,' .PHP_EOL;
const MARKER = '23';
echo MARKER. ' из них выполнены фломастерами,' .PHP_EOL;
const PENCIL = '40';
echo PENCIL. ' карандашами, а остальные - красками.'.PHP_EOL.
    'Сколько рисунков, выполненные красками, на школьной выставке?' .PHP_EOL;
$paint = ALL - MARKER - PENCIL;
echo 'Ответ: ' .$paint. ' рисунков выполнены красками.';
echo '</pre>';
