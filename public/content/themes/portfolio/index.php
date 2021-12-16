<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jackson Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <?php
    get_header();
    ?>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!--? Aside-Header -->
    <?=get_template_part('partials/aside-header')?>

            <div id="colorlib-main">
    <!--? Header -->
    <?=get_template_part('partials/header')?>

    <!--? About -->
    <?=get_template_part('partials/about')?>



    <!--? Services -->
    <?=get_template_part('partials/services')?>

    <!--? Counter -->
    <?=get_template_part('partials/components/counter')?>

    <!--? Skills -->
    <?=get_template_part('partials/skills')?>

    <!--? Education -->
    <?=get_template_part('partials/education')?>

    <!--? Experience -->
    <?=get_template_part('partials/experience')?>

    <!--? Work -->
    <?=get_template_part('partials/work')?>

    <!--? Blog -->
    <?=get_template_part('partials/blog')?>

    <!--? Contact -->
    <?=get_template_part('partials/contact')?>

            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    

    <?php
    get_footer();
    ?>

</body>

</html>