@extends('layouts.master')

@section('content')
<div id="mainImg">
    <div class="flexslider">
        <ul class="slides" style="text-align:center;">
            <li><img src="/images/banners/mainImg2.png" height="328" alt=""></li>
            <li><img src="/images/banners/mainImg1.png" height="328" alt=""></li>
        </ul>
    </div>
</div>

<div id="wrapper">
    <div id="content">
        <section>
            <article id="post-51" class="content">
                <header>
                    <h2 class="title"><span>会社概要</span></h2>
                </header>
                <div class="post toppage">
                    <p><img src="/images/post51.png" alt="" width="230" class="alignleft" /><br>
私たちレンタルホームページは、世の中のホームページ作成がより良くなるように邁進します。<br><br>
                    </p>
                </div>
            </article>
        </section>
        <section>
            <article id="post-52" class="content">
                <header>
                    <h2 class="title"><span>事業概要</span></h2>
                </header>
                <div class="post toppage">
                    <p><img src="/images/post52.png" alt="" width="230" class="alignleft" /><br>
ホームページ作成事業<br>
Webサイト作成事業<br>
プログラム制作事業<br>
                    </p>
                </div>
            </article>
        </section>
        <section>
            <article id="post-53" class="content">
                <header>
                    <h2 class="title"><span>実績紹介</span></h2>
                </header>
                <div class="post toppage">
                    <p><img src="/images/post53.png" alt="" width="230" class="alignleft" /><br>
株式会社ビットアークスホームページ作成<br>
<a href="http://bitarx.jp">http://bitarx.jp</a><br><br>
観光案内様向けホームページ作成<br>
<a href="http://fujimer.work/">http://fujimer.work/</a><br><br>
                    </p>
                </div>
            </article>
        </section>
        <section>
            <article id="post-54" class="content">
                <header>
                    <h2 class="title"><span>アクセス</span></h2>
                </header>
                <div class="post toppage">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.7358036044857!2d139.7179060504918!3d35.78186563195707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018931c9b954aab%3A0x906370f97f8478f1!2z44CSMTE1LTAwNDUg5p2x5Lqs6YO95YyX5Yy66LWk576977yR5LiB55uu77yU77yS4oiS77yX!5e0!3m2!1sja!2sjp!4v1504939262291" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </p>
                </div>
            </article>
        </section>

    </div><!-- / content -->

    @include('elements.sidebar')

</div>
<!-- / wrapper -->

@endsection
