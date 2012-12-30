<?php

class Designs_Controller extends Base_Controller{

    public function main(){
        //Set current page
        $this->assign('currentPage', 'designs');

        $this->render();
    }

}

?>
