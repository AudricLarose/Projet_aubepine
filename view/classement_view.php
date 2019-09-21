{% extends 'template_view.html.twig' %}
{% block title %} 
Classement
{% endblock %}
{% block content %}
<h2 class="center"> Classements joueurs   </h2> <br>
<div class="bigbloc d-flex isRow justify-content-around">
    <?php
  foreach ($classements[1] as $classement) {?>
      <div class="bloc5 isBordered height-60 d-flex justify-content-center column">
          <div class="square2 isBordered height-40">
            <?php if ($classement->getImg()!=='0') {
              ?> <img class="img_profile" src="./upload/<?php echo $classement->getImg();?>">
            <?php } else { ?>
              <img class="img_profile" src="./upload/defaut.jpg">
          <?php } ?>
          </div><br>
          <div class="bloc_info ">
          <div class="nom">Nom :
              <?php echo $classement->getUser();?>
          </div>
          <div class="point">Point :
              <?php echo $classement->getScore();?>
          </div>
          <div class="classement">Classement :</div>
          </div>
      </div> 
<?php } ?>
</div>
<div class="pagination band_pagination d-flex justify-content-center">
  <?php for($i=1; $i <= $nombre_de_page+1; $i++) { ?>
        <a href="index.php?action=montrer_classement&page=<?php echo $i ?>" class="lilsquare2 isBrown2 isBordered d-flex justify-content-center align-content-center align-item-center isWhite"><?php echo $i ?></a>
    <?php } ?>
</div>  
{% endblock %}