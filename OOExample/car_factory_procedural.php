<?php
//Defining all properties of a car (and repeat for every new one)
$engine1 = "V8";
$wheels1 = "Winter";
$model1 = "Hatchback";
$brand1= "WolksVagen";
$body1_colour = "Red";
$body1_colour_property = "metallic";

$engine2 = "Wankel";
$wheels2 = "All-Season";
$model2 = "Limo";
$brand2= "Hando";
$body2_colour = "Black";
$body2_colour_property = "Matte";




function printCar($engine, $wheels, $model, $brand, $body_colour, $body_colour_property){
    $return = "===Car=== <br>";
    $return .= "Engine: {$engine} <br>";
    $return .= "Wheels: {$wheels} <br>";
    $return .= "Model: {$model} <br>";
    $return .= "Brand: {$brand} <br>";
    $return .= "Colour: {$body_colour} <br>";
    $return .= "Colour type: {$body_colour_property} <br>";
    return $return;
}

//Building an array with "cars"
$cars = array(
        "car1" => array(
            $engine1,
            $wheels1,
            $model1,
            $brand1,
            $body1_colour,
            $body1_colour_property
        ),
        "car2" => array(
            $engine2,
            $wheels2,
            $model2,
            $brand2,
            $body2_colour,
            $body2_colour_property
        )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>The procedural car factory</h1>
    <h2>Printing one by one</h2>
    <?php echo printCar($engine1, $wheels1, $model1, $brand1, $body1_colour, $body1_colour_property ); ?>
    <?= printCar($engine2, $wheels2, $model2, $brand2, $body2_colour, $body2_colour_property ); ?>
    <h2>Printing array</h2>
        <?php
            foreach ($cars as $car){
                echo printCar($car[0], $car[1], $car[2], $car[3], $car[4], $car[5]);
            }
        ?>
</body>
</html>