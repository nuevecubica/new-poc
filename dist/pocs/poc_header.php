<?php
if ($_SERVER['SERVER_NAME'] == 'nuevecubica.net') {
$thisServer = 'https://' . $_SERVER['SERVER_NAME'] . '/poc/';
} else {
$thisServer = '/';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>:: nuevecubica POC  / <?php echo $pagename; ?> ::</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="web page">
    <meta name="author" content="author">
    <!--[if lt IE 9]>
    <script src="https://cdnjsgit add.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!-- BOOTSTRAP Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HIGHTLIGHT -->
    <link rel="stylesheet" href="/assets/scripts/vendor/highlight/styles/zenburn.css">
    <!-- GENERALS CSS -->
    <link rel="stylesheet" href="/assets/css/generals.min.css">
</head>
<body>
<header class="app-header">
    <figure>
        <img src="/assets/img/nuevecubica-poc-bw.svg" alt="">
    </figure>
    <h1>nuevecubica POC / <?php echo $pagename; ?></h1>

    <nav class="menu-horizontal">
        <a href="/">
            <button class="btn back"><i class="fa fa-arrow-circle-o-left"></i> Back</button>
        </a>
    </nav>
</header>