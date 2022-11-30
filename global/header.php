<?php
    require('./classes/DB.php');
    $uri = $_SERVER['REQUEST_URI'];
    
    if($uri == '/'){
        $url = 'home';
        $classDEf = 'container-fluid g-0 home' ;
    }elseif($uri == '/login'){
        $url =  trim($uri, "/");
        $classDEf = 'container container-lg '.trim($uri, "/");
    }else{
        $url =  trim($uri, "/");
        $classDEf = ' '.trim($uri, "/");
    }

    $currentUser = "midwife";
    if($currentUser == 'midwife' && $uri != '/login'){
        $navbar = $currentUser;
    }else{
        $navbar = 'default';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <link href="../assets/css/global/styles.css" rel="stylesheet">
        <link href="../assets/css/navbar/styles.css" rel="stylesheet">
        <link href="/pages/<?= $url?>/styles.css" rel="stylesheet">
        <title><?= ucwords($url) ?></title>
    </head>
    <body>
        <?php require('page-parts/navbar/'.$navbar.'/index.php')?>
        <div class="<?= $classDEf?>">

