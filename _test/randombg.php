<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Random Full Background | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<link href="/nuevo/_test/css/randombg.css" rel="stylesheet">
<?php
    $ext = array("bg01.jpg", "bg02.jpg");
    shuffle($ext); //Give the array a shuffle
?>
<style type="text/css">
    #main{background-image:url('/nuevo/_test/img/perfect/<?php echo $ext[0];?>')}
</style>

</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">

    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>