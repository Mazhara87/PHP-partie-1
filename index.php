<?php
$lastname = "Doe";
$firstname = "John";
$age = 30;

echo "<p> Nom : $lastname </p>";
echo "<p> Prenom : $firstname </p>";
echo " Age : $age </p>";

// ex3
$km = 1;
echo "<p> Contenu de km : $km </p>";
$km = 3;
echo "<p> Nouveau contenu de km : $km </p>";
$km = 125;
echo "<p> Nouveau contenu de km :  $km  </p>";

// ex4
$stringVar = "Bonjour";
$intVar = 42;
$floatVar = 3.14;
$boolVar = true;

echo "<p>Variable de type string :  $stringVar  </p>";
echo "<p>Variable de type int : $intVar  </p>";
echo "<p>Variable de type float : $floatVar </p>";
echo "<p>Variable de type booléen : ($boolVar ? 'true' : 'false') </p>";

// ex5
$variableInt;
// echo "<p>Valeur de la variable intiale :". $variableInt." </p>";
var_dump($variableInt);
$variableInt = 42;
echo "Nouvelle valeur de la variable : $variableInt </p>";

// ex6
$name = "Alice";
echo "Bonjour  $name , comment vas-tu ?";

// ex7
$lastname = "Doe";
$firstname = "John";
$age = 30;
echo "<p>Bonjour $lastname $firstname  ,tu as $age ans?</p>";

?>