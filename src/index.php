<?php
    $index = 1;
    
    $title = "PáginaSinTítulo";
    //$titleGB = "UntitledPage";
    
    $mdesc = "";
    //$mdescGB = "";
    
    $ogTitle = "OGWebsiteTitle";
    //$ogTitleGB = "OGWebsiteTitle";
    // Max 35 char
    // 123456789-123456789-123456789-12345 
    
    $ogDesc = "Descr.";
    //$ogDescGB = "Descr.";
    // Max 65 char
    // 123456789-123456789-123456789-123456789-123456789-123456789-12345 
    
    $ogURL = $url;  
    $ogSiteName = $ogTitle;
    
    $navCurrent = 0;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="index" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
