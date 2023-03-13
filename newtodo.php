<?php

include ("includes/config.php");
 
include("includes/header.php");

if(!isset($_POST["todo_name"])) {
header("location: index.php");
}else{

$todoname = $_POST['todo_name'] ?? '' ;
$todoname = trim($todoname);
$todo = new Todolist ();

if ($todo -> setTodo($todoname)) {
$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);  

$jsonArray[] = $todoname ;
file_put_contents('todo.json', json_encode($jsonArray));

}else {
   $error = "<p> Ange mer ord </p>";
   $_SESSION["error"]=  $error;
   header("location: index.php");
} 

}

header("location:index.php");



?>
