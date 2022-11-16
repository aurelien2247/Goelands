<?php
echo do_shortcode('[smartslider3 slider="12"]');
?><br><br>
<div class="container-galerie">
    <h1>Bienvenue sur la page galerie du club</h1>
    <p class="p1">Sur cette page vous trouverez toutes les photos des matchs d'année en année</p>
    <p class="p2">Mention spéciale pour <strong>Tilio</strong> le fils de petit Fred qui nous permet d'archiver c'est belle rencontre !</p>
</div>
<div class="aligner">
    <div class="saison2020-2021">
        <?php echo do_shortcode( '[ngg src="albums" ids="9" display="basic_compact_album"]'); ?>
    </div>
    <div class="saison2021-2022">
        <?php echo do_shortcode( '[ngg src="albums" ids="10" display="basic_compact_album"]'); ?>
    </div>
</div>
<br><br>
