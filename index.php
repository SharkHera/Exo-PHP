
<?php
// echo('hello');
// $lastName = ("Charles");
// $firstName = ("Emerson");
// $age = (24);
// echo($lastName.$firstName.$age);

// $km = (1);
// echo($km);
// $km =(3);
// echo($km);
// $km = (125);
// echo($km);


// $string = ("Charles");
// $int = (24);
// $float = (19.02);
// $boolean = (true);
// echo($string.$int.$float.$boolean);



// $int = (null);
// echo($int);
// $int = (24);
// echo($int);



// $name = ('Charles Emerson');
// echo ('bonjour ' . $name . ', comment vas tu ?');




// $lastName = ("Charles ");
// $firstName = ("Emerson");
// $age = (24);
// echo('Bonjour ' . $lastName . $firstName . ', tu as ' . $age . ' ans');



// $calcul = (3+4);
// $calcul1 = (5*20);
// $calcul2 = (45/5);
// echo($calcul . $calcul1 . $calcul2);




// $age = (24);
// if ($age >= 18) {
//     echo ("Vous êtes majeurs et autorisé(e) à accéder au site ✅");
// }
// else {
//     echo ("Pas majeurs, Accès refusé ❌ ");
// }



// $isEasy = (true);
// if ($isEasy == true) {
//    echo ("C'est facile!! ✅");
// }
//  else {
//     echo ("C'est difficile !!! ❌ ");
//  }


// $isEasy = (true);
// if ($isEasy == true) {
//    echo ("C'est facile!! ✅");
// }
//  else if ($isEasy == false){
//     echo ("C'est difficile !!! ❌ ");
//  }



// $age = (15);
// $gender = ("femme");
// if ($gender == "homme" && $age >=18){
//       echo ("Vous êtes un homme et vous êtes majeur ✅");
// }
// if ($gender == "homme" && $age <18){
//     echo ("Vous êtes un homme et vous êtes mineur ❌");
// }
// if ($gender == "femme" && $age >=18){
//     echo ("Vous êtes une femme et vous êtes majeur ✅");
// }
// if ($gender == "femme" && $age <18){
//     echo ("Vous êtes une femme et vous êtes mineur ❌");
// }



// $magnitude = (6);
// if ($magnitude == 1){
//   echo ("Micro-séisme impossible à ressentir.");
// }
// if ($magnitude == 2){
//     echo ("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
// }
//   if ($magnitude == 3){
//     echo ("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
// }

// if ($magnitude == 4){
//     echo ("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
// }
// if ($magnitude == 5){
//     echo ("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
// }
// if ($magnitude == 6){
//     echo ("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
// }
// if ($magnitude == 7){
//     echo ("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
// }
// if ($magnitude == 8){
//     echo ("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
// }
// if ($magnitude == 9){
//     echo ("Séisme capable de tout détruire sur une très vaste zone.");
// }





// ([(echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';)])
// if ($gender != "homme"){
//     echo ("C'est une développeuse !!!");
// }
// if ($gender != "femme"){
//     echo ("C'est un développeur !!!");
// }




// echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
// if ($age >= 18){
//     echo ("tu es majeur");
// }
// elseif ($age < 18){
//     echo ("tu n'es pas majeur");
// }



// ([(echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';)])

// if ($isOk == false){
//     echo ("c'est pas bon !!! ");
// }
// elseif ($isOk == true){
//     echo ("c'est ok");
// }



// ([(echo ($isOk) ? "c'est ok !!" : "c'est pas bon !!!";)])
// else{
//     echo("c'est pas bon")
// }





// $ennui = (1);
// while ($ennui <= 10) {
//     echo "C'est chiant le PHP <br />";
//     $ennui++;
// }



// $multiple = (0);
// $vie = (42);

// while ($multiple < 20)
// {
    
//     echo $multiple*$vie;
//     echo '<br />';
//     $multiple++;
// }


// $age = 100;
// $lifeExpectancy = 76;

// while ($age <= 10){
    
//    echo ($age*$lifeExpectancy);
   
//    $age--;
// }



//  $var = 1;
//  for ($var = 1; $var < 10; $var+= $var/2 );
//  {
//      echo ($var);
//  } 






// for ($brt= 1; $brt <=15; $brt++) { 

//     echo('-');
//     echo("On y arrive presque.");
//     echo '<br />';
// }





// for ($brt= 20; $brt >=0; $brt--) { 

//     echo('-');
//     echo("C'est presque bon.");
//     echo '<br />';
// }





// for ($brt= 1; $brt <=100; $brt+=15) { 

//     echo('-');
//     echo("On tient le bon bout.");
//     echo '<br />';
// }





//  for ($brt= 200; $brt >=0; $brt-=12) { 

//      echo('-');
//      echo("Enfin!!!!.");
//      echo '<br />';
//  }






// function verite()
// {

//     return true;
// }
// echo verite();






// function chaineDeCaractere(string $unMot)
// {
//     return $unMot;
// }
// echo chaineDeCaractere("Bonjour toi");





// function conca(string $PHP, string $maPatience)
// {
//     return $PHP . $maPatience;
// }
// echo conca("PHP vs ", "maPatience");




// function number(int $a, int $b)
// {
//     if ($a > $b) {
//         return "Le premier nombre est plus grand. <br>";
//     } else if ($a < $b) {
//         return "Le premier nombre est plus petit. <br>";
//     } else if ($a === $b) {
//         return "Les deux nombres sont identiques. <br>";
//     }
// }
// echo number(9, 2);
// echo number(2, 9);
// echo number(8,8);







// function numberString(int $int1, string $str1)
// {
//     echo $int1 . $str1;
// }
// numberString(9, 7);







// function presentation(string $nom, string $prenom, string $age)
//     {
//         return "Bonjour $nom $prenom, tu as $age ans. ";
//     }
// echo presentation("CHARLES","Emerson", 24);








// function pronoun(int $age, string $gender)
// {
//     $majeur = "vous êtes majeur";
//     if ($age < 18) {
//         $majeur = "vous êtes mineur";
//     }

//     $gender1 = "homme";
//     $accord = "";
//     if ($gender === "f") {
//         $gender1 = "femme";
//         $accord = "e";
//     }

//     return "Vous êtes un" . $accord . " " . $gender1 . " et " . $majeur . $accord;
// }
//     echo pronoun(24, "h");





// function threeInt(int $a = 9,int $b = 2, int $c = 98) {
//     return $a + $b + $c;
// }
// echo threeInt();







$months = [
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Aout",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre",
];

// echo $months[3];

// echo $months[5];

// $months[8] = "Août";
// echo $months[8];


$hautsDeFrance = [
    02 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme",
];

// echo $hautsDeFrance[59];


// $hautsDeFrance[51] = "Reims";
// echo $hautsDeFrance[51];





// foreach ($months as $key => $month){
//     echo $month." ".$key.'<br>';
// }



// foreach ($hautsDeFrance as $key => $haut){
//     echo "Le Département ". $haut . " à le numéro ". $key.'<br>';
// }


