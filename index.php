<?php get_header() ?>

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
<?php
echo do_shortcode('[smartslider3 slider="13"]');
?>
<div class="colonne">
 	<div class="resultat" id="resultat">
        <h1><bold>Les derniers résultat<br></bold></h1>
        <iframe class="iframeResultat" src="https://foot22.fff.fr/competitions/?id=391991&poule=3&phase=1&type=ch&tab=resultat" allow="fullscreen"></iframe>
    </div>
	<div class="classement" id="classement">
        <h1><bold>Classement<br></bold></h1>
        <iframe class="iframeClassement" src="https://foot22.fff.fr/competitions/?id=391991&poule=3&phase=1&type=ch&tab=ranking" allow="fullscreen"></iframe>    
    </div>
</div>
<div class="monter" id="monter">
    <?php
        echo do_shortcode('[smartslider3 slider="3"]');
    ?>
</div>
<div class="colonne">
 	<div class="Facebook">
        <h1><bold>Les dernieres Publications<br></bold></h1>
        <iframe class="iframeFacebook" src="https://www.facebook.com/100008206059563/videos/1052065268737254/" allow="fullscreen"></iframe>
    </div>
</div>
<div class="recentrer">
    <div class="newsletter">
        <div class="container-margin">
            <div class="main-title">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <h1><bold>Newsletter</bold></h1><br>
                <h2>Abonner vous maintenant afin d'être:</h2><br>
                <p class="p1">● Avertis des prochains matchs.</p><br>
                <p class="p2">● Informer de l'adresse et heure de match.</p><br>
                <p class="p3">● Ainssi que des resultats du match.</p><br>
                <div class="margin-button">
                    <input type="button" onclick="window.location.href = 'https://www.goelands.local/newsletter/?preview_id=156&preview_nonce=aa61f7469a&preview=true';"  value="S'abonner" class="abonnement"></input><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>