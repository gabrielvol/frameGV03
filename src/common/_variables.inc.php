<?php
    // URLS
    $url = "http://wwwsitecomar";
    $urlActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    // Misc
    $dateThisYear = (int)date('Y');
    
    // Social
    $urlTW      = "https://www.twitter.com/";
    $urlFB      = "https://www.facebook.com/usuario";
    $urlIG      = "https://www.instagram.com/usuario";
    $urlLI      = "https://www.linkedin.com/usuario";
    $urlWA      = "https://api.whatsapp.com/send?phone=5491100001111";
    $urlWAme    = "https://wa.me/5491100001111?text=I'm%20interested%20in%20your%20car%20for%20sale";
    $urlEM      = "correo@servidor.com";
    $urlTO      = "mailto:".$urlEM;
    $urlGM      = "https://goo.gl/maps/aaaaaaaaaaaa";
    $urlYT      = "https://www.youtube.com/user/ffffffffffffff";    
    
    // Nav
    $navDrawer  = 1;
    $navAcc     = 0;
?>