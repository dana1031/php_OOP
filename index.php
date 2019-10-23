<?php
require 'function/file.php';
require 'classes/FileDB.php';

$db = new FileDB('data/db.txt');
var_dump($db);

//$db->load();
//$db->addRow('Vartotojai', ['name'=>'Rasa', 'surname' => 'Lietuvnikaite']);
//////arrayju issaugo i faila
//$db->save();
//$db->load();
//var_dump($db->getData());