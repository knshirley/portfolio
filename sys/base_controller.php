<?php
/**
* base_controller
* Sets up all controllers basic functions & variables
**/

abstract class Base_Controller{
    protected $action;
    protected $data = array();

    public function __construct($action){
        $this->action = $action;
    }	

    /**
    * execute_action
    * Public function for the router
    */
    public function execute_action(){
        return $this->{$this->action}();
    }

    /**
    * assign
    * Allows the controller to set variables for the view (AKA the view bag)
    *
    * @param $variable - the name of the variable
    * @param $value - the value...
    */
    protected function assign($variable, $value){
        $this->data[$variable] = $value;
    }

    /**
    * render
    * Loads the view for the action
    *
    * @param $fullView (optional) - if someone doesn't want to load the page with the template
    */
    protected function render($fullView = true){
        $data = $this->data;

        $file = 'views/' . strtolower(str_replace("_Controller", "", get_class($this))) . '/' . $this->action . '.php';
		
        if ($fullView){
            require('views/template.php');
        }
        else{
            require($file);
        }
    }
}


?>
