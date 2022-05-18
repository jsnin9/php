<?php
    if(!isset($_SESSION)){
        session_start();
    }

    require "_header.php";
  

    if( isset($_GET["id"]) && isset($_GET["cat"]) && isset($_GET["value"]) && isset($_GET["value"]) ){

        $cat = $_GET["cat"];
        
        $id = substr($cat, 0, 2).$_GET["id"];
        $value = $_GET["value"];

        echo $id;
        echo $cat;
        echo $value;



        $produit = $_SESSION['categories'][$cat][$id];
        var_dump($produit); 
  
        if(!isset($produit)){
            die("le produit n'existe pas");
        }

        $stock_act = $_SESSION['categories'][$cat][$id]["stock"];
        $stock_act = $stock_act - $value;

        $_SESSION['categories'][$cat][$id]["stock"] = $stock_act;

        $panier->add($cat, $id, $value);
        $panier->show();

        /*header("location:catalogue.php?cat=".$cat);*/


        die("le produit a été ajouté a votre panier");

    }else{
        die("aucun produit selectionné");
    }


    
?>






