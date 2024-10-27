<?php

// Una col·lecció de frases sense sentit, perquè sembla que no tenim res millor a cardar
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
    "Al menú d'avui el plat especial ès"
];

// Ruta al fitxer on guardarem les últimes 5 respostes, perquè algú va decidir complicar-ho tot
$fitxerUltimesRespostes = 'ultimes_respostes_black.txt';

// Llegim les últimes respostes si el fitxer existeix, i si no, doncs res, endavant les atxes
$ultimesRespostes = [];
if (file_exists($fitxerUltimesRespostes)) {
    $ultimesRespostes = file($fitxerUltimesRespostes, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

// Eliminem les últimes respostes de l'array principal, no fos cas que repetíssim i algú es molestés
$frasesDisponibles = array_diff($array, $ultimesRespostes);

// Si no queden frases, és que ja hem arribat al límit de la nostra creativitat
if (count($frasesDisponibles) == 0) {
    // Reiniciem tot perquè no hem estat capaços de pensar en més frases
    $frasesDisponibles = $array;
    $ultimesRespostes = [];
}

// Agafem una frase aleatòria, perquè pensar una lògica millor seria massa feina
$elementARetornar = $frasesDisponibles[array_rand($frasesDisponibles)];

// Afegim la nova frase a les últimes respostes, per recordar el que hem cardat fins ara
$ultimesRespostes[] = $elementARetornar;

// Mantenim només les últimes 5 respostes, perquè algú va decidir que 5 era el número màgic
if (count($ultimesRespostes) > 5) {
    $ultimesRespostes = array_slice($ultimesRespostes, -5);
}

// Guardem les últimes respostes al fitxer, esperant que el servidor no peti
file_put_contents($fitxerUltimesRespostes, implode("\n", $ultimesRespostes));

// Finalment, imprimim la frase i ens anem a cardar un café i a cagar a la via
echo $elementARetornar;

?>