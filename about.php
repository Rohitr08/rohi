<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: lightgreen;
            margin: auto;
            padding: 23px;
           
        }
    </style>
</head>
<body>
    
    <div class="container">

    <h1>Lets Learn about php</h1>
<?php

$age=7;
if($age>18){
    echo"you go to the party";
}
else {
    echo"you are not adult now";
   
}
?>
 <br>

<?php

//Loops in php
$a=0;
while ($a <= 10) {
    echo "<br>the value of a :";
    echo $a;
    $a++;
}
echo"<br>";
echo"<br>";

//Iteration in php

$lang=array("php","java", "css","c++");
$b=0;
while ($b < count($lang)) {
echo"<br> language is:";
echo $lang[$b];

$b++;

}
echo"<br>";
echo"<br>";

// For loop iterations

for ($i=0; $i <=10 ; $i++) { 
    echo "<br>the value of i is:";
    echo $i;
}

echo"<br>";
echo"<br>";

foreach ($lang as $value) {
    echo "<br> the lang regard for each is: ";
    echo $value;
}

echo"<br>";
echo"<br>";
?>

    </div>
</body>
</html>