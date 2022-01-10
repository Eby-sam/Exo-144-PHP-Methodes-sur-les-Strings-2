<?php

$text = "Aujourd'hui il fait -1000 degree";
$text = addslashes($text);

$text = "brille sentomaru !";

echo strtoupper($text) . "<br>";
echo lcfirst($text) . "<br>";
echo ucwords($text) . "<br>";

$text3 = "";

echo strtolower($text3) . "<br>";
echo ucfirst($text3) . "<br>";

$mots4 = "mdp mdp2 chocolat chocolat2 blabla blabla2  ";
echo "Il ya " . str_word_count($mots4) . " mots<br>";

$phrase5 = "yoruichi est la femme la plus rapide des 3 mondes !!!!!!!";

$tab = explode(" ",$phrase5);

foreach($tab as $item){
    echo $item . "<br>";
}

$tabJoin = implode(" ",$tab);

$phrase6 = "tsunade est le hokage 5eme du nom !!!";
echo strrev($phrase6) . "<br>";
echo str_shuffle($phrase6) . "<br>";

$phrase7 = "<strong>Hello,</strong> nous re-apprenons<span style='color: blue;'>PHP</span>";

echo $phrase7 . "<br>";
echo strip_tags($phrase7) . "<br>";

$phrase8 = "soi fon est amoureuse de yoruichi";
$phrase8 = substr_replace($phrase8,"|",0,0);
echo $phrase8 . "<br>";

$phrase9 = str_split("bankai", 1);

foreach($phrase9 as $letter){
    echo $letter . "<br>";
}

$phrase10 = "text de mon choix";
echo str_replace("choix", "Hello world",$phrase10) . "<br>";

$phrase11 = "Ceci est mon test";
echo strpos($phrase11, "test") . "<br>";

function checkTextPos($chaine1,$chaine2){
    if(strpos($chaine1,$chaine2) === 0){
        echo "yes";
    }
    else {
        echo "no";
    }
    echo "<br>";
}

function checkText($chaine1, $chaine2){
    $pos = strpos($chaine1, $chaine2);
    if ($pos === strlen($chaine1) - strlen($chaine2)){
        echo "La chaine se termine bien par la portion de texte";
    }
    echo "<br>";
}

checkText("hello world", "world");