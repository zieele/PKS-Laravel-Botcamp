<?php 

    require('animal.php');
    $domba = new Animal("shaun");

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"
    
    $kodok = new Frog("buduk");
    // $kodok->jump(); // "hop hop"

    echo "Nama : ".$domba->name."<br>";
    echo "Legs : ".$domba->legs."<br>";
    echo "Cold Blooded : ".$domba->cold_blood."<br><br>";
    echo "Nama : ".$kodok->name."<br>";
    echo "Legs : ".$kodok->legs."<br>";
    echo "Cold Blooded : ".$kodok->cold_blood."<br>";
    echo $kodok->Jump()."<br><br>";
    echo "Nama : ".$sungokong->name."<br>";
    echo "Legs : ".$sungokong->legs."<br>";
    echo "Cold Blooded : ".$sungokong->cold_blood."<br>";
    echo $sungokong->Yell()."<br><br>";
?>