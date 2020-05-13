<!-- Template Name: Landing Page 2 -->
<!DOCTYPE html>
<html>
<head>
    <title>Sell Your Home Now with Flat Fee Team AZ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php get_header(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap-grid.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/wp-content/themes/oceanwp/landing-page-folder/landing.css" crossorigin="anonymous"><!-- Make sure this path is correct IT WILL CHANGE -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,700,800,900" rel="stylesheet">
    <script src="https://use.fontawesome.com/52dda3483b.js"></script>

    
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52QZPFF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <header id="plain-header" class="header-background container-fluid">
            <div class="row" style="    max-width: 1140px; width: 100%; float: none; margin: auto;">
    
                <div class="col-12 col-sm-6">
                    <a href="https://flatfeeteamaz.com/" alt="Flat Fee Team website">
                        <img class="header-logo" alt="" title="" src="/wp-content/themes/oceanwp/landing-page-folder/img/flat-fee-team-az-logo-min.png">
                        <img class="header-logo-2" alt="" title="" src="/wp-content/themes/oceanwp/landing-page-folder/img/MHG-LOGO-no-effects.png">
                    </a>
                </div>
                <div class="col-12 col-sm-6 header-phone-number"><a href="tel:4802002914" id="header-phone-number-text">Questions? Call Now <span>(480) 200-2914</span></a></div>
            </div>
    </header>
    <!-- START OF CONTENT -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

 <?php get_footer();?>

    <!-- END OF CONTENT -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script> -->
    <script src="/wp-content/themes/oceanwp/landing-page-folder/js/vimeo.ga.min.js"></script>
    
</body>

</html>