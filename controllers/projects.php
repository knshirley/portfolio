<?php

class Projects_Controller extends Base_Controller{

    public function main(){
        //Set current page
        $this->assign('currentPage', 'projects');

        $this->render();
    }

}

?>
