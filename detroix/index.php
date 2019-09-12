<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/960.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- wp_head goes right before closing head tag -->
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
        <main>
            <div class="container_12">
                <div class="grid_12">
                    <?php //do stuff ?>
                </div>
            </div>
        </main>
    </div>
   <?php get_footer(); ?>
   <!-- wp_footer goes right before closing body tag -->
   <?php wp_footer(); ?>
</body>
</html>