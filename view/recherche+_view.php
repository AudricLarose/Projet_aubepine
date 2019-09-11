<?php ob_start();?>
<div class="bloc9 isBordered d-flex " id="bloc_info">
  <a href="index.php?action=resultat_recherche">retour arriere</a>
                  <div class="bloc13 isBordered" id='bloc_gauche'>
                      <div class="square isBrown2 isBordered height-25 margin-auto perso_bc5">
                          <div class="band isBordered isBCWhite d-flex justify-content-center align-item-center align-content-center"><h4>Nom</h4></div>
                          <div class="center d-flex column justify-content-center align-item-center align-content-center" id='contenu_nom'>
                            <h4><?php echo $datas_recherche[0]['nom'];  ?></h4>
                          </div>
                      </div>
                      <div class="square isBrown2 isBordered height-25 margin-auto perso_bc5">
                          <div class="band isBordered isBgreen d-flex justify-content-center align-item-center align-content-center"><h4>Preparation</h4></div>
                          <div class="center d-flex column justify-content-center align-item-center align-content-center" id='contenu_prepa'>
                          <h4><?php echo $datas_recherche[0]['prepa_1'];  ?></h4>
                          <h4><?php echo $datas_recherche[0]['prepa_2'];  ?></h4>
                          <h4><?php echo $datas_recherche[0]['prepa_3'];  ?></h4>
                          </div>
                      </div>
                  </div>
                  <div class="square3 isBordered isBCWhite" id='bloc_image'></div>
                  <div class="bloc13 isBordered" id='bloc_droite'>
                      <div class="square isBrown2 isBordered height-25 margin-auto perso_bc5">
                          <div class="band isBordered isBrown d-flex justify-content-center align-item-center align-content-center"><h4>Espece</h4></div>
                          <div class="center d-flex column justify-content-center align-item-center align-content-center" id='contenu_espece'>
                            <h4><?php echo $datas_recherche[0]['espece'];  ?></h4>
                          </div>
                        </div>
                      <div class="square isBrown2 isBordered height-25 margin-auto perso_bc5">
                          <div class="band isBordered isBCWhite d-flex justify-content-center align-item-center align-content-center"><h4>Lutte contre</h4></div>
                           <div class="center d-flex column justify-content-center align-item-center align-content-center" id='contenu_effet'>
                          <h4><?php echo $datas_recherche[0]['effet_1'];  ?></h4>
                          <h4><?php echo $datas_recherche[0]['effet_2'];  ?></h4>
                          <h4><?php echo $datas_recherche[0]['effet_3'];  ?></h4>
                          <h4><?php echo $datas_recherche[0]['effet_4'];  ?></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

<?php $content=ob_get_clean();?>