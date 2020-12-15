<!-- Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
Olimpia Milano - Cantù | 55 - 60
-->

<?php
$matches = [ //array che contiene le partite(primo livello)
        [ // array che contiene i dati della partita(secondo livello)
        "Squadra di casa" => "Olimpia Milano",
        "Squadra ospite" => "Virtus Bologna",
        "Punteggio squadra di casa" => rand(0, 150),
        "Punteggio squadra ospite" => rand(0, 150),
        ],
        [
        "Squadra di casa" => "Varese",
        "Squadra ospite" => "Reggiana",
        "Punteggio squadra di casa" => rand(0, 150),
        "Punteggio squadra ospite" => rand(0, 150),
        ],
        [
        "Squadra di casa" => "Virtus Roma",
        "Squadra ospite" => "Treviso Basket",
        "Punteggio squadra di casa" => rand(0, 150),
        "Punteggio squadra ospite" => rand(0, 150),
        ],

];

//stampa per debug 
echo var_dump($matches).'<br><br>';

//titolo
echo 'PARTITE:<br>';

//ciclo l'array matches
foreach ($matches as $matchName => $matchValue) {
    // Stampo secondo lo schema richiesto
    echo ($matchName + 1).': '.$matchValue['Squadra di casa'].' - '.$matchValue['Squadra ospite'].' | '.$matchValue['Punteggio squadra di casa'].' - '.$matchValue['Punteggio squadra ospite'].'<br>';
}
 ?>
