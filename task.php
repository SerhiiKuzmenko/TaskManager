<?php //include "fuctions.php" ?>
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
    <h1><?php
    $tasks = $myList->load(); 
    echo $tasks["tasks"][$_GET['id']]["title"]; 
    //$idt = $_GET[id];
    //echo '<br>';
    //echo $idt;
    ?></h1>
    
    <form method="GET" action="heandler.php">
        <input name="taskid" value="<?= $_GET['id'] ?>" hidden />
        <input type="text" placeholder="Title" class="input" name="title" value="<?=$_GET['title']?>">
        <input type="text" placeholder="Description" class="input" name="desc" value="<?=$_GET['desc']?>">
        <button type="submit" class="btn">Изменить</button>
    </form>
    
</body>
</html>