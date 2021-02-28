<?php
    // declare(strict_types=1);
    include __DIR__ . '/../includes/autoload.php';
    include __DIR__ . '/../includes/functions.php';

    $car = new Car();

    $registrationData = [
        'model' => 'Lada Granta',
        'vin' => 'AC-20200525-E000123456V8-B000054321',
        'manufactureDate' => '2020-05-25',
        'weight' => 800,
    ];

    $thisClass = get_class($car);
    echo '<br><br>';
    echo "It belogns to \"$thisClass\" Class.<br>";
    setRegistrationData($car, $registrationData);
    getRegistrationData($car);
    moveAutomobile($car, 'forward');

    /* -------------- Next object --------------- */
    $tank = new Tank(3);
    echo '<br><br>';
    echo "<b>Next object</b><br>";
    $thisClass = get_class($tank);
    echo "It belogns to \"$thisClass\" Class.<br>";
    echo $tank->shot() . '<br>';
    moveAutomobile($tank, 'Spin around');
    getRegistrationData($tank);