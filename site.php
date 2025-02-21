<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1> Kelvin's Site</h1>";
        echo "<hr>";
        echo "<p> This is my site with php</p>";

        $characterName = "John";
        $characterAge = 35;
        echo "There was once a man named $characterName </br>";
        echo "He was $characterAge years old<br>";
        echo "He really liked the name $characterName</br>";
        echo "But didnt like being $characterAge</br>";
        ?>
        <?php 
        $phrase = "To be or not to be";
        $sentence = "This is a sentence";
        $age = 30;
        $gpa = 30.3;
        $isMale = false;
        $isMale = true;
        ?>
        <?php
        $phrase = "Graceland College";
        echo strlen($phrase);
        echo $phrase[0];
        echo strtolower($phrase);
        echo strtoupper($phrase);
        echo "Kelvin"[0];
         echo str_replace("Kelvin", "John", $phrase);//replaces kelvin with john in the variable phrase
        echo substr($phrase, 8, 3);//prints out the word college
        ?>
</body>
</html>