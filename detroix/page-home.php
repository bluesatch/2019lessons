<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>css/960.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<!-- don't forget slashes in front of folders -->
<body>
    <?php get_header(); ?>
        <main>
            <div class="heroimage container_12">
                <div class="grid_12">
                    <a href="#link"><img src="<?php echo get_template_directory_uri(); ?>/media/hero-image.jpg" alt="hero" class="hero"></a>
                    <div class="buttons">
                        <div class="button button1"><a href="#link"></a></div>
                        <div class="button button2"><a href="#link"></a></div>
                        <div class="button button3"><a href="#link"></a></div>
                    </div>
                </div>
            </div>
            <div class="maincontent container_12">
                <div class="content smart grid_4">
                    <h2>smart</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/smart.jpg" alt="smartimage" class="smartimage">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci officiis totam minima corporis id, quod illo sequi in quibusdam modi exercitationem rerum. Repudiandae, ullam explicabo.</p>
                    <a href="#link" class="more-button">more</a>
                </div>
                <div class="content strong grid_4">
                    <h2>strong</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/strong.jpg" alt="strongimage" class="strongimage">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae aliquid eveniet, ipsam atque fugiat delectus, quidem, suscipit vitae repellat accusantium nihil repellendus molestiae doloremque?</p>
                    <a href="#link" class="more-button">more</a>
                </div>
                <div class="content stable grid_4">
                    <h2>stable</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/stable.jpg" alt="stableimage" class="stableimage">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex in atque dolore aliquam. Enim fugit eum molestiae quae totam blanditiis facilis quod perferendis consectetur sit.</p>
                    <a href="#link" class="more-button">more</a>
                </div>
            </div>
        </main>
    </div>
   <?php get_footer(); ?>
   <?php wp_footer(); ?>
</body>
</html>