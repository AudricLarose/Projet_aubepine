<?php ob_start();?>
<div class="bigbloc isBordered height-auto">
  <div class="bloc_score">Votre Score :<div class="score"></div></div>
  <a href="index.php?action=deconnection">deconnection</a>
  <div class="bigbloc isBordered d-flex justify-content-center align-item-center align-content-center height-60">
    <div class="bloc11 isBordered height-40 " id="guess"></div>
  </div>
  <div class="bigbloc isBordered  d-flex justify-content-center align-item-center align-content-center mobile_adapt_bloc_d-column">
    <div class="column full-width d-flex justify-content-center align-content-center">
      <div class="bloc7 width-30 height-10 isBordered bloc_quizz isBgreen isWhite d-grid"><h1 class="d-flex justify-content-center align-item-center align-content-center" id='js-choix-1'></h1></div>
      <div class="bloc7 width-30 height-10 isBordered bloc_quizz isBrown2 isWhite d-grid"><h1 class="d-flex justify-content-center align-item-center align-content-center" id='js-choix-2'></h1></div>
    </div>
    <div class="column full-width d-flex justify-content-center align-content-center">
      <div class="bloc7 width-30 height-10 isBordered bloc_quizz isBrown isWhite d-grid"><h1 class="d-flex justify-content-center align-item-center align-content-center" id='js-choix-3'></h1></div>
      <div class="bloc7 width-30 height-10 isBordered bloc_quizz isWhite isDarkBlue d-grid" ><h1 class="d-flex justify-content-center align-item-center align-content-center" id='js-choix-4'></h1></div>
  </div>
</div>
</div>
<?php $content=ob_get_clean();?>