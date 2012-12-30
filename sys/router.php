<?php

require('base_controller.php');
require('base_model.php');

function __autoload($className){

    list($fileName, $suffix) = split('_', $className);

    switch(strtolower($suffix)){
        case 'model':
            $folder = '/models/';
            break;

        default:
            $folder = '/lib/';
            break;
    }

    $target = SERVER_ROOT . $folder . strtolower($fileName) . '.php';

    //Try to Load file
    if(file_exists($target)){
        include_once($target);
    }
    else{
        throw new Exception('The file containing the class "' . $className . '" does not exist.');
    }
}

$controllerFile = DEFAULT_CONTROLLER;
$action = DEFAULT_ACTION;

//Set the controller
if ($_GET['controller'] != ""){
    $controllerFile = $_GET['controller'];
}

//Set the action
if ($_GET['action'] != ""){
    $action = $_GET['action'];
}

//Try to find the file
try{
    $target = SERVER_ROOT . '/controllers/' . strtolower($controllerFile) . '.php';

    include_once($target);
 
    $controllerClass =  $controllerFile . '_Controller';

    //Does the class exist?
    if (!class_exists($controllerClass)){
        throw new Exception('The class "' . $controllerClass . '" does not exist.');
    }

    //Does it extend the base controller?
    $parents = class_parents($controllerClass);
    if (!in_array("Base_Controller", $parents)){
        throw new Exception('The class "' . $controllerClass . '" does not extend the base controller.');
    }    

    //Does it contain the action?
    if(!method_exists($controllerClass, $action)){
        throw new Exception('The controller class "' . $controllerClass . '" does not contain the action "' . $action . '".');
    }

    //If get to this point, execute the action
    $controller = new $controllerClass($action);

    $controller->execute_action();
}

//Later redirect to 404 page
catch (Exception $ex){
    echo $ex;
}  
