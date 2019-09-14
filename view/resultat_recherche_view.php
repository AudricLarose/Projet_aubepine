<?php ob_start();?>
<?php  if (isset($resultats)) { ?>
<div class="tableau d-flex justify-content-center align-item-center align-content-center column">
<h2 class="center"> Resultat des recherches</h2><br><br>
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
            <?php echo $resultat->getNom();?>
        </td>
        <td class="center  d-flex justify-content-center align-content-center align-item-center ">
            <?php echo $resultat->getPrepa_1();?><br>
            <?php echo $resultat->getPrepa_2();?><br>
            <?php echo $resultat->getPrepa_3();?><br>
        </td>
        <td class="center isBordered ">
            <?php echo $resultat->getEspece();?>
        </td>
        <td class="center d-flex justify-content-center align-content-center align-item-center ">
            <?php echo $resultat->getEffet_1();?><br>
            <?php echo $resultat->getEffet_2();?><br>
            <?php echo $resultat->getEffet_3();?><br>
            <?php echo $resultat->getEffet_4();?><br>
        </td>
    </tr>
    <?php }?>
</table>
</div>
<?php
}  ?>
<br><br>
<div class="" id="wordcloud">
    <article class=" " id="categorie_nom">
        <h3 class="center ">Nom</h3><br>
        <div class="d-flex isRow justify-content-center">
             <form method="POST" action ="index.php?action=resultat_recherche">
                <select name="Nom">
             <?php  foreach ($wordcloud_noms as $wordcloud_nom) { ?>
                <option value="<?php echo $wordcloud_nom[0];?>"><?php echo $wordcloud_nom[0];?></option>         
        <?php } ?>
          </select>
          <input type="submit" name="saisie_recherche_par_nom" value="valider"></form>
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
<?php $content=ob_get_clean();?>