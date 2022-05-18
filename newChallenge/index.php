<?php     

?>

<!DOCTYPE html>

  <html lang="en">

    <head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>js_elias</title>

      <link href="css/index.css" rel="stylesheet" />
      <link href="css/main.css" rel="stylesheet" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    </head>

  <body>

    <div class="keys">

      <?php require 'headerh.php';?>

        <div class="boite1">

          <div class="container">

            <div class="left">

                <h1>
                    <span><span>Le plaisir</span></span>
                    <span><span>d'être</span></span>
                    <span><span>connecté</span></span>           
                </h1>
                
            </div>

          <div class="right">

            <div class="item" style="background-image: url(img/tv1.png"></div>
            <div class="item" style="background-image: url(img/pc1.jpg)"></div>
            <div class="item" style="background-image: url(img/iphone-12-ecran.jpg)"></div>

          </div>

        </div>

      </div>
      
   </div>

   
  <main>

    <div class="suite">
      
      <div class="suite1">

      <div class="suite-class">
        <i class="fas fa-truck suite-icone"></i><br>
        <p class="suite-text">Livraison</p>
        <p >Offerte</p>
      </div>

      <div class="suite-class">
        <i class="far fa-check-circle suite-icone"></i><br>
        <p class="suite-text">Garantie</p>
        <p>Produits de 2 ans</p>
      </div>

      <div class="suite-class">
          <i class="far fa-credit-card suite-icone"></i><br>
          <p class="suite-text">Paiement</p>
          <p>CB x3 sans frais</p>
      </div>

    </div>

    <h2>
      <span><span>Profitez de </span></span>
      <span><span>nos offres</span></span>
      <span><span>exclusives</span></span>           
    </h2>

  </div>


    <div class="boite">

      <div class="v1" id="v1" style="margin-bottom:6rem"></div>

      <div class="container2">

        <div class="left2">
    
            <h1>
                <span><span>Téléphones</span></span>
                <span><span>haute </span></span>
                <span><span>gamme</span></span>           
            </h1>
            
        </div>
    
        <div class="right2">

          <div class="item2"></div>
            <a href="html/phone.php"  class="item1"  style="background-image: url(img/phone2.jpg)"></a>
          <div class="item2" ></div>

        </div>

      </div>

  </div>


  <div class="boite">


    <div class="container2 " id="v2" style="padding-top: 100px; margin: top 1000px;">
      
    <div class="left2">

          <h1>
              <span><span>Pc à</span></span>
              <span><span>processeur</span></span>
              <span><span>puissant</span></span>           
          </h1>
          
    </div>

    <div class="right2">

      <div class="item2" ></div>
        <a href="html/ordi.php"  class="item1"  style="background-image: url(img/pcacer.jpg)"></a>
      <div class="item2" ></div>
  
    </div>

    </div>

  </div>


  <div class="boite">

    <div class="v3" id="v3" style="margin-bottom:6rem"></div>

    <div class="container2">

      <div class="left2">

          <h1>
              <span><span>Des écrans</span></span>
              <span><span>4K</span></span>   
          </h1>
          
      </div>

      <div class="right2">

        <div class="item2" ></div>
          <a href="html/tv.php"  class="item1"  style="background-image: url(img/androidtv.jpg)"></a>
          <div class="item2" ></div>

            
        </div>

      </div>

    </div>

      </main>

  <?php require 'footer.php';?>


    <script type="text/javascript" src="js/main.js"></script>

    </body>
    
</html>




