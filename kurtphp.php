<?php
class Car {
    public $mark;
    public $color;
    public $type;
    public $regnr;
}

$myCar = new Car();
$myCar->color = 'red';
$myCar->type = 'sedan';
$myCar->mark = 'Volvo';
$myCar->regnr = 'ABC123';

$yourCar = new Car();
$yourCar->color='blue';
$yourCar->type='suv';
$yourCar->mark='Saab';
$yourCar->regnr = 'TFW372';

$ourCar = new Car();
$ourCar->color='green';
$ourCar->type='suv';
$ourCar->mark='BMW';
$ourCar->regnr='JSQ876';

$cars= array($myCar, $yourCar, $ourCar);
$type=htmlspecialchars($_GET["type"]); //Search based on "type"

foreach ($cars as $c) {
    if($c->type==$type)
    $rows[] = $c;
}

if (isset($rows)) {
    echo json_encode($rows,JSON_UNESCAPED_SLASHES);
}
else {
    echo 'Finns inte!';
}


?>