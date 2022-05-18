<?php
   if(!isset($_SESSION)){
    session_start();
  }

  require "_header.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/panier.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">



  <title>Document</title>

</head>

<body class="body">

  <?php require "headerh.php"; ?>
  

  <div class="tab">

    <div class="tab1">
      <table class="cat">
        <thead class="head">
            <th>Illustration</th>
            <th>Nom du produit</th>
            <th>Référence</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>Panier</th>
        </thead>

        <tbody>
          <?php foreach (array_keys($_SESSION['panier']) as $cat): ?>
          <?php foreach (array_keys($_SESSION['panier'][$cat]) as $prd): ?>
          <tr>
            <td><img src="<?php echo $_SESSION['categories'][$cat][$prd]["img"]; ?>" height="200" width="300" alt=""></td>
            <td><?php echo $_SESSION['categories'][$cat][$prd]["name"]; ?></td>
            <td><?php echo $prd; ?></td>
            <td><?php echo $_SESSION['panier'][$cat][$prd]; ?></td>
            <td><?php echo $_SESSION['panier'][$cat][$prd]; ?></td>
            <td id="poubelle"><i class="far fa-trash-alt"></i></td>
          </tr>
          <?php endforeach; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div>
      
    <table class= "cat1">

    <?php $total = $panier->totalPanier(); ?>
  
        <thead>
          <tr>
            <th>Nombre de produits</th>
            <td><?=$total[0]?></td>
          </tr>
         <br>
          <tr>
            <th>Total à payer</th>
            <th><?=$total[1]?>€</th>
          </tr>
        </thead> 

    </div>

          




  </div>
</body>

</html>