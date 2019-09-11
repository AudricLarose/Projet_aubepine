<?php ob_start();?>
<div class="bloc1 isBordered d-flex isRow  align-content-center align-item-center justify-content-center" id="recherche">
                <form method="POST" action='index.php?action=resultat_recherche' class="">
                  <input type="text" name="saisie_recherche_par_nom" placeholder="Nom de la plante">
                  <input type="submit" name="recherche_par_nom" value="rechercher">                  
                </form>
                <form method="POST" action='index.php?action=resultat_recherche' class="">
                  <input type="text" name="saisie_recherche_par_prepa" placeholder="Preparation de la plante">
                  <input type="submit" name="recherche_par_prepa" value="rechercher">                  
                </form>
                <form method="POST" action='index.php?action=resultat_recherche' class="">
                  <input type="text" name="saisie_recherche_par_espece " placeholder="Espece de la plante">
                  <input type="submit" name="recherche_par_espece" value="rechercher">                  
                </form>
                <form method="POST" action='index.php?action=resultat_recherche' class="">
                  <input type="text" name="saisie_recherche_par_effet" placeholder="Effet de la plante">
                  <input type="submit" name="recherche_par_effet" value="rechercher">                  
                </form>
              </div>
<div class="" id="wordcloud">
    <article class=" " id="categorie_nom">
        <h3 class="center ">Nom</h3><br>
        <div class="d-flex isRow justify-content-center">
             <?php  foreach ($wordcloud_noms as $wordcloud_nom) { ?>
            <form method="POST" action ="index.php?action=resultat_recherche">
                <input type="hidden" name="saisie_recherche_par_nom" value="<?php echo $wordcloud_nom[0];?>">
                <input type="submit" name="recherche_par_nom" value="<?php echo $wordcloud_nom[0];?>">
            </form>
        <?php } ?>
        </div><br>
    </article>
    <article class=" " id="categorie_espece">
        <h3 class="center ">Espece</h3><br>
        <div class="d-flex isRow justify-content-center">
            <?php  foreach ($wordcloud_especes as $wordcloud_espece) { ?>
              <form method="POST" action ="index.php?action=resultat_recherche">
                <input type="hidden" name="saisie_recherche_par_espece" value="<?php echo $wordcloud_espece[0];?>">
                <input type="submit" name="recherche_par_espece" value="<?php echo $wordcloud_espece[0];?>">
            </form>
        <?php } ?>
        </div><br>
    </article>
    <article class=" " id="categorie_prepa">
        <h3 class="center ">Preparation</h3><br>
        <div class="d-flex isRow justify-content-center"><?php  foreach ($wordcloud_prepas as $wordcloud_prepa) { ?>
              <form method="POST" action ="index.php?action=resultat_recherche">
                <input type="hidden" name="saisie_recherche_par_prepa" value="<?php echo $wordcloud_prepa[0];?>">
                <input type="submit" name="recherche_par_prepa" value="<?php echo $wordcloud_prepa[0];?>">
            </form>
        <?php } ?>
        </div><br>
    </article>
    <article class=" " id="categorie_effet">
        <h3 class="center ">Effet</h3><br>
        <div class="d-flex isRow justify-content-center"><?php  foreach ($wordcloud_effets as $wordcloud_effet) { ?>
              <form method="POST" action ="index.php?action=resultat_recherche">
                <input type="hidden" name="saisie_recherche_par_effet" value="<?php echo $wordcloud_effet[0];?>">
                <input type="submit" name="recherche_par_effet" value="<?php echo $wordcloud_effet[0];?>">
            </form>
        <?php } ?>
    </div><br>
    </article>
</div>
<br>
<?php  if (isset($resultats)) { ?>
<div class="tableau d-flex justify-content-center align-item-center align-content-center column">
<h2 class="center"> Resultat des recherches " "</h2><br><br>
<table>
    <tr>
        <th class="center isBordered isBrown">Nom</th>
        <th class="center isBordered isBgreen">prepa</th>
        <th class="center isBordered isBrown3">espece</th>
        <th class="center isBordered isBrown2">effet</th>
    </tr>
    <?php
    foreach ($resultats as $resultat) {
        ?>
       <tr >
        <td class="center isBordered ">
            <?php echo $resultat['nom']; ?>
        </td>
        <td class="center  d-flex justify-content-center align-content-center align-item-center ">
            <?php echo $resultat['prepa_1'] ;?><br>
            <?php echo $resultat['prepa_2'] ;?><br>
            <?php echo $resultat['prepa_3'] ;?><br>
        </td>
        <td class="center isBordered ">
            <?php echo $resultat['espece'] ;?>
        </td>
        <td class="center d-flex justify-content-center align-content-center align-item-center ">
            <?php echo $resultat['effet_1'];?><br>
            <?php echo $resultat['effet_2'];?><br>
            <?php echo $resultat['effet_3'];?><br>
            <?php echo $resultat['effet_4'];?><br>
        </td>
    </tr>
    <?php }
}  ?>
</table>
</div>

<?php $content=ob_get_clean();?>