<?php 
    include __DIR__ . '/../includes/functions.php';

    $title = 'Automobiles';
    
    $car = new Car('AC-20200525-E000123456V8-B000054321', 'Lada Granta', '2020-05-25', 800);
?>
<h1>Abstract Class "Automobile" children examples</h1>
<div class="automobiles">
    <div class="card">
        <div class="card-header">
            <?=get_class($car);?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Registraton information</h5>
            <p class="card-text">
                <?=getRegistrationData($car);?>
            </p>
            <h5 class="card-title">Motion (action)</h5>
            <p class="card-text">          
                <?=doMovement($car, 'forward');?>
            </p>
            <h5 class="card-title">Tunning</h5>
            <p class="card-text">
                <b>Tunning option: <span style="color:red;">Full Tunnig</span></b>
                <ol>
                    <?=tunning($car, ['full']);?>
                </ol>         
            </p>
        </div>
    </div>

    <?php 
        // $tank = new Excavator(); 
    ?>

    <div class="card">
        <div class="card-header" style="color:red">
            Car tunning Examples
        </div>
        <div class="card-body">
            <h5 class="card-title">Tunning Example 1</h5>
            <p class="card-text" style="color:green;">
                If tunning options set by name ("NOS kit" and 
                "Remapping" or in other words "Chipping"):
            </p>
                <?php $result=tunning($car, ['addNos', 'chipping']);?>
                <ul>
                    <?php foreach(tunning($car, ['addNos', 'chipping']) as $item):?>
                    <?=$item;?>
                    <?php endforeach; ?>
                </ul>
            <h5 class="card-title">Tunning Example 2</h5>
            <p class="card-text" style="color:green;">
                If selected only the NOS kit installing:
            </p>
            <?php $result=tunning($car, ['addNos', 'chipping']);?>
                <ul>
                    <?php foreach(tunning($car, ['addNos']) as $item):?>
                    <?=$item;?>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>

    <?php 
        $tank = new Tank(4); 
    ?>

    <div class="card">
        <div class="card-header">
            <?=get_class($tank);?>
        </div>
        <div class="card-body">
        <h5 class="card-title">Registraton information</h5>
            <p class="card-text">
                <?=getRegistrationData($tank);?>
            </p>
            <h5 class="card-title">Motion (action)</h5>
            <p class="card-text">
                <?=doMovement($tank, 'Spin around');?>        
                <?=$tank->shot();?>
            </p>
        </div>
    </div>

<?php 
    $jeep = new Car('-', 'Jeep', '2021-03-08', 1000);
    $isRainy = true;
    $interiorOptions = [
        'option1' => '+', 
        'option2' => '+', 
        'option3' => '-',
        'option4' => '-',
    ]
?>
    <div class="card">
        <div class="card-header">
            <?=get_class($jeep);?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Registraton information</h5>
            <p class="card-text">
                <?=getRegistrationData($jeep);?>
            </p>
            <h5 class="card-title">Wipers action</h5>
            <p class="card-text">          
                <?=$jeep->wipersOn($isRainy)?>
            </p>
            <h5 class="card-title">Horn</h5>
            <p class="card-text">
                <?=$jeep->beep();?>         
            </p>
            <h5 class="card-title">Interior</h5>
            <p class="card-text">
                <?=$jeep->interior($interiorOptions);?>         
            </p>
        </div>
    </div>

</div>