<footer id="footer" class="">        
    <a href="#site_top" class="button_siteTop pAbs indentedText" role="button" aria-pressed="false"><?php echo _("Subir al inicio"); ?></a>  
        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $company_name_full ?>.">
    
    <div class="logo_footer borderBox">
        <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $company_name_full ?>.">
    </div>
    <div class="footer_txt borderBox">
        <p class="footer_address">
            <a href="<?php echo $company_address_main_map_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $company_address_main_PT; } else if($gettext_idioma == 'en_GB') { echo $company_address_main_GB; } else { echo $company_address_main; } ?></a>
        </p>
        <p class="footer_tel"><?php echo _("Tel&eacute;fono"); ?>: <?php echo $company_tel_main_formatted ?></p>
        <p class="footer_mail"><?php echo _("Correo electr&oacute;nico"); ?>: <a <?php echo $company_email_href_EMAILA ?>><?php echo $company_email_address_EMAILA ?></a></p>
    </div>  
    
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="footer_address">
        <a href="<?php echo $company_address_main_map_url ?>" target="_blank"><?php if($gettext_idioma == 'pt_BR'){ echo $company_address_main_PT; } else if($gettext_idioma == 'en_GB') { echo $company_address_main_GB; } else { echo $company_address_main; } ?></a>
    </p>
    
    <p><?php echo _("Tel&eacute;fono"); ?>: <?php echo $company_tel_main_formatted ?></p>
    
    <p><?php echo _("Correo electr&oacute;nico"); ?>: <a <?php echo $company_email_href_EMAILA ?>><?php echo $company_email_address_EMAILA ?></a></p>
    
    <p class="copy_footer">&copy; <?php echo $dateThisYear ." - ". $company_name_full ?></p>
    
    <p class="copy_footer">
        &copy;
        <?php
            $fromYear = 2010;
            echo $fromYear . (($fromYear != $dateThisYear) ? " - " . $dateThisYear : "") . $company_name_full; 
        ?>
    </p>
    
    <div class="legal_footer">
        <ul class="horizontal clearfix containerAT">
            <li class="legal_copy">&copy; <?php echo $dateThisYear ." - ". $company_name_full ?></li>
            <li class="legal_tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
            <li class="legal_studio"><?php echo _("Web Design By"); ?><a href="https://www.instagram.com/xxxxxx/" class="displayBlock alignCenterBT">Estudio De Diseño</a></li>
        </ul>
    </div> 
</footer>
<?php
    // include('footer.pop.inc.php');
    include('footer.js.inc.php');
?>