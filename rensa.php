<?php

$json = file_get_contents('todo.json');
$jsonArray  = json_decode($json);

foreach ($jsonArray as $value) {
    unset($jsonArray[count($jsonArray) - 1]);
}

$newArray = array_values($jsonArray);
$newArray = json_encode($newArray);
file_put_contents('./todo.json', $newArray);

header('Location: index.php');