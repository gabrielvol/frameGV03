<?php
    $snippets=1;
    $int=1;
    $navSelected=0;
    $title="Shadow Box | GV";
    $mdesc="";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link rel="stylesheet" href="/nuevo/_snippets/css/shadowbox.css"/>
<script type="text/javascript" src="/nuevo/_snippets/js/shadowbox.js"></script>
<script type="text/javascript">
    Shadowbox.init({
        counterType: "skip",
        displayCounter: false
//        players:  ['html', 'iframe','img']
    });
</script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">
        <ul class="set horizontal clearfix">
            <li><a href="/nuevo/_snippets/img/img01.jpg" rel="shadowbox[galeria]"><img src="/nuevo/_snippets/img/img01.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/_snippets/img/img02.jpg" rel="shadowbox[galeria]"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/_snippets/img/img01.jpg" rel="shadowbox[galeria]"><img src="/nuevo/_snippets/img/img01.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/_snippets/img/img02.jpg" rel="shadowbox[galeria]"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=iframe"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=iframe"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=img"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=img"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=html"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=html"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=swf"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=swf"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.swf" rel="shadowbox[galeria];width=720;height=540"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/nuevo/video/video.mp4" rel="shadowbox[galeria];width=720;height=540"><img src="/nuevo/_snippets/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>