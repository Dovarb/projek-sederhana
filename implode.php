<?php
    echo "<h2>www.agussuratna.net</h2>";
    echo "<br/>";
    
    $kalimat = "belajar pemrogaman web dengan PHP di agussuratna.net";

    $data = explode(" " , $kalimat);
    

    print_r($data);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo " Data 1 = " . $data[0];
    echo "<br/>";
    echo " Data 2 = " . $data[1];
    echo "<br/>";
    echo " Data 3 = " . $data[2];
    echo "<br/>";
    echo " Data 4 = " . $data[3];
    echo "<br/>";
    echo " Data 5 = " . $data[4];
    echo "<br/>";
    echo " Data 6 = " . $data[5];
    echo "<br/>";
    echo " Data 7 = " . $data[6];

    echo "<br/>";
    echo "<br/>";
    echo "<h3>Menggabungkan string dengan implode</h3>";
    echo "<br/>";

    echo implode(" ",$data);
?>

<a href="index.php">Home</a>