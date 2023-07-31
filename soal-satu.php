<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
    echo "<h3> Soal No 1</h3>";

        $first_sentence = "Hello PHP!";
        echo "Panjang String: ". strlen($first_sentence);
        echo ", jumlah kata: " . str_word_count($first_sentence);
        echo "<b> Dari Kata " . $first_sentence . "</b><br>";
        $second_sentence = "I'm ready for the challenges";
        echo "Panjang String: ". strlen($second_sentence);
        echo ", jumlah kata: " . str_word_count($second_sentence); 
        echo "<b> Dari Kata " . $second_sentence . "</b><br>";
        


    echo "<h3> Soal No 2</h3>";

        $string2 = "I love PHP";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ; 
        echo "Kata ketiga: " . substr($string2, 7, 8) . "<br>" ; 


    echo "<h3> Soal No 3</h3>";

        // $string3 = "PHP is old but Good!" ;
        // $string4 = "is old but awesome";
        // $string5 = substr_replace($string3,$string4, 4);
        // echo "String : " . $string3 . "<br>";
        // echo $string5;

        $string3 = "PHP is old but Good!";
        echo "String: \"$string3\" <br>";
        echo str_replace("Good!", "awesome", $string3);
    ?>