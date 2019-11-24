<?php
echo '<pre>';
$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
);
$audi = array(
    'model' => 'A6',
    'speed' => 100,
    'doors' => 5,
    'year' => '2000'
);
$mercedes = array(
    'model' => 'S320',
    'speed' => 150,
    'doors' => 5,
    'year' => '2014'
);
$car = ['bmw' => $bmw, 'audi' => $audi, 'mercedes' => $mercedes];
foreach ($car as $name => $carInfo);
{
    echo 'CAR'. ' ' .'bmw'. PHP_EOL;
    echo $bmw['model'] . ' ' . $carInfo['speed'] . ' ' . $carInfo['doors'] . ' ' . $carInfo['year'] . PHP_EOL;
    echo 'CAR'. ' ' .'audi'. PHP_EOL;
    echo $audi['model'] . ' ' . $carInfo['speed'] . ' ' . $carInfo['doors'] . ' ' . $carInfo['year'] . PHP_EOL;
    echo 'CAR'. ' ' .'mercedes'. PHP_EOL;
    echo $mercedes['model'] . ' ' . $carInfo['speed'] . ' ' . $carInfo['doors'] . ' ' . $carInfo['year'] . PHP_EOL;
}
echo '</pre>';