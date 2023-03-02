<?php

// Aquí tenim una llista de frases absurdes
$array = [
    "Quin és el regal més català que et pot cagar el tió?",
    "Quina serà la nova i trencadora activitat a la pròxima Festa dels Súpers?",
    "Què passa pel cap d’un votant de vox quan introdueix la papereta a l’urna?",
    "Quin es el meu vici secret?",
    "Què provocarà la 3a Guerra Mundial?",
    "Què acabarà portant Catalunya a la independència?",
    "Quin és el secret d’una vida llarga i saludable?",
    "Què vaig trobar amagat al lavabo del regional?",
    "Durant l’enterrament de l’àvia, no podia deixar de pensar en:",
    "Jo no sóc racista, simplement m’agrada més:",
    "Quin és el meu vici secret?",
    "Què va causar el divorci dels avis?",
    "Què va causar el naixement de vox?",
    "Què va causar l’atac de cor de l’avi?",
    "Què feia tanta pudor dins la nevera?",
    "Quan tiro canyes, m’asseguro que a l’altra persona li agradi:",
    "Què va trobar la meva exparella a l’armari?",
    "Què fa que una festa sigui una festa?",
    "No em van ascendir a la feina quan van descobrir que m’encanta",
    "Què és el primer en què penso després de fer un bon clau?",
    "El secret a veus que ningú vol reconèixer és que no som independents per culpa de",
    "L’ingredient secret de l’escudella de l’àvia era",
    "Des que he deixat de mirar TV3 trobo a faltar",
    "La pròxima cançó d’Els Catarres va sobre",
    "L’herència de l’avi al final era",
    "Al menú d'avui el plat especial es"
];

// Aquí calculen un número aleatori, perquè? Doncs perquè...
$min = 0;
$max = count($array) - 1;
$rand = rand($min, $max);

// I aquí simplement imprimeixen la frase aleatòria
echo $array[$rand];

// I això és tot... quin codi més inútil
?>