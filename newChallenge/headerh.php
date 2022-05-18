<?php 

  if(!isset($_SESSION)){
    session_start();
  }

?>


<header class="header">

    <div class="tete" id="tete">
        
         <div class="entete"> 

           <h1 ><span class="titre2">jsnin9Factory</span>
             <a class="lienPanier" href="panier.php"><i class="fa-solid fa-cart-shopping"></i></a></h1>
        
        </div>

         <ul class="Navbar-menu" id="Navbar-menu"  >
            
            <li class="Navbar-item">
            <a href="index.php" class="Navbar-link">
              <i class="fas fa-home Navbar-icon"></i>
              <span class="Navbar-title">Home</span></a></li>
  
             <li class="Navbar-item">
            <a href="catalogue.php?cat=Smartphone" class="Navbar-link">
              <i class="fas fa-mobile-alt Navbar-icon" id="icon-phone"></i>
              <span class="Navbar-title">Smartphone</span></a></li>
  
             <li class="Navbar-item">
            <a href="catalogue.php?cat=Ordinateur" class="Navbar-link ">
              <i class="fas fa-laptop navbar-icon" id="icon-ordi"></i>
              <span class="Navbar-title">Ordinateur</span></a></li>
  
            <li class="Navbar-item">
            <a href="catalogue.php?cat=Télévision" class="Navbar-link">
              <i class="fas fa-tv Navbar-icon" id="icon-tele"></i>            
              <span class="Navbar-title">Télévision</span></a></li>
  
            <li class="Navbar-item">
            <a href="contact.php" class="Navbar-link">
              <i class="fas fa-mail-bulk Navbar-icon" ></i>
              <span class="Navbar-title">Contact</span></a></li>
  
             <li class="Navbar-item">
            <a href="connexion.php" class="Navbar-link">
              <i class="fas fa-mail-bulk Navbar-icon"></i>
              <span class="Navbar-title">Accéder à mon compte</span></a></li>
  
            </ul>

      
     </div>

     <nav class="navbar" id="nav">

        <ul class="navbar-menu" id="navbar-menu">

            <li class="navbar-item">
                <a href="index.php" class="navbar-link">
                <i class="fas fa-home navbar-icon"></i>
                <span class="navbar-title">Home</span></a></li>

            <li class="navbar-item">
                <a href="catalogue.php?cat=Smartphone" class="navbar-link">
                <i class="fas fa-mobile-alt navbar-icon"  id="icon-phone"></i>
                <span class="navbar-title">Smartphone</span></a></li>

            <li class="navbar-item">
                <a href="catalogue.php?cat=Ordinateur" class="navbar-link ">
                <i class="fas fa-laptop navbar-icon" id="icon-ordi"></i>
                <span class="navbar-title">Ordinateur</span></a></li>

            <li class="navbar-item">
                <a href="catalogue.php?cat=Télévision" class="navbar-link">
                <i class="fas fa-tv navbar-icon" id="icon-tele"></i>
                <span class="navbar-title">Télévision</span></a></li>

            <li class="navbar-item">
                <a href="contact.php" class="navbar-link">
                <i class="fas fa-mail-bulk navbar-icon"></i>
                <span class="navbar-title">Contact</span></a></li>

        </ul>
        
     </nav>

</header>

