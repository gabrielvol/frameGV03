<footer id="footer" class="">        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo $companyNameFull ?>.">
    
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="gooAddress">
        <a href="<?php echo $urlGM ?>" target="_blank"><?php echo _("Direccion"); ?></a>
    </p>
    
    <p class="footerCopy">&copy; <?php echo $dateThisYear." - ".$companyNameFull ?></p>
    
    <p class="footerCopy">
        &copy;
        <?php
            $fromYear = 2010;
            echo $fromYear . (($fromYear != $dateThisYear) ? " - " . $dateThisYear : "") . $companyNameFull; 
        ?>
    </p>
    
    <div class="footerLegal">
        <ul class="horizontal clearfix containerAT">
            <li class="copy">&copy; <?php echo $dateThisYear." - ".$companyNameFull ?></li>
            <li class="tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
        </ul>
    </div> 
</footer>
    
<?php include('popups.inc.php'); ?>

<?php include('footer.js.inc.php'); ?>