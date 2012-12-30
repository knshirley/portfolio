<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Karol &bull; Tinsley</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo SITE_ROOT;?>/includes/css/normalize.css">
        <link rel="stylesheet" href="<?php echo SITE_ROOT;?>/includes/css/main.css">
        <link rel="stylesheet" href="<?php echo SITE_ROOT;?>/includes/css/style.css">
        <script src="<?php echo SITE_ROOT;?>/includes/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="<?php echo $data['currentPage'];?>">

        <div id="wrapper">
            <header>
                <h1><a href="<?php echo SITE_ROOT;?>">Karol Tinsley</a></h1>

                <nav>
                    <ul>
                        <li><a href="<?php echo SITE_ROOT;?>/resume" id="nav-resume">Resume</a></li>
                        <li><a href="<?php echo SITE_ROOT;?>/designs" id="nav-designs">Designs</a></li>
                        <li><a href="<?php echo SITE_ROOT;?>/projects" id="nav-projects">Projects</a></li>
                        <li><a href="<?php echo SITE_ROOT;?>/contact" id="nav-contact">Contact</a></li>
                    </ul>
                </nav>

            </header>

            <div id="content">
               <?php require($file); ?> 
            </div>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo SITE_ROOT;?>/includes/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="<?php echo SITE_ROOT;?>/includes/js/plugins.js"></script>
        <script src="<?php echo SITE_ROOT;?>/includes/js/main.js"></script>

        </body>
</html>
