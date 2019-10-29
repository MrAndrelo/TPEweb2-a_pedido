<?php
        require_once('libs/Smarty.class.php');
        class VariedadView {
            
            public function mostrarVariedad($variedad,$titulo){
                
                $smarty = new Smarty();
                $smarty->assign('variedad',$variedad);
                $smarty->assign('activeLink',"variedades");
                $smarty->assign('segundotitulo',$titulo);
                $smarty->assign('BASE_URL',BASE_URL);
                $smarty->display('../templates/variedad.tpl');
                
            }	
            
            public function getVariedadNueva($variedad){
                
                $smarty = new Smarty();
                $smarty->assign('variedad',$variedad);
                $smarty->display('../templates/variedad.tpl');  
        
         }
  
    }
?>