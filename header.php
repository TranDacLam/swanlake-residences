<!DOCTYPE html>

<html lang="en-US" class="no-js">

<head>
    <title><?php wp_title('-', true, 'right'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?php echo THEME_URL ?>/favicon.png">
    <!--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="preload" href="<?php echo THEME_URL . '/assets/images/bg-2.png'  ?>" as="image" media="(min-width: 600px)">
    <link rel="preload" href="<?php echo THEME_URL . '/assets/images/mobile-home-01.png'  ?>" as="image" media="(min-width: 600px)">
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/main.css'  ?>" as="style"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/wow.min.js'  ?>" as="script"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/owl.carousel.min.js'  ?>" as="script"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/main.js'  ?>" as="script"> -->

    <?php wp_head(); ?>

    <script>
        let THEME_URL = "<?php echo THEME_URL ?>";
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N32MKLM');</script>
    <!-- End Google Tag Manager -->

    <!-- Admicro Tag Manager -->
    <script> (function(a, b, d, c, e) { a[c] = a[c] || [];
    a[c].push({ "atm.start": (new Date).getTime(), event: "atm.js" });
    a = b.getElementsByTagName(d)[0]; b = b.createElement(d); b.async = !0;
    b.src = "//deqik.com/tag/corejs/" + e + ".js"; a.parentNode.insertBefore(b, a)
    })(window, document, "script", "atmDataLayer", "ATMQCBQ7QJT7Q");</script>
    <!-- End Admicro Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Ads: 695702049 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-695702049"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-695702049');
    </script>
    
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N32MKLM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->