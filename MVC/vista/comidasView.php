    <?php
        require('libs/Smarty.class.php');
        class ComidasView {
        

        public function mostrarComidas($comidas,$titulo){
         
            $smarty = new Smarty();
            $smarty->assign('primertitulo',$titulo);
            $smarty->assign('comidas',$comidas);
            
            $smarty->display('../templates/comidas.tpl');
        
        }	

        public function getCategoriaNueva($comidas){
         
            $smarty = new Smarty();
            $smarty->assign('comidas',$comidas);
            $smarty->display('../templates/comidas.tpl');
        
         }
    }
?>