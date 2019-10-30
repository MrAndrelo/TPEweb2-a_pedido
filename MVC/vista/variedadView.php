<?php
        require_once('libs/Smarty.class.php');
        class VariedadView {
            
            public function mostrarVariedad($variedades,$titulo,$comidasFK){
                session_start();
                $smarty = new Smarty();
                $smarty->assign('usuario', $_SESSION['USER_NAME'] );
                $smarty->assign('variedades',$variedades);
                $smarty->assign('comidasFK',$comidasFK);
                $smarty->assign('activeLink',"variedades");
                $smarty->assign('segundotitulo',$titulo);
                $smarty->assign('BASE_URL',BASE_URL);
                $smarty->display('../templates/variedad.tpl');
                
                
            }	
            
            public function getVariedadNueva($variedad){
                
                $smarty = new Smarty();
                $smarty->assign('variedad',$variedad);
                $smarty->display('../templates/addVariedad.tpl');  
        
         }
         public function AddVariedad($comidas){
                
            $smarty = new Smarty();
            $smarty->assign('comidas',$comidas);
            $smarty->display('../templates/addVariedad.tpl');  
    
        }

        public function editarVariedad($comidas,$variedad){
                
            $smarty = new Smarty();
            $smarty->assign('comidas',$comidas);
            $smarty->assign('variedad',$variedad);
            $smarty->display('../templates/editarVariedad.tpl');  
    
        }
 
  
    }
?>