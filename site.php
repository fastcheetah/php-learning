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
        echo substr($phrase, 8, 3);//8 is index we grab the substring from and 3 is the number of characters we want to grab
        ?>
        <?php
        echo 40 % 60;//divides and givves the remainder
        $num = 20;
        $num += 25;
        echo $num++;
        echo abs(-100);
        echo pow(2, 4);//2 to the power of 4
        echo sqrt(144);//square root
        echo max(2, 10);// compares and gives the maximum number
        echo min(2, 10);// compares and gives the minimum number
        echo round(3.7);//rounds off to the nearest whole number
        echo ceil(3.3);//rounds off to the next whole number no matter what
        echo floor(3.9);//rounds off to the previous whole number no matter what
        ?>
</body>
</html>