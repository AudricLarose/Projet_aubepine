<?php ob_start();?>
<h2 class="center"> Abcdaire des vegetaux médicinaux </h2> <br>
              <div class="bigbloc d-flex isRow justify-content-around">
              <?php 
                  foreach ($abcd_tab as $abcd_tab_find) {
                    if (isset($dataz[$abcd_tab_find])){
                    ?>
                      <div class='rectangle isBordered isBrown2 margin-gauche-droite opacity-90'>
                        <div class="lilsquare isBordered isBgreen d-flex justify-content-center align-content-center align-item-center "><strong><?php echo $abcd_tab_find ?></strong><br></div>
                        <div class="bigbloc isBordered  center column">
                        <?php 
                        foreach ($dataz[$abcd_tab_find] as $datat) {
                                 ?>
                                 <div class="bigbloc d-flex justify-content-center align-content-center align-item-center isBordered-b column perso_height-50">
                                <a href="index.php?action=montrer_recherche&id_plante=<?php echo $datat->getIdPlante();?>" class="linked d-contents"><?php echo $datat->getNom();?></a></div>
                                     <?php
                                }
                             ?>
                        <br></div>
                      </div> 
              <?php } 
                  }
$content=ob_get_clean();?>