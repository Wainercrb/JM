<!DOCTYPE>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"                content="@yield('title')">
    <meta name="author"                     content="Mahsource">
    <meta property="og:locale"              content="en_EN"/>
    <meta property="og:type"                content="article"/>
    <meta property="og:title"               content="Game of Thrones Season 6: Tease"/>
    <meta property="og:description"         content="@yield('title')"/>
    <meta property="og:url"                 content="http://mahcode.com/share_article/"/>
    <meta property="og:site_name"           content="mahcode.com"/>
    <meta property="article:publisher"      content="https://www.facebook.com/Mahcode-849841581779986"/>
    <meta property="article:published_time" content="2015-12-10T02:05:30Z"/>
    <meta property="og:image"               content="http://mahcode.com/share_article/teaser-jon-snow.jpg"/>
    <meta name="twitter:title"              content="Game of Thrones Season 6: Tease"/>
    <meta name="twitter:description"        content="The first thing Game Of Thrones released to tease its upcoming sixth season was a poster featuring Jon Snow."/>
    <meta name="twitter:image"              content="http://mahcode.com/share_article/teaser-jon-snow.jpg"/>
    <meta name="twitter:site"               content="@itsmahcode"/>
    <meta name="twitter:creator"            content="@itsmahcode"/>
    <meta name="twitter:via"                content="itsmahcode"/>
    <meta name="twitter:card"               content="photo"/>
    <meta name="twitter:url"                content="http://mahcode.com/share_article/"/>
    <title>@yield('title')</title>
        {!! Html::style(asset('components/bootstrap/css/bootstrap.min.css')) !!}
        {!! Html::style(asset('components/font-awesome/css/font-awesome.min.css')) !!}
        {!! Html::style(asset('css/animate.css')) !!}
        {!! Html::style(asset('css/public.css')) !!}
            <body>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        @Include('layouts.header')
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row full-post-container">
                        @yield('content')
                    </div>
                </div>
        {!! Html::script(asset('components/jquery/jquery.js')) !!}
        {!! Html::script(asset('components/bootstrap/js/bootstrap.min.js')) !!}
        {!! Html::script(asset('js/post.js')) !!}
    </body>
</html>