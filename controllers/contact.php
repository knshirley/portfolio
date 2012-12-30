<?php

class Contact_Controller extends Base_Controller{

    public function main(){
        //Set current page
        $this->assign('currentPage', 'contact');

        $this->render();
    }

}

?>
