<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<title>白石市の学習塾「ふりスタ学習塾」| <?php if ($pageName === 'Home') : ?>自由な形式の学習形態<?php else: ?>{{$pageName}}<?php endif; ?></title>
<meta name="keywords" content="白石市学習塾">
<meta name="description" content="白石市の学習塾、ふりスタ学習塾は「Free　Style　Study　System」（フリー・スタイル・スタディ・システム）の略称で、「自由な形式の学習形態」を目的としています。 <?php if ($pageName != 'Home') : ?>| {{$pageName}} <?php endif; ?>">
<link rel="stylesheet" href="/css/style.css?<?=time();?>" type="text/css" media="screen">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48713906-14"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-48713906-14');
</script>

<meta name="google-site-verification" content="gg1GevPxM08c6q-fgfWrPr2BVhU6xk8U23fy7qt3trk" />
</head>

<body>
<header id="header" role="banner">
    <div class="inner">
        <h1>白石市の学習塾「ふりスタ学習塾」</h1>
        <h2><a href="/"><img src="/images/banners/logo-final.png" alt=""></a></h2>
	<div class="contact">
            @include('elements.contact')
	</div>
    </div>
</header>

<nav id="mainNav">
    <div class="inner">
        <a class="menu" id="menu"><span>MENU</span></a>
        <div class="panel" id="panel">
            @include('elements.menu')
        </div>
    </div>
</nav>

        <div class="container">
            @yield('content')
        </div>

<footer id="footer">
    <div class="inner">
       @include('elements.menu')
    </div>
    <p id="copyright">
</footer>
<!-- / footer -->
    <script src="/js/jquery1.7.2.min.js?<?=time();?>"></script>
    <!--[if lt IE 9]>
    <script src="/js/html5.js"></script>
    <script src="/js/css3-mediaqueries.js"></script>
    <![endif]-->
    <script src="/js/script.js?<?=time()?>"></script>
    <script src="/node_modules/underscore/underscore-min.js"></script>
    <script src="/node_modules/backbone/backbone-min.js"></script>
    <link rel="stylesheet" href="/css/flexslider.css?<?=time();?>" type="text/css" media="screen">
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/main.js?<?=time();?>"></script>
</body>
</html>
