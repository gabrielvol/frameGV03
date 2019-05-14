<?php
    $text_ES = "Navegar el sitio en idioma espa&ntilde;ol";
    $text_GB = "Switch to English version";
    $text_PT = "Navegar no site em Portugu&ecirc;s";
    $text_JP = "sinTrauccion";
    $text_DE = "Durchsuchen Sie die Website in deutscher Sprache";
    $text_FR = "Parcourir le site en langue française";
?>

<ul class="lang horizontal clearfix">
    <li>
        <a href="<?php echo $urlActual ?>?l=es_AR" class="displayBlock mask hoverGrowL">
            <img src="/nuevo/img/fl_ar.svg" alt="<?php echo $text_ES; ?>.">
        </a>
    </li>
    <li>
        <a href="<?php echo $urlActual ?>?l=en_GB" class="displayBlock mask hoverGrowL">
            <img src="/nuevo/img/fl_gb.svg" alt="<?php echo $text_GB; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=pt_BR" class="displayBlock mask hoverGrowL">
            <img src="/nuevo/img/fl_br.svg" alt="<?php echo $text_PT; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=ja_JP" class="displayBlock mask hoverGrowL">
            <img src="/nuevo/img/fl_jp.svg" alt="<?php echo $text_JP; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=de_DE" class="displayBlock mask hoverGrowL">
            <img src="/nuevo/img/fl_de.svg" alt="<?php echo $text_DE; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=fr_FR" class="displayBlock mask hoverGrowL">
            <img src="/nuevo/img/fl_fr.svg" alt="<?php echo $text_FR; ?>.">
        </a>
    </li>
</ul>