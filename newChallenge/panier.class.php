<?php
    class panier{

        public function __construct(){

            if(!isset($_SESSION)){
                session_start();
            }

            if(!isset($_SESSION['panier'])){
                $SESSION['panier'] = array();

                foreach(array_keys($_SESSION['categories']) as $cat_panier){
                    $_SESSION['panier'][$cat_panier] = array();
                }
            }
        }

        public function add($cat, $id,$value){


            if(!isset($_SESSION['panier'][$cat][$id])){
                $_SESSION['panier'][$cat][$id] = $value;
            }

            else{
                $_SESSION['panier'][$cat][$id] += $value;
            }
        }

        public function show(){
            var_dump( $_SESSION['panier']);
        }


        public function totalPanier(){
            
            $s = 0;
            $total = 0;

            foreach(array_keys($_SESSION['panier']) as $categ){
                foreach(array_keys($_SESSION['panier'][$categ]) as $prd){
                    $s += $_SESSION['panier'][$categ][$prd];
                    $total+= (float)$_SESSION['categories'][$categ][$prd]['price']*$s;

            }
        }

        return [$s, $total];
        

    }
}



    /*$str = strtr($str, 'ÁÀÂÄÃÅÇÉÈÊËÍÏÎÌÑÓÒÔÖÕÚÙÛÜÝ', 'AAAAAACEEEEEIIIINOOOOOUUUUY');
$str = strtr($str, 'áàâäãåçéèêëíìîïñóòôöõúùûüýÿ', 'aaaaaaceeeeiiiinooooouuuuyy'); */
?>

