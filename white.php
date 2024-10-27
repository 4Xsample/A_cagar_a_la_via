<?php

// Una col·lecció de frases sense sentit, perquè sembla que no tenim res millor a cardar
$array = [
   "L’Opus Dei.",
   "L’adoctrinament de TV3.",
   "Un penis superheroi que lluita per la justícia.",
   "Tsunami Democràtic.",
   "La Batalla de l’Ebre.",
   "Gabriel Rufián.",
   "Votar esquerra republicana.",
   "Castellers.",
   "La santa espina.",
   "Puta Espanya!",
   "Plats bruts.",
   "Pere Aragonès.",
   "Carles Puigdemont.",
   "Miquel Iceta.",
   "En Shin-Chan fent el monstre del cul.",
   "Conills voladors assassins.",
   "Camps de concentració.",
   "Una unitat antidisturbis fent un examen de mates.",
   "Anar de vacances a Susqueda i no tornar.",
   "Un borbó a l’atzar.",
   "Un penis de 35 cm.",
   "L’accent de Girona.",
   "Francisco Franco.",
   "Les cançons de Bola de Drac en castellà.",
   "El burquini.",
   "Adolf Hitler.",
   "Abascal.",
   "Sopa de cabra.",
   "Sangtraït.",
   "Tallar les vies de l’AVE a Girona.",
   "El jutge Marchena.",
   "El meu compte bancari.",
   "Porno alemany sadomasoquista.",
   "Diarrea explosiva.",
   "Ossama Bin Laden.",
   "Un grapat de polles en vinagre.",
   "Al-Qaida.",
   "Gais fotent-se mà.",
   "Les prostitutes del camp nou.",
   "El ministre de salut.",
   "una dotzena d’esclaus africans.",
   "Un pessebre vivent nudista.",
   "La teva família.",
   "Els serveis secrets de la Paeria.",
   "Un estruç amb monocle prenent un cafè.",
   "El teu futur.",
   "Un bon bukkake.",
   "Un referèndum il·legal.",
   "Un infectat de covid.",
   "Els serveis secrets de la Catalunya nord.",
   "Una discoteca d’ambient.",
   "Grallers.",
   "Una palla ben feta.",
   "Els teus genitals.",
   "Txernòbil.",
   "Un Satisfyer.",
   "Un nen soldat.",
   "Una bona mamada.",
   "La moreneta.",
   "El titafreda jugant a Crusader kings 3.",
   "L’esperit d’Urquinaona.",
   "Còctels Molotov.",
   "Un consolador amb forma de puny.",
   "Txarango.",
   "Francesc_bm",
   "Un cable coaxial",
   "La Blanqueta"
];

// Ruta al fitxer on guardarem les últimes 5 respostes, perquè algú va decidir complicar-ho tot
$fitxerUltimesRespostes = 'ultimes_respostes_white.txt';

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