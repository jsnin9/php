<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["categories"])){

        $_SESSION["categories"] = array(

            "Télévision" => array(
    
                    "Te0" => array(
                        "id"=>0,
                        "img"=>"img/samsung.png",
                        "name"=>"Samsung Smart TV2020 ",
                        "price"=>"1349.00",
                        "stock"=>"5"
                    ),
    
                    "Te1" => array(
                        "id"=>1,
                        "img"=>"img/sony.png",
                        "name"=>"TV LED Sony Bravia",
                        "price"=>"300.00",
                        "stock"=>"5"
                    ),
                    "Te2" => array(
                        "id"=>2,
                        "img"=>"img/TCL.png",
                        "name"=>"TCL 43 EP 644",
                        "price"=>"400.00",
                        "stock"=>"5"
                    ),
                    "Te3" => array(
                        "id"=>3,
                        "img"=>"img/phillips.png",
                        "name"=>"Philips LED Smart TV",
                        "price"=>"500.00",
                        "stock"=>"5"
                    ),
                    "Te4" => array(
                        "id"=>4,
                        "img"=>"img/hyundai.png",
                        "name"=>"Hyundai Smart TV LED 24",
                        "price"=>"700.00",
                        "stock"=>"5"
                    ),
                ),
    
            "Ordinateur" => array(
    
                "Or0" => array(
                        "id"=>0,
                        "img"=>"img/mcbookpro.png",
                        "name"=>"MacBookPro",
                        "price"=>"1349.00",
                        "stock"=>"5"
                ),
    
                "Or1" => array(
                    "id"=>1,
                    "img"=>"img/dell.png",
                    "name"=>"Dell XPS 13",
                    "price"=>"300.00",
                    "stock"=>"5"
                ),
    
                "Or2" => array(
                    "id"=>2,
                    "img"=>"img/hp.png",
                    "name"=>"Hp X360",
                    "price"=>"400.00",
                    "stock"=>"5"
                ),
    
                "Or3" => array(
                    "id"=>3,
                    "img"=>"img/acer.png",
                    "name"=>"Acer Aspire 5",
                    "price"=>"500.00",
                    "stock"=>"5"
                ),
    
                "Or4" => array(
                    "id"=>4,
                    "img"=>"img/asus.png",
                    "name"=>"Asus vivobook",
                    "price"=>"700.00",
                    "stock"=>"5"
                ),
            ),
    
            "Smartphone" => array(
                "Sm0" => array(
                    "id"=>0,
                    "img"=>"img/iphone13.png",
                    "name"=>"Iphone 13",
                    "price"=>"909.00",
                    "stock"=>"5"
                ),
                "Sm1" => array(
                    "id"=>1,
                    "img"=>"img/samsungS21.png",
                    "name"=>"Samsung galaxy S21 5G",
                    "price"=>"649.00",
                    "stock"=>"5"
                ),
                "Sm2" => array(
                    "id"=>2,
                    "img"=>"img/huaweiP30.png",
                    "name"=>"HuaweiP30.png",
                    "price"=>"500.00",
                    "stock"=>"5"
                ),
                "Sm3" => array(
                    "id"=>3,
                    "img"=>"img/xiaomi.png",
                    "name"=>"Xiaomi 11",
                    "price"=>"569.00",
                    "stock"=>"5"
                ),
                "Sm4" => array(
                    "id"=>4,
                    "img"=>"img/iphone13max.png",
                    "name"=>"Iphone 13 Pro Max",
                    "price"=>"1259.00",
                    "stock"=>"5"
                ),
                
            ),    
        );    
    }

?>