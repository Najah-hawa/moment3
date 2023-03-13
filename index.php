<?php   
include("includes/header.php")
?>



<div class="content">
    <div class="main"> 
        <div class ="input"><form action="newtodo.php" method="POST" >
            
                <label for="lägg till task" > lägg till task: </label> 
                <br>
                <input type="text" name="todo_name" id="" placeholder="skriva nya tasks . . .">
                <button type="submit" name="submit"> Lägg till </button>
           
        </form>  

 </div>
<div class = "error"> <?php         
if (isset($_SESSION["error"])){
echo$_SESSION["error"];


}
unset($_SESSION["error"]);

?>
</div>
<?php 

// loppa genom task i json file och skriva till sidan. 
$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true); 
 foreach (($jsonArray) as $key => $value ) :  ?>
  <div class= "divtask"><p> <?php echo $value ; ?> </p> 

  <a href="./delet.php?key ">
                    <button class="del">
                        Delete
                    </button>
 </a>
   </div> 
<?php  endforeach; ?>


 <div  class="rensa">

    <a href="rensa.php"> <p>  Rensa allt </p>
              
 </a>
  </div>



<?php   
include("includes/footer.php")
?>

