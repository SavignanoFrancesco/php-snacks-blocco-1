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
        "squadra_di_casa" => "Olimpia Milano",
        "squadra_ospite" => "Virtus Bologna",
        "punteggio_squadra_di_casa" => rand(0, 150),
        "punteggio_squadra_ospite" => rand(0, 150),
        ],
        [
        "squadra_di_casa" => "Varese",
        "squadra_ospite" => "Reggiana",
        "punteggio_squadra_di_casa" => rand(0, 150),
        "punteggio_squadra_ospite" => rand(0, 150),
        ],
        [
        "squadra_di_casa" => "Virtus Roma",
        "squadra_ospite" => "Treviso Basket",
        "punteggio_squadra_di_casa" => rand(0, 150),
        "punteggio_squadra_ospite" => rand(0, 150),
        ],

];

//stampa per debug
echo var_dump($matches).'<br><br>';

//titolo
echo 'PARTITE:<br>';

//ciclo l'array matches
foreach ($matches as $matchName => $matchValue) {
    // Stampo secondo lo schema richiesto
    echo ($matchName + 1).': '.$matchValue['squadra_di_casa'].' - '.$matchValue['squadra_ospite'].' | '.$matchValue['punteggio_squadra_di_casa'].' - '.$matchValue['punteggio_squadra_ospite'].'<br>';
}
 ?>
