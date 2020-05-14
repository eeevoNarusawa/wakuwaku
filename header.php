<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?20191002">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/favicon.ico"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100947288-12"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-100947288-12');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '463526724482757');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=463526724482757&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrapper">
      <main>
