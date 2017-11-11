<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php get_bloginfo( 'name' ); ?></title>

   
    <!-- ThemeCSS & Responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head();?>
</head>
<body>

<header class="header">
    <div data-velocity="-.4" id="particles" class="header-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-links">
                    <a class="btn social-link" href="http://www.facebook.com/oac4a" target="_blank"><i class="fa fa-facebook"></i>
                        <div class="ripple-wrapper"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-title-table">
        <div class="site-title-tablecell">
            <div class="slide-text">
                <h2><a href="<?php echo get_bloginfo( 'wpurl' );?>"><span><?php echo get_bloginfo( 'name' ); ?></span></a></h2>
                <p><?php echo get_bloginfo ( 'description' );?></p>
                <div id="countdown" style="display: none;">

                    <div class="countdownLabel text-muted">Superheroes unite in:</div>
                    <span class="days"></span>
                    <span class="hours"></span>
                    <span class="minutes"></span>
                    <span class="seconds hidden-xs"></span>
                </div>

            </div>

        </div>
    </div>
</header>