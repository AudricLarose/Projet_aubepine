<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scal=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bibliotheque_UX.css">
  <link rel="stylesheet" href="css/Coriolis.css"></head>
  <body>
      <div class="bloc_principal isBordered perso_bck">
          <div class="bloc1 isBordered">
              <div class="bloc4 isBordered">
                  <div class="bloc5 isBordered d-flex justify-content-center align-item-center align-content-center"><h2>CORIOLIS</h2></div>
                  <div class="bloc6 isBordered isDarkBlue d-flex justify-content-around">
                      <div class="bloc7 isBordered isBWhite d-flex justify-content-center isWhite align-content-center align-item-center">Home</div>
                      <div class="bloc7 isBordered isBrown2 d-flex justify-content-center isWhite align-content-center align-item-center">Quizz</div>
                      <div class="bloc7 isBordered isDarkBlue"></div>
                      <a href='index.php?action=montrer_documentation' class="bloc7 isBordered isBrown3 d-flex justify-content-center isWhite align-content-center align-item-center">Documentations</a>
                      <div class="bloc7 isBordered isBrown d-flex justify-content-center isWhite align-content-center align-item-center">Recherche</div>
                  </div>
              </div>
          </div>
          <div class='box-bandereau d-flex justify-content-center isBordered'>
              <div class="parallax d-flex justify-content-center align-content-center align-item-center">
                <div class="bloc2 isBordered d-flex isRow justify-content-center ">
            <a href='index.php' class="square isBordered perso_bc2 isBrown d-flex justify-content-center isWhite align-content-center align-item-center"><i class="fas fa-home fa-5x linked isWhite"></i></a>
            <a href='index.php?action=montrer_quizz' class="square isBordered perso_bc2 isBgreen d-flex justify-content-center isWhite align-content-center align-item-center"><i class="fas fa-puzzle-piece fa-5x"></i></a>
            <a href='index.php?action=montrer_documentation' class="square isBordered perso_bc2 isBrown2 d-flex justify-content-center isWhite align-content-center align-item-center linked isWhite"><i class="fas fa-book fa-5x"></i></a>
            <a href='index.php?action=resultat_recherche' class="square isBordered perso_bc2 isBrown3 d-flex justify-content-center isWhite align-content-center align-item-center"><i class="fab fa-sistrix fa-5x"></i></a>
             <a href='index.php?action=montrer_login' class="round2 isBordered perso_bc2 isBrown d-flex justify-content-center isWhite align-content-center align-item-center"><i class="fas fa-key fa-5x"></i></a>
          </div>
              </div>
          </div>          
          <div class="border_body isBordered">
                <?= $content_body;?>
         </div>
      </div>
      <script src="js/apps.js"></script>
  </body>
</html>
