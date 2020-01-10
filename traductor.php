<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

/*

{
	idioma_origen:'es',
	idioma_destino:'en',
	palabras:['hola', 'amigos']
}

*/

$my_json_input = json_decode(file_get_contents('php://input'), true);

$source = $my_json_input['idioma_origen'];
$target = $my_json_input['idioma_destino'];
$palabras = $my_json_input['palabras'];

$trans = new GoogleTranslate();
$traduccion = array();

foreach ($palabras as $palabra) {
	array_push($traduccion, [$palabra, $trans->translate($source, $target, $palabra)]);
}
 

header("Content-type: application/json; charset=utf-8");

echo  json_encode($traduccion);