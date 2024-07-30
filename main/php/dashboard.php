<?php 

    /** 
     *  Connects with js/to_main.js & js/dashboard.js
     *  Also connects with the css & bootstarp
     *  The variable determines the js files directory location
     */
    $num_of_dir = 2;
    $page_dir = "Dashboard";

    //  Connects with php/logout/to_logout.php
    $num_of_dir_logout = 1;
    
    require_once 'config.php';
    require_once 'imports.php';
    require_once 'import-cdn.php';
    require_once 'images.php';
    require_once 'date/date.php';
    require_once 'date/count-num-week.php';
    require_once 'date/yearDropdown.php';

    $idImg = 5;

    $sqlImg = "
        SELECT image
        FROM tbl_img
        WHERE id_img = '$idImg';
    ;";

    $resultImg = mysqli_query($connect, $sqlImg);

    $rowImg = mysqli_num_rows($resultImg);

    $rowImg = mysqli_fetch_assoc($resultImg);

    $image = $rowImg['image'];

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php conn_css($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_bootstrap($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_other_css1($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_other_css2($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_fontawesome_css($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_btm_nav_css($num_of_dir); ?>">
    <link rel="stylesheet" href="../css/lightbox.min.css?v=<?php echo time();?>">
    <?php importCDN_css(); importCDN_font(); importCDN_headerICON(); ?>
    <link rel="shortcut icon" href="<?php icon_site(); ?>" type="image/x-icon">
    <title><?php echo $page_dir.$title; ?></title>
</head>
<body onload="AutoReloadOut(<?php echo $num_of_dir; ?>, 2)">

    <div id="adjt-navbar">
        <?php require_once 'header.php'; ?>
    </div>

    <div id="main-panel">
        <?php require_once 'dashboard/main-panel.php'; ?>
    </div>

    <?php //include_once 'footer.php'; ?>
    
</body>
<script src="../js/to_dashboard.js"></script>
</html>