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
        <form method="POST" action="addTask.php">
            <input type="text" class="input" name="title">
            <input type="text" class="input" name="desc">
            <button type="submit" class="btn">Добавить</button>
        </form>
        <?php
        $listCont->addTask($list1);
            
            /**$addT = $_GET['title'];/$arrAddTask = $addT;/$tmp = json_encode($arrAddTask);/file_put_contents('tasks.json', $tmp, FILE_APPEND);/echo $addT;/$taskArray = json_decode("tasks.json", true);/var_dump($taskArray);/$taskArray['tasks'] = $_POST['title'];/$json = json_encode($taskArray);**/
            
        ?>
        <a href="index.php" class="backBtn">Вернутся надаз к списку</a>
    </div>
</body> 
</html>