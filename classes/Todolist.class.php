<?php

include ("includes/config.php");
class Todolist{
//properties 
public $todoname;
public $jsonArray  = array ();


//methods

function __construct(){
    //kontroll om filen existerar 
    if(file_exists ("todolist.json")){
      //läsa in fil
      $file = file_get_contents("todolist.json");
      //omvandla den till array 
     $this ->jsonArray  = json_decode( $file , true);

    }
}


 // Set todo
function setTodo(string $todoname) : bool{
    // Kontroll om textstränger är tom och längre än 5 tecken
    if( strlen ($todoname) > 5){
        $this->todoname = $todoname;
    return true;
    }
    return false;
}
}

?>