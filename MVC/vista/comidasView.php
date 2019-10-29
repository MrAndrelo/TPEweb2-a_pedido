    <?php
        require_once('libs/Smarty.class.php');
        class ComidasView {
        
            public function showHome (){
         
                $smarty = new Smarty();
                $smarty->assign('activeLink',"home");
                $smarty->assign('BASE_URL',BASE_URL);
                $smarty->display('../templates/home.tpl');
            
            }	


        public function mostrarComidas($comidas,$titulo){
         
            $smarty = new Smarty();
            $smarty->assign('primertitulo',$titulo);
            $smarty->assign('comidas',$comidas);
            $smarty->assign('activeLink',"comidas");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->display('../templates/comidas.tpl');
        
        }	

        public function getCategoriaNueva($comidas){
         
            $smarty = new Smarty();
            $smarty->assign('comidas',$comidas);
            $smarty->display('../templates/comidas.tpl');
            
        
         }

        

        
    }
?>