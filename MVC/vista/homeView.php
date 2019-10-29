<?php

        require_once('libs/Smarty.class.php');
        class HomeView {
        



        public function showHome (){
         
            $smarty = new Smarty();
            $smarty->assign('activeLink',"home");
            $smarty->display('../templates/home.tpl');
        
        }	

    }
?>