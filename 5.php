<pre>
<?php
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
$car['bmw'] = array('X5', 120, 5, '2015');
$car['audi'] = array('A6', 100, 5, '2000');
$car['mercedes'] = array('S320', 150, 5, '2014');
$name = array_keys($car);
echo 'CAR ' .$name[0] .PHP_EOL .$car['bmw'][0] .' '.$car['bmw'][1].' '.$car['bmw'][2].' '.$car['bmw'][3]
    .PHP_EOL.'<br>';
echo 'CAR ' .$name[1] .PHP_EOL .$car['audi'][0] .' '.$car['audi'][1].' '.$car['audi'][2].' '.$car['audi'][3]
    .PHP_EOL.'<br>';
echo 'CAR ' .$name[2] .PHP_EOL .$car['mercedes'][0] .' '.$car['mercedes'][1].' '.$car['mercedes'][2].' '
    .$car['mercedes'][3] .PHP_EOL;
