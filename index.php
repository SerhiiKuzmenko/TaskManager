<?php //include "fuctions.php"?>
<?php include "List.php"?>

<html>
   <head>
  <title>Задачи</title>
  <link rel="stylesheet" href="style.css">
  </head>
   <body>
       <div class="page">
            <div class="page__time">
            Сегодня <?php echo $myList->dateNow(); ?>
            </div>
        </div>


        <div class="list">
            <?php 
            //echo '<form class="form" method="post"> <input type="text" name="text" placeholder="Доп. task" class="input" required> <button type="#" class="wb">Добавить</button> </form> <br>';
            $tasks = $myList->load();

            //$tasks[$_GET['id']]['title'];
            //$tasks["tasks"][0]['title'];
            //print_r($tasks);

            $myList->outList($tasks);
            //echo count($tasks, COUNT_RECURSIVE);

            // for($i=0;$i<=count($tasks, COUNT_RECURSIVE);$i++){
            //     echo '<div class="list__item">
            //     <a type="submit" href ="task.php?id='.$i.'">'.$tasks["tasks"][$i]['title'].'</a>
            //     </div>';
            // } 
            
            ?>
            
        </div>
        <div class="buttons">
            <a class="styleA" href="addTask.php"?>Добавить задачу</a>
            <a class="styleA" href="editTask.php"?>Изменить задачу</a>
            <a class="styleA" href="deleteTask.php">Удалить задачу</a>
        </div>
        

   </body>
   
</html>