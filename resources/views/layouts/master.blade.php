<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<title>Site Title</title>
<meta name="keywords" content="">
<meta name="description" content="サイト説明 | {{$pageName}}">
<link rel="stylesheet" href="/css/style.css?<?=time();?>" type="text/css" media="screen">

</head>

<body>
<header id="header" role="banner">
    <div class="inner">
        <h1>レンタルホームページ</h1>
        <h2><a href="/"><img src="/images/banners/logo.png" alt=""></a></h2>
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
