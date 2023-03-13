<?php


$key = intval($_GET['key']);
//vd($key);
$json = file_get_contents('todo.json');
$jsonArray  = json_decode($json);

//pr($myArray);
unset($jsonArray [$key]);
$newArray = array_values($jsonArray );
//pr($newArray);

$newArray = json_encode($newArray);
file_put_contents('todo.json', $newArray);
header('Location: index.php');