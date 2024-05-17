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

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        
        // Menghitung panjang string dan jumlah kata
        $length_first = strlen($first_sentence);
        $word_count_first = str_word_count($first_sentence);
        
        $length_second = strlen($second_sentence);
        $word_count_second = str_word_count($second_sentence);

        echo "Panjang string: $length_first, Jumlah kata: $word_count_first <br>";
        echo "Panjang string: $length_second, Jumlah kata: $word_count_second <br>";

        echo "<h3> Soal No 2</h3>";

        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>" ;

        echo "<h3> Soal No 3 </h3>";
    
        $string3 = "PHP is old but sexy!";
        $changed_string = str_replace("sexy", "awesome", $string3);
        echo "String: \"$string3\" <br>"; 
        echo "OUTPUT : \"$changed_string\"";

    ?>
</body>
</html>
