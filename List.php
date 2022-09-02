<?php 
//include "fuctions.php";


class List1{

    public $sourse = "tasks.json";
    
    function __constructor($sourse) {
        $this->sourse = $sourse;

    }


    function load(){
        $json = file_get_contents($this->sourse);
        $tasks  = json_decode($json, true);
        return $tasks;
    }

    function save($arrayJson){
        $jsonNew = json_encode($arrayJson); 
        file_put_contents('tasks.json', $jsonNew);
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



    function heandler(){
        if($_GET) {
        
            //var_dump($_GET);

            $arrayJson = $this->load();
            
            $arrayJson["tasks"][$_GET['taskid']]['title'] = $_GET['title'];
            $arrayJson["tasks"][$_GET['taskid']]['desc'] = $_GET['desc'];
                
            //print_r($arrayJson);
            $this->save($arrayJson);
        }
    }
}

class List2{
   // public $task = ;
    public $sourse = "tasks.json";

    function __constructor($sourse){
        $this->sourse = $sourse;
    }

    function load(){
        $json = file_get_contents($this->sourse);
        $tasks  = json_decode($json, true);
        return $tasks;
    }

    function save($arrayJson){
        $jsonNew = json_encode($arrayJson); 
        file_put_contents('tasks.json', $jsonNew);
    }

    function getAll(){
        return $this->load();
    }

    function deleteTask($num){
        $arrayJson=$this->load();

        if( count($arrayJson, COUNT_RECURSIVE) > $num && 
            count($arrayJson, COUNT_RECURSIVE) > 0){
            unset($arrayJson["tasks"][$num-1]);
            $this->save($arrayJson);
        }
        
    }

    /** Edit task / num - is id task / task - array ['title', 'desc'] **/
    function editTask($num, $taskTitle, $taskDesc){
        
        $arrayJson = $this->load();
        if( count($arrayJson, COUNT_RECURSIVE) > $num && 
            count($arrayJson, COUNT_RECURSIVE) > 0){
            $arrayJson["tasks"][$num-1]['title'] = $taskTitle;
            $arrayJson["tasks"][$num-1]['desc'] = $taskDesc;
            //$arrayJson["tasks"][] = $task;
                
            $this->save($arrayJson);
        }
            
        
    }

    function addTask($taskTitle, $taskDesc){
        
        $arrayJson = $this->load();
        //$arrayJson["tasks"][] = ['title' => 'new el', 'desc' => 'need to do'];
        $tmp = ((count($arrayJson, COUNT_RECURSIVE)-1)/3);
        $arrayJson["tasks"][$tmp]['title'] = $taskTitle;  
        $arrayJson["tasks"][$tmp]['desc'] = $taskDesc;   
        $this->save($arrayJson);   
        
    }
}


class ListController{


    function delete(List2 $list){

        $taskId = $_POST['id'];
        if($taskId && $taskId > 0) {
            $list->deleteTask($taskId);
        }
    }


    function editTask(List2 $list){
        $taskId = $_POST['id'];
        $taskTitle = $_POST['title'];
        $taskDesc = $_POST['desc'];
        if($taskId && $taskId > 0 && $taskTitle && $taskDesc) {
            $list->editTask($taskId, $taskTitle, $taskDesc);
        }
    }

    function addTask(List2 $list) {
        //з
        $taskTitle = $_POST['title'];
        $taskDesc = $_POST['desc'];
        if($taskTitle && $taskDesc){
            $list->addTask($taskTitle, $taskDesc);
        }

    }
}

$myList = new List1();

$list1 = new List2("tasks.json");
//$list2 = new List2("tasks2.json");

$listCont = new ListController();


//var_dump($list1->getAll());