<?php
  $array = [
    "Quin és el regal més català que et pot cagar el tió?", 
    "Quin era el hobby més secret de Francisco Franco, que només feia en nits de lluna plena?", 
    "Quina serà la nova i trencadora activitat a la pròxima Festa dels Súpers?", 
    "Què passa pel cap d’un votant de VOX quan introdueix la papereta a l’urna?",
    "Quin es el meu vici secret?",
    "Què provocarà la 3a Guerra Mundial?",
    "Què acabarà portant Catalunya a la independència?",
    "Quin és el secret d’una vida llarga i saludable?",
    "Què vaig trobar amagat al lavabo del regional?",
    "La nova moda, ser negacionista de:"
    "La nova incorporació a Creadors es:"
];
  $min = 0;
  $max = count($array)-1;

  $rand = rand($min,$max);

  echo $array[$rand]

?>
