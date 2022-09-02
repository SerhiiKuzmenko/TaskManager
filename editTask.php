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
        <form method="POST" action="editTask.php">
            <input type="number" min="1" placeholder="Task number" class="input" name="id">
            <input type="text" placeholder="Title" class="input" name="title">
            <input type="text" placeholder="Description" class="input" name="desc">
            <button type="submit" class="btn">Изменить</button>
        </form>
        <?php
        $listCont->editTask($list1);
        ?>
        <a href="index.php" class="backBtn">Вернутся надаз к списку</a>
    </div>
</body> 
</html>