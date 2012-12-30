<?php

class Home_Controller extends Base_Controller{

    public function main(){

        //Set current page
        $this->assign('currentPage', 'home');

        $home = new Home_Model();

        $message = $home->getMessage();

        $this->assign('message', $message);

        $this->render();
    }

}

?>
