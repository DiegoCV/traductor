<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;
 
$source = 'fr';
$target = 'en';
$text = 'enfant';
 
$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);
 
echo $result;