<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "header.html"?>

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
     
        <form action = "site.php" method = "get">
             <input type="number" name="num1">
             <br>
            <input type="number" name="num2">
       <input type="submit">
       </form>
         Answer:
            <?php 
            echo $_GET["num1"] + $_GET["num2"];
            ?>
         
         <form action="site.php" method = "post">
            Name: <input type="text" name="name"><br>
            <input type="submit">
         </form>
         <?php 
          echo $_POST["name"];
         ?>

         <!-- arrays -->
          <?php 
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            echo $friends[0];
            $friends[0] = "Dwight";
            echo $friends[0];
            $friends[4] = "Angela";
            echo $friends[4];
            echo count($friends);
          ?>

          <form action="site.php" method="post">
            <input type="checkbox" name="fruits[]" value="apples">Apples<br>
            <input type="checkbox" name="fruits[]" value="oranges">Oranges<br>
            <input type="checkbox" name="fruits[]" value="pears">Pears<br>
            <input type="checkbox" name="fruits[]" value="bananas">Bananas<br>
            <input type="submit">
            </form>

            <?php 
            $fruits = $_POST["fruits"];
            echo $fruits[0];
            ?> 
            <form action="site.php" method = "post">
            <input type="text" name="student">
            <input type="submit">
            </form>
            <?php 
            $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
            echo $grades["Jim"];
            echo count($grades);
            echo $grades[$_POST["student"]];
            ?>

            <?php 
            function cube($num){
                return $num * $num * $num;
            }
            echo cube(4);
            ?>
           <?php 
           $isMale = true;
           if($isMale){
            echo "You are male";
           }else{
            echo "You are female";
           }
           ?>
          <?php 
          function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }elseif($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            }else{
                return $num3;
            }
          };
          echo getMax(300, 90, 100);
          ?>
         
            <form action="site.php" method="post">
            First Num:<input type="number" name = "num1" step = "0.001"><br>
            op: <input type="text" name = "op"><br>
            Second Num:<input type="number" name = "num2"><br>
            <input type="submit">
            </form>
            Answer:
            <?php 
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];  
            $op = $_POST["op"];
            if($op == "+"){
                echo $num1 + $num2;
            }elseif($op == "-"){
                echo $num1 - $num2;
            }elseif($op == "*"){
                echo $num1 * $num2;
            }elseif($op == "/"){
                echo $num1 / $num2;
            }else{
                echo "Invalid operator";
            }

            ?>

            <form action="site.php" method = "post">
              What was your grade?
            <input type="text" name="grade">
            <input type="submit">
            </form>
<?php 
$grade = $_POST["grade"];
switch($grade){
    case "A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good!";
        break;
    case "C":
        echo "You did poorly!";
        break;
    case "D":
        echo "You did very bad!";
        break;
    case "F":
        echo "You failed!";
        break;
    default:
        echo "Invalid grade";
}

?>
<!-- be careful when incrementing because of infinite loop -->
<?php 
$luckyNums = array(4, 8, 14, 16, 23, 42);
for($i = 0; $i < count($luckyNums); $i++){
    echo "$luckyNums[$i] <br>";
};
$index = 1;
while($index <= 5){
    echo "$index <br>";
    $index++;
}
for($i = 1; $i <= 5; $i++){
    echo "$i <br>";

}
?>
<?php 
$title = "My first post";
$author = "Kelvin";
$wordCount = 400;
include "article-header.php";
?>
<?php include "useful-tools.php";
sayHi("mike") 
?>
<?php include "footer.html"?>
<!-- //classes -->
<?php
class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle,$aAuthor,$aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
        
        
    }

}
$book1 = new Book("Harry Potter", "JK Rowling", 400);
$book2 = new Book("Lord of the Rings","Tolkein", 700);
echo $book1->title;
echo $book2->title;

?>
<?php 
class Student {
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors(){
        if($this->gpa >= 3.5){
            return "true"; // Return a boolean value instead of "true"
        }
        return "false";
    }
}

$student1 = new Student("Jim", "Business", 2.8);
$student2 = new Student("Pam", "Art", 3.6);

// Checking if the students have honors
echo "Jim has honors: " . ($student1->hasHonors() ? "Yes" : "No") . "<br>";
echo "Pam has honors: " . ($student2->hasHonors() ? "Yes" : "No") . "<br>";

?>

<?php 
class Movie{
    public $title;
    private $rating;

    function __construct($title,$rating){
        $this->title = $title;
        $this->setRating($rating);
    }
    //rating cant be changed outside this movie class
    function getRating(){
        return $this->rating;
    }
    function setRating($rating){
        if($rating == "G" || $rating == "PG" || $rating == "PG13" || $rating == "R" || $rating == "NR"){
            $this->rating = $rating;
        }else{
            $this->rating = "NR";
        }
        
    }
}
$avengers = new Movie("Avengers","PG-13");
//G, PG, PG-13, R, NR
$avengers->setRating("Cat");

echo $avengers->getRating();php
?>
<?php 
class Chef{
    function makeChicken(){
        echo"The chef makes chicken <br>";
    }
    function makeSalad(){
        echo "The chef makes salad <br>";
    }
    function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
    }
}
class ItalianChef extends Chef{
    function makePasta(){
        echo"The chef makes pasta";
    }
    function makeSpecialDish(){
        echo "The chef makes chicken pizza";
    }
}
$chef = new Chef();
$chef->makeSpecialDish();

$italianchef = new ItalianChef();
$italianchef->makeSpecialDish();
?>


</body>
</html>