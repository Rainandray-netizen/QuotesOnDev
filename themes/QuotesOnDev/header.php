<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/99ab50449a.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class();?>>
<header class="mainlogo-wrapper">
    <img class="mainlogo" src=<?php echo get_template_directory_uri()."/images/qod-logo.svg"?>>
</header>