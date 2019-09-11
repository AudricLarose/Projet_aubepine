<?php ob_start();?>
<div class="isRedBcg">
</div>
<br>
<section class="formulaire_admin">
    <h2>Ouvrir un compte</h2><br><br>
    <form class='formu1' action='index.php' method="POST"> Nom de l'administrateur :
        <br>
        <input type="text" name="nom" required="required" placeholder="Nom..." />
        <input type="text" name="mail" placeholder="Username/E-mail..." />
        <input type="password" name="password" placeholder="Password..." required="required" />
        <input type="password" name="password_repeat" placeholder="Password repeat..." required="required" />
        <br>
        <button type='submit' name='inscription'>s'inscrire</button>
        <br> </form>
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