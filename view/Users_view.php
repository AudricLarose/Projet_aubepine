<?php ob_start();?>
<div class="isRedBcg center">
<?php echo $content_admin ?>
</div>
<br>
<section class="formulaire_admin">
    <h2>Ouvrir un compte</h2><br><br>
    <div class="nom-retro"></div>
    <form class='formu1' action='index.php' method="POST" enctype="multipart/form-data"
    >Nom de l'administrateur :
        <br>
        <div class="nom-retro isRed"></div>
        <input type="text" name="nom" required="required" id="nom_user"  placeholder="Nom..." />
        <div class="mail-retro isRed"></div>
        <input type="text" name="mail" id="mail_user" placeholder="Username/E-mail..." />
        <div class="mdp-retro isRed"></div>
        <input type="password" name="password" id="mdp_user" placeholder="Password..." required="required" />
        <div class="mdp-repeat-retro isRed"></div>
        <input type="password" name="password_repeat" id="mdp-repeat_user" placeholder="Password repeat..." required="required" /><br>
        <input type="file" name="file"></input>
        <div class="bouton_envoie d-none"><button type='submit' name='inscription' id='bouton_envoie'>s'inscrire</button></div>

        <br></form>
</section>
<section class="formulaire_admin1">
    <h2>Se connecter</h2><br><br>
    <form class='formu' action='index.php' method="POST"> Nom de l'utilisateur :
        <br>
        <input type="text" name="nom" required="required" placeholder="nom..." />
        <input type="password" name="password" placeholder="Password..." required="required" />
        <br>
        <button type='submit' name='connexion'>se connecter</button>
        <br> </form>
</section>
<?php $content=ob_get_clean();?>