<?php
    //include "fuctions.php";
?>
<?php include "List.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form method="POST" action="deleteTask.php">
            <input type="number" min="1" placeholder="Task number" class="input" name="id">
            <button type="submit" class="btn">Удалить</button>
        </form>
        <?php
        //$myList->deleteTask();
        $listCont->delete($list1);
        ?>
        <a href="index.php" class="backBtn">Вернутся надаз к списку</a>
    </div>
</body> 
</html>