<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع من اجل لاعبين</title>
    <?php wp_head(); ?>
</head>
<a href="http://localhost:8020/wp-admin">تسجيل دخول</a>

<body <?php body_class(); ?> >
    <header>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
        )
    )    
    ?>
    </header>
    <h1>  و نحاول نسوي موقع حق العاب تجريبي</h1>
   
