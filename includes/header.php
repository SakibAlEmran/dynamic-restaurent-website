<?php
    $companyName = "Franklin's";
    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title> <?php echo TITLE; ?>  </title>
    <link href="/assets/styles.css" rel="stylesheet"> 
</head>

<body id = "final-example">
    <div class="wrapper">
        <div id="banner">
            <a href="/" title="return to home">
                <img src="img/banner.png" alt = "Franklin's Fine Dining">
            </a>            
        </div><!--banner-->

        <div id="nav">
            <?php include('includes/nav.php'); ?>
        </div><!--end-nav-->

        <div id="content">