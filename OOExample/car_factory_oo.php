<?php
    require_once ("car_class.php");
    require_once ("colour_class.php");
    $colour1 = new colour( "Red", "Metallic");
    $car1 = new car("V8", "Winter", "Hatchback", "WolksVagen", $colour1);
    $car2 = new car("Wankel", "All Season", "Limo", "Hando", new colour( "Black", "Matte"));

    $cars = array(
            new car("V8", "Winter", "Hatchback", "WolksVagen", new colour( "Red", "Metallic")),
            new car("V6", "Summer", "Station", "Tesla", new colour( "black", "Matte")),
            new car("V2", "Monster Truck", "City Car", "Mini", new colour( "Rainbow", "Glitter")),
            new car("Wankel", "All Season", "Limo", "Hando", new colour( "Black", "Matte"))
    );

    function carPrinter($carArray){
        foreach ($carArray as $car){
            echo $car->describeCar();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>The OO car factory</h1>
    <h2>Printing one by one</h2>
    <?php echo $car1->describeCar() ?>
    <?= $car2->describeCar() ?>
    <h2>Printing array</h2>
    <?php
        carPrinter($cars);
    ?>
</body>
</html>