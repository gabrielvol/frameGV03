<a href="#main" id="go-main-content">Ir al contenido principal de esta página.</a>
<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta pagina"); ?>.</a>
<div class="pAbs" id="topGlobal"></div>
<header id="header" class="">
    <?php    
        if($index == 1){
            echo '<h1 class="logoHeader"><a href="/nuevo/" class="pRel displayBlock man"><img src="/nuevo/img/logo.svg" alt="'._("Logo de ").'" /></a></h1>';
        }else if($test == 1){
            echo '<h1 class="logoHeadern"><a href="/nuevo/oldframework/" class="pRel displayBlock man"><img src="/nuevo/img/logo.svg" alt="'._("Logo de ").'" /></a></h1>';
        }else if($seccion == 1){
            echo '<a href="/nuevo/" class="logoHeader displayBlock"><img src="/nuevo/img/logo.svg" alt="'._("Logo de ").'" /></a>';
        }else{
            echo '<a href="/nuevo/" class="logoHeader displayBlock"><img src="/nuevo/img/logo.svg" alt="'._("Logo de ").'" /></a>';
        }
    ?>
    
    <?php
        if($index == 1){
            include('nav.inc.php');
        }else if($test == 1){
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/oldframework/common/nav.inc.php');
        }else{
            include('nav.inc.php');
        }
    ?>
</header>
