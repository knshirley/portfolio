<?php

class Resume_Controller extends Base_Controller{

    public function main(){
        //Set current page
        $this->assign('currentPage', 'resume');

        $this->render();
    }

}

?>
