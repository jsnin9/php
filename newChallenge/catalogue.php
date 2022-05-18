<?php
  if(!isset($_SESSION)){
    session_start();
  }

  require "_header.php";

  $categ = $_GET["cat"];

?>

<!DOCTYPE html>

  <html lang="en">

  <head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="css/catalogue.css">
      <link rel="stylesheet" href="css/main.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

      <title><?php echo $categ;?></title>

  </head>

  <body>
      
    <?php 
      require 'headerh.php';
      $i=0;
    ?>

    <div class="titre"><h1><span><span><?php echo $categ ?></span></span></h1></div>

    <p><button class="button1"  onclick="afficher()">Afficher le stock</button></p>

    <div id="catalogue" class="catalogue">
    
        <?php foreach($_SESSION["categories"][$categ] as $products): ?>

          <div class="tac" id="tac">

            <p><img src="<?php echo $products["img"]; ?>"  alt=""></p>
            <p><?php echo $products["name"]; ?></p>
            <p><?php echo $products["price"]; ?></p>
            <p><?php echo $products["id"]; ?></p>
            <p class="stock" id="stock2<?=$i?>"><?php echo $products["stock"]; ?></p>
            <p><button class="button3" onclick="diminuer(<?php echo $i; ?>)">-</button><input id="<?php echo $i; ?>" disabled class="nb" type="text" value="0"><button class="button3" onclick="augmenter(<?php echo $i; ?>)">+</button></p>
            <?php $ic = $products["id"]; ?>
            <p> <button  onclick="addpanier('<?php echo $categ;?>','<?php echo $ic;?>','<?php echo $i; ?>')" type="submit" class="button2" >AJOUTER AU PANIER</button> </p>
      
          </div >
        <?php $i++;?>

      <?php endforeach; ?>

    </div>

    <?php require 'footer.php';?>


      <script type="text/javascript" src="js/catalogue.js"></script> 
      <script type="text/javascript" src="js/main.js"></script>

      </body>


</html>