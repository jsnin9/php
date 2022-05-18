<!DOCTYPE html>
<html>

  <head>
    <title> Formulaire d'inscription </title>
    <meta charset= "utf-8">

    <link rel="stylesheet" href="new.css">

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/main.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  </head>


  <body>

      <div class="keys">

          <?php require 'headerh.php';?>
            
            <div class="containerContact">

                <div class="box">
          
                    <form id="formulaire" class="form" action="mail.php" method="post">
                      <h2>Formulaire</h2>
                          <div class="form-control">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" placeholder="florinpop17" id="nom" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Format incorrect</small>
                          </div>
                      
                          <div class="form-control">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" placeholder="sigmund" id="prenom" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Format incorrect</small>
                          </div>
                      
                          <div class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="a@florin-pop.com" id="email" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Format incorrect</small>
                          </div>
                      
                         

                          <div class="form-control1">
                          <label for="genre" >Genre</label>
                          <span class="genre" id="genre">
                                Homme<input type="radio"  name="genre" value="Homme" id="genre1" />
                                Femme<input type="radio"  name="genre" value="Femme" id="genre2"/>
                          </span>           
                          <i class="fas fa-check-circle"></i>
                          <i class="fas fa-exclamation-circle"></i>
                          <small>Format incorrect</small>
                          </div>

                          <div class="form-control">
                            <label for="metier">Metier</label>
                            <select name="metier" id="metier">
                              <option value="defaut">--Choisissez une option--</option>
                              <option value="metier1">Medecin</option>
                              <option value="metier2">Policier</option>
                              <option value="metier3">Avocat</option>
                              <option value="metier4">Professeur</option>
                              <option value="metier5">Ingénieur</option>
                              <option value="metier6">Entrepreneur</option>
                          </select>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                          </div>
                      
                          <div class="form-control">
                            <label for="naissance">Date de naissance</label>
                            <input type="date" name="anniversaire" id="birthday" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Format incorrect</small>
                          </div>

                          <div class="form-control">
                            <label for="sujet">Sujet du message</label>
                            <input type="text" name="sujet" placeholder="subject" id="sujet"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                          </div>
                      
                          <div class="form-control">
                            <label for="contenu">Contenu</label>
                            <textarea  placeholder="Bonjour, je voudrais..." name ="contenu" id="contenu" ></textarea>      
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                          </div>
                      
                          <button type="submit" class="">Envoyer</button>

                    </form>
                </div>
            </div>
      </div>


      <?php require 'footer.php'; ?>
          
      <script src=" js/contact.js"></script>
      <script src=" js/main.js"></script>
      

  </body>
</html>
