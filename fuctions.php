<?php

function load($sourse = 'tasks.json'){
    $json = file_get_contents($sourse);

    $tasks  = json_decode($json, true);

    return $tasks;
    
}



function dateNow(){
    return date('d.m.Y H:i');
}


function outList($tasks){
    for($i=0;$i<=count($tasks, COUNT_RECURSIVE);$i++){
        echo '<div class="list__item">
        <a type="submit" href ="task.php?id='.$i.'">'.$tasks["tasks"][$i]['title'].'</a>
        </div>';
    }
}

function deleteTask(){
    if($_GET) {
        $json = file_get_contents('tasks.json');
        $arrayJson = json_decode($json, true);
        
        unset($arrayJson["tasks"][$_GET['num']-1]);
        
        $jsonNew = json_encode($arrayJson); 
        file_put_contents('tasks.json', $jsonNew);
    }
}

function editTask(){
    if($_GET) {
        $json = file_get_contents('tasks.json');
        $arrayJson = json_decode($json, true);
        if($_GET['num']){
            $arrayJson["tasks"][$_GET['num']-1] = $_GET;
        }else{
            $arrayJson["tasks"][] = $_GET;
        }
         
        
        $jsonNew = json_encode($arrayJson); 
        file_put_contents('tasks.json', $jsonNew);
    }
}

function addTask(){
    if($_POST) {
        $json = file_get_contents('tasks.json'); // читаем и ложим в строку
        $arrayJson = json_decode($json, true);
        //$arrayJson["tasks"][] = ['title' => 'new el', 'desc' => 'need to do'];
        $arrayJson["tasks"][] = $_POST; 
        
        $jsonNew = json_encode($arrayJson); 
        file_put_contents('tasks.json', $jsonNew);   
    }
}

function heandler(){
    if($_GET) {
    
        //var_dump($_GET);

        $json = file_get_contents('tasks.json');
        $arrayJson = json_decode($json, true);
        
        $arrayJson["tasks"][$_GET['taskid']]['title'] = $_GET['title'];
        $arrayJson["tasks"][$_GET['taskid']]['desc'] = $_GET['desc'];
            
        //print_r($arrayJson);
        $jsonNew = json_encode($arrayJson); 
        file_put_contents('tasks.json', $jsonNew);
    }
}