<?php ob_start();?>
<h2 class="center"> Abcdaire des vegetaux médicinaux </h2> <br>
              <div class="bigbloc d-flex isRow justify-content-around">
              <?php 
                  foreach ($abcd_tab as $abcd_tab_find) {
                    if (isset($dataz[$abcd_tab_find])){
                    ?>
                      <div class='rectangle isBordered isBrown2 margin-gauche-droite'>
                        <div class="lilsquare isBordered isBgreen d-flex justify-content-center align-content-center align-item-center "><strong><?php echo $abcd_tab_find ?></strong><br></div>
                            <div class="bigbloc isBordered d-flex justify-content-center align-item-center align-content-center center">
                        <?php 
                        foreach ($dataz[$abcd_tab_find] as $datat) {
                                 ?><br>
                                <a href="index.php?action=montrer_recherche&id_plante=<?php echo $datat['id_plante'];?>" class="linked d-contents"><?php echo $datat['nom'];?></a>
                                      <br><?php
                        }
                   ?>
                        <br></div>
                      </div> 
              <?php } 
                  }
$content=ob_get_clean();?>