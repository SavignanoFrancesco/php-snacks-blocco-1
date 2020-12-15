<!-- PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php


//inserisco dentro le variabili i valory presi dalla query string
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// echo $name.$mail.$age;

//variabile che verifica se il nome ha più di tre caratteri
echo "-------------------------------------------------------------------------<br>";
echo 'CONTROLLO 1)<br>';
$valid_name = (strlen($name) > 3);
echo 'Lunghezza di '.$name.' > 3 ?:';
echo var_dump($valid_name);
echo "-------------------------------------------------------------------------<br>";

//variabile che verifica se la mail contiene almeno un punto e una sola chiocciola
$valid_mail = strpos($mail, '@') && (strpos($mail, '@') === strrpos($mail, '@')) && strpos($mail, '.');
echo "-------------------------------------------------------------------------<br>";
echo 'CONTROLLO 2)<br>';
echo $mail.' contiene almeno un punto e una sola chiocciola?:';
echo var_dump($valid_mail);
echo "-------------------------------------------------------------------------<br>";

//variabile che verifica se l'età è un numero maggiore di 0
$valid_age = (is_numeric($age) && ($age > 0));
echo "-------------------------------------------------------------------------<br>";
echo 'CONTROLLO 3)<br>';
echo $age.' è un numero(maggiore di 0)?:';
echo var_dump($valid_age);
echo "-------------------------------------------------------------------------<br>";

//se i dati inseriti sono validi
if($valid_name && $valid_mail && $valid_age){
    echo "ACCESSO RIUSCITO";
}
//se i dati inseriti sono validi
else{
    echo "ACCESSO NEGATO";
}

 ?>
