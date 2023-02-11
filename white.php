<?php

// Aquí tenim una llista de frases absurdes
$array = [
   "L’Opus Dei.",
   "L’adoctrinament de TV3.",
   "La variant Òmicron",
   "Un penis superheroi que lluita per la justícia.",
   "Tsunami Democràtic.",
   "La Batalla de l’Ebre.",
   "Gabriel Rufián.",
   "Votar esquerra republicana.",
   "Castellers.",
   "El temps.",
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
   "Francesc_bm"

];

// Aquí calculen un número aleatori, perquè? Doncs perquè...
$min = 0;
$max = count($array) - 1;
$rand = rand($min, $max);

// I aquí simplement imprimeixen la frase aleatòria
echo $array[$rand];

// I això és tot... quin codi més inútil
?>
