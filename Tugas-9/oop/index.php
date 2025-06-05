<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('Animal.php');
    include('Frog.php');
    include('Ape.php');

    $sheep = new Animal("shaun");    
    echo "<br>";
    echo "Name :" . $sheep->name; // "shaun"
    echo "<br>";
    echo "Legs :" . $sheep->legs; // 4
    echo "<br>";
    echo "Cold Blooded :" . $sheep->cold_blooded; // "no"        

    echo "<br>";
    echo "<br>";
    $kodok = new Frog("buduk");
    echo "Name: " . $kodok->name . "<br>";         
    echo "Legs: " . $kodok->legs . "<br>";
    echo "Cold Blooded: " . $kodok->cold_blooded . "<br>";
    echo "Jump: " . $kodok->jump();                     
    echo "<br>";
    
    echo "<br>";
    $sungokong = new Ape("kera sakti");
    echo "Name: " . $sungokong->name . "<br>";     
    echo "Legs: " . $sungokong->legs . "<br>";
    echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
    echo "Yell: " . $sungokong->yell();
    ?>
</body>

</html>