<?php   
include("includes/header.php")
?>



<div class="content">
    <div class="main"> 
        <div class ="input"><form action="newtodo.php" method="POST" >
            
                <label> lägg till task: </label> 
                <br>
                <input type="text" name="todo_name" placeholder="skriva nya tasks . . .">
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

<div  class="button"> 
         <a href="./delet.php?key ">   <p>         
         Delete</P> </a>
 </div>

   </div> 
<?php  endforeach; ?>


 <div  class="rensa">

   <p> <a href="rensa.php">   Rensa allt </a> </p>
              

  </div>

 </div>
<?php   
include("includes/footer.php")
?>

